<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rente</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <a href="/" class="btn btn-warning">Vidi Kuce</a>
    <div class="container">
        <table class="table table-warning table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Adresa</th>
                    <th>Grad</th>
                    <th>Drzava</th>
                    <th>Kirija po danu</th>
                    <th>Iznajmljeno u periodu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rente as $renta)
                <tr>
                    <td>{{$renta->kuca->adresa}}</td>
                    <td>{{$renta->kuca->grad}}</td>
                    <td>{{$renta->kuca->drzava}}</td>
                    <td>{{$renta->kuca->kirija}}</td>
                    <td>{{ 'od '. $renta->date_od ." do " . $renta->date_do}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>