<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Nyata Website!</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">

    <table
        style="max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <tr>
            <td style="background-color: #BF0205; text-align: center; padding: 20px;">
                <h2 style="color: #fff; margin: 0;">Welcome to Nyata Foundation Website!</h2>
            </td>
        </tr>
        <tr>
            <td>
                <button style="border: none; background: none; padding: 0; margin: 0;">
                    <a href="https://nyatafoundation.org">
                        <img src="https://nyatafoundation.org/image/other/Logo-Nyata.png"
                            alt="Education Foundation Logo" style="max-width: 25%; height: 25%;">
                    </a>
                </button>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <h3>Hello {{ $mailData['name'] }},</h3>
                <h2>Welcome to Nyata website!</h2>
                <p>Your contribution helps provide education to students who cannot attend school due to various
                    reasons.</p>
                <p>We greatly appreciate your generosity and support towards making a positive impact in these students'
                    lives.</p>
                <p>If you have any questions or need assistance, feel free to contact us.</p>
                <p>Best regards,<br> Nyata Administrator</p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f2f2f2; padding: 10px; text-align: center;">
                <a href="https://nyatafoundation.org/nyataadmin"
                    style="text-decoration: none; color: #BF0205; background-color: #fff; border: 2px solid #BF0205; border-radius: 4px; padding: 10px 20px; display: inline-block;">
                    Log In Now!</a>
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
