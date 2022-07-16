<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registre um personagem</title>
</head>
<body>
    <h1>registre um personagem</h1>

    <form action="/personagens/store" method="post">
        @csrf
        <input type="name" name="name" placeholder="Qual é o nome do personagem?">
        <br>
        <input type="name" name="anime" placeholder="Anime do personagem?">
        <br>
        <input type="text" name="description" placeholder="Descrição do personagem?">
        <br>
        <input type="text" name="raca" placeholder="Qual é a raça do personagem?">
        <br>
        <input type="text" name="Heroi_ou_vilao" placeholder="Heroi, vilão ou?">
        <br>
        <input type="text" name="Fraqueza" placeholder="Qual é a fraqueza do personagem?">
        <br>
        <input type="number" name="nota_particular" placeholder="De 0 a 10, qual é a nota dele?">
        <br>
        <button type="submit"> Registrar </button>
    </form>

    <a href="/personagens">Volte para a Página inicial</a>
</body>
</html>