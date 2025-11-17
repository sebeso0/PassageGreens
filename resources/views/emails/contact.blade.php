<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #1E3A2A;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border: 1px solid #ddd;
        }

        .field {
            margin-bottom: 20px;
        }

        .field strong {
            color: #1E3A2A;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>Passage Greens - Cultivating Reimagined</p>
        </div>

        <div class="content">
            <div class="field">
                <strong>Name:</strong><br>
                {{ $name }}
            </div>

            <div class="field">
                <strong>Email:</strong><br>
                {{ $email }}
            </div>

            @if(isset($phone) && $phone)
            <div class="field">
                <strong>Phone:</strong><br>
                {{ $phone }}
            </div>
            @endif

            <div class="field">
                <strong>Subject:</strong><br>
                {{ ucfirst($subject) }}
            </div>

            <div class="field">
                <strong>Message:</strong><br>
                {{ $message }}
            </div>
        </div>
    </div>
</body>

</html>