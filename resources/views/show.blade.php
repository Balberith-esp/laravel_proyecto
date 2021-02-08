<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>
<body>
    <script>
        $(document).ready( function () {
            $('#users_table').DataTable();
            $('#ejercicios_table').DataTable();
            $('#nutricion_table').DataTable();
        } );
    </script>


            <h2>Detalle {{$usuario->get(0)->nombre}} {{$usuario->get(0)->apellidos}}</h2>
            <br>
        <div style="margin: 1%">
            <h4>Usuario</h4><hr>
            <table id="users_table" class="display" >
                <thead>
                    <tr>
                        <th>Id</th>
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

                    <tr>
                        <td>{{$usuario->get(0)->id}}</td>
                        <td>{{$usuario->get(0)->nombre}}</td>
                        <td>{{$usuario->get(0)->apellidos}}</td>
                        <td>{{$usuario->get(0)->email}}</td>
                        <td>{{$usuario->get(0)->pais}}</td>
                        <td>{{$usuario->get(0)->provincia}}</td>
                        <td>{{$usuario->get(0)->ciudad}}</td>

                        @if($usuario->get(0)->activo == 1)
                            <td> Activo</td>
                        @else
                            <td>Deshabilitado</td>
                        @endif

                        <td>{{$usuario->get(0)->fotoPerfil}}</td>


                    </tr>


                </tbody>
            </table>
<br>
<h4>Ejercicios</h4><hr>
            <table id="ejercicios_table" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Zona</th>
                        <th>Descripcion</th>
                        <th>Recurso</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuario->get(0)->ejercicios as $ejercicio)
                        <tr>
                            <td>{{$ejercicio->id}}</td>
                            <td>{{$ejercicio->nombre}}</td>
                            <td>{{$ejercicio->zona}}</td>
                            <td>{{$ejercicio->descripcion}}</td>
                            <td>
                                @foreach ($dataEjercicio as $item)
                                    @if ($item->parent_id == $ejercicio->id)
                                        {{$item->path}}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <br>
            <h4>Nutricin</h4><hr>
            <table id="nutricion_table" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo</th>
                        <th>Clasificacion</th>
                        <th>Recurso</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuario->get(0)->nutriciones as $nutricion)
                        <tr>
                            <td>{{$nutricion->id}}</td>
                            <td>{{$nutricion->tipo}}</td>
                            <td>{{$nutricion->clasificacion}}</td>
                            <td>
                                @foreach ($dataNutricion as $item)
                                    @if ($item->parent_id == $nutricion->id)
                                        {{$item->path}}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
</body>
</html>
