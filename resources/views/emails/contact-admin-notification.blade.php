<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
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
    <div class="container">
    <h2>New Contact Form Submission</h2>
    <p>You have received a new contact form submission with the following details:</p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <th style="text-align: left; padding: 8px; border: 1px solid #ddd;">Field</th>
            <th style="text-align: left; padding: 8px; border: 1px solid #ddd;">Value</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $contact->full_name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Company Name</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $contact->company_name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Email</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $contact->email }}</td>
        </tr>
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
</body>
</html>
