<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/users/">
        @csrf
        <label for="">Name</label>
        <input type="text" placeholder="Name" name="name">
        <br><br>
        <label for="">Lastname</label>
        <input type="text" placeholder="Lastname" name="lastname">
        <br><br>
        <button type="submit">
            Guardar
        </button>
    </form>
</body>
</html>