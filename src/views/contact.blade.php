<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>contact us</h3>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <label>name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="email" name="email">
        <label>body</label>
        <textarea name="message" cols="5" rows="10" placeholder="your message"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>