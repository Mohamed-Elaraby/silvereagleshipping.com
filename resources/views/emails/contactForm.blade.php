<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    You have received a new message from your website contact form
    <br />
    Here are the details :
    <br />
    Name : {{ $name }}
    <br />
    Email : <a href="mailto:{{ $email }}">{{ $email }}</a>
    <br />
    Phone : {{ $phone }}
    <br />
    Message : <br /> {{ $body }}
</div>
</body>
</html>
