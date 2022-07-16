<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personagem</title>
</head>
<body>
    <h1>Esse é o </h1>

    
    <p>{{$persons->name }} - </p>
    <p>{{$persons->anime}} - </p>
    <p>{{$persons->description}} - </p>
    <p>{{$persons->raca}} - </p>
    <p>{{$persons->Heroi_ou_vilao}} - </p>
    <p>{{$persons->Fraqueza}} - </p>
    <p>{{$persons->nota_particular}} - </p>

    <a href="/personagens/create">Registrar um personagem</a><br>
    <a href="/personagens/delete/{{$persons->id}}">excluir personagem</a><br>
    <a href="/personagens/edit/{{$persons->id}}">Editar personagem</a>


    
</body>
</html>