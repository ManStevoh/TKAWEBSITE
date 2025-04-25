<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <h1>You have received a new enquiry</h1>
    <p>Name:- {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Subject: {{$user->subject}}</p>
    <p>Message: {{$user->message}}</p>
</body>
</html>