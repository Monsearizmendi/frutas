<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frutas</title>
</head>
<body>
    <center>
        <h1>Frutas Familias</h1>
        <table>
            <tr>
                <th>genus</th>
                <th>name</th>
                <th>id</th>
                <th>family</th>
                <th>order</th>
            </tr>
            @foreach ($frutas as $fruta)
                <tr>
                    <td>{{$fruta['genus']}}</td>
                    <td>{{$fruta['name']}}</td>
                    <td>{{$fruta['id']}}</td>
                    <td>{{$fruta['family']}}</td>
                    <td>{{$fruta['order']}}</td>
                </tr>
            @endforeach
           
    </center>
</body>
</html>