<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Filmes</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <div class="container">

        <h1>Lista de Filmes</h1>

        <a href="/filme/adicionar">+ Novo Filme</a>

        <ul class="list-group">

            <!-- // comando @ funciona no blade -->
            @foreach($filmes as $filme)

            <!-- <li>{{ $filme->title }} ({{ $filme->rating }})</li> -->
            <li class="list-group-item">
                <a href="/filmes/{{ $filme->id }}">
                    {{ $filme->titleComRating() }}
                </a>

                <a href="/filme/editar/{{ $filme->id }}" class="btn btn-success btn-sm">Editar</a>
                <a href="/filme/excluir/{{ $filme->id }}" class="btn btn-danger btn-sm">Excluir</a>
            </li>


            @endforeach()

            {{ $filmes->links() }}
        </ul>
    </div>

</body>

</html>
