<form action="{{ url('/empleados/'.$empleado->id) }}" method="PUT">
    @csrf
    {{ method_field('PUT') }}
    <input type="text" name="nombre" placeholder="Nombre" value="{{ $empleado->nombre }}">
    <br>
    <input type="text" name="puesto" placeholder="Puesto" value="{{ $empleado->puesto }}">
    <br>
    <input type="text" name="email" placeholder="Email" value="{{ $empleado->email }}">
    <br>
    <br>
    <input type="submit">
</form>