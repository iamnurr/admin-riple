<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;

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
        $storeData = $request->validated();
        $booking = Booking::create($storeData);
        if ($booking) {
            return response()->json(['message' => 'Booking created successfully.'], 200);
        }

        return response()->json(['message' => 'Something went wrong. Please try again.'], 400);
    }
}
