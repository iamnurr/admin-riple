<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
            padding: 40px 20px;
            line-height: 1.6;
            font-family: 'Public Sans', sans-serif;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .main {
            width: 100%;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            text-align: center;
            padding: 20px 0;
        }

        .logo {
            margin-bottom: 14px;
        }

        .logo img {
            width: 130px;
            max-width: 100%;
            height: auto;
        }

        .hero-section {
            background: linear-gradient(135deg, #fef5e7 0%, #e6fffa 100%);
            padding: 40px 20px;
            padding-bottom: 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .confirmation-title {
            font-size: 24px;
            font-weight: bold;
            color: #2d3748;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .illustration {
            width: 80px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            display: block;
            max-width: 100%;
            height: auto;
        }

        .content {
            padding: 24px;
        }

        .greeting {
            font-size: 14px;
            color: #4a5568;
            margin-bottom: 20px;
        }

        .message {
            font-size: 14px;
            color: #718096;
            margin-bottom: 30px;
        }

        .details-title {
            font-size: 20px;
            font-weight: bold;
            color: #333e52;
            margin-bottom: 25px;
        }

        .details-table {
            width: 100%;
            margin-bottom: 30px;
        }

        .detail-row {
            display: flex;
            flex-direction: row;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .detail-label {
            flex: 1;
            font-size: 14px;
            color: #718096;
            font-weight: 500;
        }

        .detail-value {
            flex: 1.5;
            font-size: 14px;
            color: #2d3748;
            font-weight: 500;
            word-break: break-word;
        }

        .closing-message {
            font-size: 14px;
            color: #4a5568;
            margin-bottom: 10px;
        }

        .signature {
            font-size: 14px;
            color: #4a5568;
            margin-bottom: 5px;
        }

        .team-name {
            font-size: 14px;
            color: #4a5568;
        }

        .footer {
            background-color: #f7fafc;
            padding: 30px 20px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }

        .footer-title {
            font-size: 18px;
            font-weight: bold;
            color: #2d3748;
            margin-bottom: 15px;
        }

        .footer-text {
            font-size: 14px;
            color: #718096;
            word-wrap: break-word;
        }

        .footer-link {
            color: #4fd1c7;
            text-decoration: none;
            font-weight: 500;
        }

        /* Mobile Responsive Styles */
        @media screen and (max-width: 480px) {
            body {
                padding: 20px 10px;
            }

            .main {
                border-radius: 8px;
            }

            .hero-section {
                padding: 30px 15px;
            }

            .confirmation-title {
                font-size: 20px;
            }

            .content {
                padding: 20px 15px;
            }

            .details-title {
                font-size: 18px;
            }

            .detail-row {
                flex-direction: column;
                padding: 10px 0;
            }

            .detail-label {
                margin-bottom: 4px;
            }

            .detail-value {
                flex: 1;
            }

            .footer {
                padding: 20px 15px;
            }

            .footer-title {
                font-size: 16px;
            }

            .footer-text {
                font-size: 13px;
            }
        }

        /* Ensure email client compatibility */
        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            .detail-row {
                display: -webkit-box;
                display: -webkit-flex;
                display: flex;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Nuehva" class="logo-image">
            </div>
        </div>
        <div class="main">
            <div class="hero-section">
                <h1 class="confirmation-title">Thank You for Contacting Us</h1>
                <img src="{{ asset('images/call1.png') }}" alt="Contact Confirmation" class="illustration">
            </div>

            <div class="content">
                <div class="greeting">Dear <strong>{{ $contact->full_name }}</strong>,</div>

                <div class="message">
                    Thank you for reaching out to us. We have received your contact form submission and will review it shortly.
                </div>

                <div class="details-title">Here's a summary of the information you provided:</div>

                <div class="details-table">
                    <div class="detail-row">
                        <div class="detail-label">Service Type</div>
                        <div class="detail-value">{{ $contact->formatted_service_type }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="detail-label">Project Budget</div>
                        <div class="detail-value">{{ $contact->formatted_project_budget }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="detail-label">Project Details</div>
                        <div class="detail-value">{{ $contact->project_details }}</div>
                    </div>
                </div>

                <div class="closing-message">We will get back to you as soon as possible.</div>
                <div class="signature">Best regards,</div>
                <div class="team-name">Team Nuehva Medium</div>
            </div>

            <div class="footer">
                <div class="footer-title">Questions?</div>
                <div class="footer-text">
                    Reply to this email or get in touch with us at
                    <span class="footer-link">nuehva@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
