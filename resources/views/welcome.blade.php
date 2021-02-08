<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Proyecto</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <style>
        body{margin: 1%;}
    </style>
    <script>
        $(document).ready( function () {
            $('#users_table').DataTable();
        } );
    </script>
</head>
<body>

    <form method="POST" action="{{route('Usuarios.show')}}">
        @csrf
        <h3>Usuarios</h3>
        <select name="selectUsuarios">
            @foreach ($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->nombre}} {{$usuario->apellidos}}</option>
            @endforeach
        </select><hr>
        <input type="submit" class="btn btn-success" value="Ver detalle">
    </form>

    <hr>
    <hr>
    <table id="users_table" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Pais</th>
                <th>Provincia</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>Foto</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellidos}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->pais}}</td>
                <td>{{$usuario->provincia}}</td>
                <td>{{$usuario->ciudad}}</td>

                @if($usuario->activo == 1)
                    <td> Activo</td>
                @else
                    <td>Deshabilitado</td>
                @endif

                <td>{{$usuario->fotoPerfil}}</td>


            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
