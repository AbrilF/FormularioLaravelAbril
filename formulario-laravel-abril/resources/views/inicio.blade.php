@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

<h1>Contenido de la página de inicio</h1>

    <form action="">
        <label for="id">Id</label>
        <input type="text" name="id" id="id" value= "{{old('id')}}" >
        <br>
        <label for="timestamps">timestamps</label>
        <input type="" name="timestamps" id="timestamps">
        <br>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value= "{{old('title')}}">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value= "{{old('description')}}">
        <br>
        <label for="contenido">Contenido</label>
        <input type="text" name="contenido" id="contenido" value= "{{old('contenido')}}">
        <br>
        <label for="caducable">Caducable</label>
        <input type="checkbox" name="caducable" id="caducable" value= 'caducable'@checked(old('caducable',$post->caducable)) >
        <br>
        <label for="comentable">Comentable</label>
        <input type="checkbox" name="comentable" id="comentable" value= 'comentable'@checked(old('comentable',$post->comentable))>
        <br>
        <select name="acceso" id="acceso">
            <option value="publico">Público</option>
            <option value="privado">Privado</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>


@endsection