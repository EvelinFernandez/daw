<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color:aquamarine
        }
    </style>
</head>
<body>
    <h1>Hola este es mi primer PDF</h1>
    <h2>{{ $fecha }}</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categorias</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $p)
                <tr>
                    <td>{{$p->id }}</td>
                    <td>{{$p->name }}</td>
                    <td>{{$p->category}}</td>
                    <td>{{$p->base_price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>