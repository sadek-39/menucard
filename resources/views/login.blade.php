<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="post" action="{{route('login')}}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" id="email">
        <label>Password:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Submit</button>

    </form>
    
</body>
</html>