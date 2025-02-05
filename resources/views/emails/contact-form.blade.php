<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(to right, #4B0082, #800080);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 8px 8px;
            border: 1px solid #eee;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #4B0082;
        }
        .value {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0;">New Contact Form Submission</h1>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        <div class="field">
            <div class="label">Inquiry Type:</div>
            <div class="value">{{ ucfirst($data['inquiry_type']) }}</div>
        </div>

        <div class="field">
            <div class="label">Message:</div>
            <div class="value">{{ $data['message'] }}</div>
        </div>
    </div>
</body>
</html> 