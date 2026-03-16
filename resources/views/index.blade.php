<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container-table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Stazione Partenza</th>
                    <th scope="col">Stazione Arrivo</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">Data Partenza</th>
                    <th scope="col">Data Arrivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <th scope="row">{{$train['azienda']}}</th>
                    <td>{{$train['codice_treno']}}</td>
                    <td>{{$train['stazione_partenza']}}</td>
                    <td>{{$train['stazione_arrivo']}}</td>
                    <td>{{$train['orario_partenza']}}</td>
                    <td>{{$train['orario_arrivo']}}</td>
                    <td>{{$train['data_partenza']}}</td>
                    <td>{{$train['data_arrivo']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>