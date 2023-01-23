@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

<h1>Contenido de la página de inicio</h1>

    <form action="">
        <label for="id">Id</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="timestamps">timestamps</label>
        <input type="" name="timestamps" id="timestamps">
        <br>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="contenido">Contenido</label>
        <input type="text" name="contenido" id="contenido">
        <br>
        <label for="caducable">Caducable</label>
        <input type="checkbox" name="caducable" id="caducable">
        <br>
        <label for="comentable">Comentable</label>
        <input type="checkbox" name="comentable" id="comentable">
        <br>
        <select name="acceso" id="acceso">
            <option value="publico">Público</option>
            <option value="privado">Privado</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>

@endsection