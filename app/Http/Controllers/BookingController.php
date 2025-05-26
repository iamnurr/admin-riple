<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Mail\BookingAdminNotification;
use App\Mail\BookingUserNotification;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        $data['bookings'] = Booking::orderByDesc('created_at')
            ->paginate(20);

        return view('bookings.index', $data);
    }

    public function show(Booking $booking)
    {
        $data['booking'] = $booking;

        return view('bookings.show', $data);
    }

    public function store(StoreBookingRequest $request)
    {
        try {
            $storeData = $request->validated();
            $date = Carbon::parse($request->input('date'))->format('Y-m-d H:i:s');
            $storeData['date'] = $date;
            $booking = Booking::create($storeData);

            if ($booking) {
                // Send email to admin
                Mail::to(config('mail.admin_address'))->send(new BookingAdminNotification($booking));

                // Send email to user
                Mail::to($booking->email)->send(new BookingUserNotification($booking));

                // Send emails to guest participants if any
                if (!empty($booking->guest_email)) {
                    foreach ($booking->guest_email as $guestEmail) {
                        Mail::to($guestEmail)->send(new BookingUserNotification($booking));
                    }
                }

                return response()->json(['message' => 'Booking created successfully.'], 200);
            }

            return response()->json(['message' => 'Something went wrong. Please try again.'], 400);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create booking. Please try again.',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }
}
