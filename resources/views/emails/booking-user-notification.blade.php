<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Public Sans', sans-serif;
        }
    </style>
</head>
<body>
    <h2>Booking Confirmation</h2>
    <p>Dear {{ $booking->name }},</p>

    <p>Thank you for scheduling a meeting with us. Your booking has been received successfully.</p>

    <p>Here are your booking details:</p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Date & Time</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y g:i A') }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Timezone</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $booking->timezone }}</td>
        </tr>
        @if($booking->guest_email)
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Additional Participants</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ implode(', ', $booking->guest_email) }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Message</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $booking->message }}</td>
        </tr>
    </table>

    <p>We look forward to meeting with you!</p>

    <p>Best regards,<br>Your Team</p>
</body>
</html>
