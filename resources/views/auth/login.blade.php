<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>
        Welcome: 
        @auth
             {{ Auth::user()->name }}
        @endauth
    </h1>

    <form method="post" action="{{ url('login/') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Correo electronico">
        <br>
        <label for="email">Password</label>
        <input type="password" name="password" placeholder="*************">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>