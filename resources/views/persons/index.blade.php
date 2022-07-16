<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos os personagens</title>
</head>
<body>
    <h1>Personagens</h1>

    <ul>

        @foreach ($persons as $person)
            <li>{{$person->name}} - 
                {{$person->anime}} - 
                {{$person->nota_particular}} 
                <a href="/personagens/show/{{ $person->id }}"><p>Ver mais sobre</p></a>
            </li>
        @endforeach
    </ul>

    <a href="/personagens/create">Registrar um personagem</a>
    
</body>
</html>