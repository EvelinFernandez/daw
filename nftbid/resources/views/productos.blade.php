<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Estas en Productos</h1>
    <h1>{{ $usuario }}</h1>
    <h3>{{ $colorsote }}</h3>
    @@for ($i = 0; $i < $numero; $i++)
        <button>Boton {{ $i }}</button>
    @endfor
    @@if ($numero< 25)
        <input type="text" />
    @else
        <textarea></textarea>
    @endif
    <img src="{{ asset('img/fondo.png') }} />
</body>
</html>