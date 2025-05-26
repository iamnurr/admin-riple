<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\Contact;
use App\Mail\ContactAdminNotification;
use App\Mail\ContactUserNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('admin/bookings/{booking}/show', [BookingController::class, 'show'])->name('bookings.show');

    Route::get('admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('admin/contacts/{contact}/show', [ContactController::class, 'show'])->name('contacts.show');
});

// Test mail route (only for development)
if (app()->environment('local')) {
    Route::get('/test-mail', function () {
        $contact = new Contact([
            'full_name' => 'Test User',
            'company_name' => 'Test Company',
            'email' => 'test@example.com',
            'service_type' => 'web_development',
            'project_budget' => 1000,
            'project_details' => 'Test project details'
        ]);

        try {
            Mail::to(config('mail.admin_address'))->send(new ContactAdminNotification($contact));
            return 'Test email sent successfully! Check your Mailtrap inbox.';
        } catch (\Exception $e) {
            return 'Error sending mail: ' . $e->getMessage();
        }
    });
}

require __DIR__ . '/auth.php';
