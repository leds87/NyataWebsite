<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Admin Form</h1>
    <p>There's user that ask to contact Admin via Nyata Contact Admin Form.</p>
    <h4>Name: {{ $mailData['name'] }}</h4>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Phone: {{ $mailData['phone'] }}</p>
    <p>Subject: {{ $mailData['subject'] }}</p>
    <p>Description: {{ $mailData['description'] }}</p>
</body>
</html>