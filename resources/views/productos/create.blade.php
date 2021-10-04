@extends("layout.plantilla")




<form  method="post" action="{{ route('producto.store') }}">
    
    @csrf

    <label>Nombre</label>
    <input type="text" name="nombre_articulo">
    <label>seccion</label>
    <input type="text" name="seccion">
    <label>precio</label>
    <input type="number" name="precio">
    <label>fecha</label>
    <input type="text" name="fecha">
    <label>pais origen</label>
    <input type="text" name="pais_origen">
    
    
    <input type="submit" name="enviar"  value="Enviar">
    <input type="reset" name="borrar"  value="borrar">

</form>

