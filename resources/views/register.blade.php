<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/signup" method="post">
        @csrf
        <input type="name" name="name" placeholder="Coloque seu nome">
        <input type="email" name="email" placeholder="Coloque seu E-mail">
        <input type="password" name="password" placeholder="Insira sua senha">
        <button type="submit">Register</button>
    </form>
</body>
</html>