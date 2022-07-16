<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/signin" method="post">
        @csrf
        <input type="email" name="email" placeholder="Coloque seu E-mail">
        <input type="password" name="password" placeholder="Insira sua senha">
        <button type="submit">Logar</button>
    </form>
</body>
</html>