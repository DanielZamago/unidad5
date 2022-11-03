<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Client</title>
</head>
<body>
    
    <form method="POST" action="{{ url('clients/') }}">

        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Nombre completo">
        <br>
        <label for="">Email:</label>
        <input type="text" name="email"placeholder="Email">
        <br>
        <label for="">Phone number</label>
        <input type="text" name="phone_number" placeholder="Phone number">
        <br>
        <button type="submit">Send</button>

    </form>

</body>
</html>