<!DOCTYPE html>
<html>
<head>
    <title>New Booking Received</title>
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
    <h2>New Booking Received</h2>
    <p>You have received a new booking with the following details:</p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <th style="text-align: left; padding: 8px; border: 1px solid #ddd;">Field</th>
            <th style="text-align: left; padding: 8px; border: 1px solid #ddd;">Value</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $booking->name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Email</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $booking->email }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Date</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y g:i A') }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Timezone</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $booking->timezone }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Message</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $booking->message }}</td>
        </tr>
        @if($booking->guest_email)
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Guest Emails</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ implode(', ', $booking->guest_email) }}</td>
        </tr>
        @endif
    </table>
</body>
</html>
