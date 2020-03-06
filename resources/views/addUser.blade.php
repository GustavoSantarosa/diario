<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuario</title>
</head>
<body>
<form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="">Nome do Usuario</label>
        <input type="text" name="name" id="">
        <br>
        <label for="">E-mail do Usuario</label>
        <input type="email" name="email" id="">
        <br>
        <label for="">Senha do Usuario</label>
        <input type="password" name="password" id="">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar Usuario</button>
    </form>
</body>
</html>