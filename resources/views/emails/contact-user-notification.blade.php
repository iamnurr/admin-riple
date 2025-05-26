<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Contacting Us</title>
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
    <h2>Thank You for Contacting Us</h2>
    <p>Dear {{ $contact->full_name }},</p>

    <p>Thank you for reaching out to us. We have received your contact form submission and will review it shortly.</p>

    <p>Here's a summary of the information you provided:</p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Service Type</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $contact->formatted_service_type }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Project Budget</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $contact->formatted_project_budget }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Project Details</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $contact->project_details }}</td>
        </tr>
    </table>

    <p>We will get back to you as soon as possible.</p>

    <p>Best regards,<br>Your Team</p>
</body>
</html>
