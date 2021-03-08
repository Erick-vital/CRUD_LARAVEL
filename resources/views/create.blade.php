<h2>Agregar empleados</h2>

<form action="{{ url('/empleados/') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <br>
    <input type="text" name="puesto" placeholder="Puesto">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <br>
    <input type="submit">
</form>