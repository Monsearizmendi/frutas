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
        <h1>Frutas</h1>
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
                    <td><a href="{{route('genus.frutas',$fruta['genus'])}}">{{$fruta['genus']}}</a></td>
                    <td>{{$fruta['name']}}</td>
                    <td>{{$fruta['id']}}</td>
                    <td><a href="{{route('familia.frutas',$fruta['family'])}}">{{$fruta['family']}}</a></td>
                    <td><a href="{{route('order.frutas',$fruta['order'])}}">{{$fruta['order']}}</a></td>

                </tr>
            @endforeach
           
    </center>
</body>
</html>