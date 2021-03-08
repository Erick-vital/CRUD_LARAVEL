<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 

    <title>Document</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-inverse"> 
        <div class="nav-header">
            <h3>Empleados</h3>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="">empleados</a></li>
            <li><a href="{{ url('empleados/create/') }}">agregar</a></li>
        </ul>
    </nav>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Puesto</td>
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->puesto }}</td>
            <td>{{ $empleado->email }}</td>
            <td> <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}"> Editar</a>
                |
                <form action="{{ url('/empleados/'.$empleado->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Quieres borrar ?')" value="Borrar">
                </form>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>
</body>
</html>