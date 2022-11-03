<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Client</title>
</head>
<body>
    
    <form method="POST" action="{{ url('clients/') }}">

        @method('PUT')
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Nombre completo" value="{{ $client->name }}">
        <br>
        <label for="">Email:</label>
        <input type="text" name="email"placeholder="Email" value=" {{$client->email}} ">
        <br>
        <label for="">Phone number</label>
        <input type="text" name="phone_number" placeholder="Phone number" value=" {{$client->phone_number}} ">
        <br>
        <input type="hidden" name="id" id="id" value=" {{ $client->id }} ">
        <button type="submit">Edit Client</button>

    </form>

</body>
</html>