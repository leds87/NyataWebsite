{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome To Nyata Foundation {{ $mailData['name'] }}!</h1>
    {{-- <h2>Name: {{ $mailData['name'] }}</h2> --}}
    {{-- <p>Email: {{ $mailData['email'] }}</p> --}}
    {{-- <p>Phone: {{ $mailData['phone'] }}</p> --}}
    {{-- <p>Subject: {{ $mailData['subject'] }}</p> --}}
    {{-- <p>Description: {{ $mailData['description'] }}</p> 
    <p>Thankyou for registering as a user in Nyata Website!</p>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Nyata Website!</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">

    <table style="max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <tr>
            <td style="background-color: #BF0205; text-align: center; padding: 20px;">
                <h2 style="color: #fff; margin: 0;">Welcome to Nyata Foundation Website!</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <h3>Hello {{ $mailData['name'] }},</h3>
                <h2>Welcome to Nyata website!</h2>
                <p>Thank you for joining us. We hope you have a great experience.</p>
                <p>If you have any questions or need assistance, feel free to contact us.</p>
                <p>Best regards,<br> Nyata Administrator</p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f2f2f2; padding: 10px; text-align: center;">
                <a href="https://nyatafoundation.org/nyataadmin" style="text-decoration: none; color: #BF0205; background-color: #fff; border: 2px solid #BF0205; border-radius: 4px; padding: 10px 20px; display: inline-block;">Go to Website!</a>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f2f2f2; padding: 10px; text-align: center;">
                <p style="margin: 0;">© {{ date('Y') }} Nyata Foundation. All rights reserved.</p>
            </td>
        </tr>
    </table>

</body>
</html>
