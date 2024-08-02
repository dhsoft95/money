<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
<div style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border: 2px solid #ffc125;">
    <h2 style="color: #ffc125; border-bottom: 2px solid #ffc125; padding-bottom: 10px;">New Contact Form Submission</h2>


    <div style="background-color: #fffaf0; padding: 20px; border-radius: 5px; margin-top: 20px;">
        <p style="margin-bottom: 10px;"><strong style="color: #ffc125;">Name:</strong> {{ $data['name'] }}</p>
        <p style="margin-bottom: 10px;"><strong style="color: #ffc125;">Email:</strong> {{ $data['email'] }}</p>
        <p style="margin-bottom: 10px;"><strong style="color: #ffc125;">Organization:</strong> {{ $data['organization'] ?? 'Not provided' }}</p>
        <p style="margin-bottom: 10px;"><strong style="color: #ffc125;">Message:</strong></p>
        <p style="background-color: #fff; padding: 15px; border-left: 4px solid #ffc125; margin-top: 10px;">{{ $data['body'] }}</p>
    </div>

    <div style="margin-top: 20px; font-size: 0.9em; color: #666; text-align: center; background-color: #ffc125; padding: 10px; border-radius: 5px;">
        <p style="margin: 0; color: #fff;">This is an automated message. Please do not reply directly to this email.</p>
    </div>
</div>
</body>
</html>
