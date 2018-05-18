<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Altura</th>
                <th scope="col">Peso</th>
                <th scope="col">Cor do Cabelo</th>
                <th scope="col">Cor da Pele</th>
                <th scope="col">Cor dos Olhos</th>
                <th scope="col">Sexo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $value)
                <tr>
                <td>{{$value['nome']}}</td>
                <td>{{$value['altura']}}</td>
                <td>{{$value['peso']}}</td>
                <td>{{$value['cor_cabelo']}}</td>
                <td>{{$value['cor_pele']}}</td>
                <td>{{$value['cor_olhos']}}</td>
                <td>{{$value['sexo']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
