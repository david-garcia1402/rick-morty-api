<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rick e Morty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="p-5 pt-3" style="background-color: #b2daed">
    <div class="container">
        <nav class="navbar navbar-expand-lg rounded" style="background-color: #97ce4c; border-radious">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h3 style="color:white">Bem vindo ao site de personagens do Rick e Morty</h3></a>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Pesquise um personagem..." aria-label="Search">
                    <button class="btn btn-success" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
            <div class="row gx-4 gy-4 justify-content-center">
            @php
                $personagens = is_array($data['results']) ? $data['results'] : [$data['results']];
            @endphp
            
            @foreach ($personagens as $infoPersonagem)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card h-100 rounded border-dark" style="max-width: 300px; margin-top: 1.5rem">
                        <img src="{{ $infoPersonagem['image'] }}" class="card-img-top" alt="{{ $infoPersonagem['name'] }}">
                        <div class="card-body" id="{{ $infoPersonagem['id'] }}">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Nome: </strong>{{ $infoPersonagem['name'] }}</li>
                                <li class="list-group-item"><strong>Status: </strong>{{ $infoPersonagem['status'] }}</li>
                                <li class="list-group-item"><strong>Espécie: </strong>{{ $infoPersonagem['species'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>        
    </div>
</body>
</html>
