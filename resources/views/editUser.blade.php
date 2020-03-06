<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar de Usuario</title>
</head>
<body>
<form action="{{ route('users.edit', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="">Nome do Usuario</label>
        <input type="text" name="name" id="" value="{{ $user->name }}">
        <br>
        <label for="">E-mail do Usuario</label>
<input type="email" name="email" id="" value="{{ $user->email}}">
        <br>
        <label for="">Senha do Usuario</label>
        <input type="password" name="password" id="">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Editar Usuario</button>
    </form>
</body>
</html>