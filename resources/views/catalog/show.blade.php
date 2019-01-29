<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-sm-4">
            <img src="{{$arrayPeliculas->poster}}" style="height:200px"/>
    </div>
	<div class="col-sm-8">
        <h3 style="min-height:45px;margin:5px 0 10px 0">
            {{$arrayPeliculas->title}}
        </h3>
        <h5>
            Año: {{$arrayPeliculas->year}}
        </h5>
        <h5>
        	Director: {{$arrayPeliculas->director}}
        </h5>
        </br>
        <h6>
        	<strong>Resumen:</strong> {{$arrayPeliculas->synopsis}} 
        </h6>
        </br>

        	<strong>Estado:</strong> 
        	@if ($arrayPeliculas->rented == false)
        	    	Pelicula disponible
        	    </br>
        			<a type="button" class="btn btn-primary">Alquilar</a>
        			<a type="button" class="btn btn-warning" href="{{url('/catalog/edit/' . $arrayPeliculas->id)}}">Editar pelicula</a>
        			<a type="button" class="btn btn-default" href="{{url('/catalog/')}}">Volver al listado</a>
        	@else
        			Pelicula actualmente alquilada
        		</br>
        			<a type="button" class="btn btn-danger">Devolver pelicula</a>
        			<a type="button" class="btn btn-warning" href="{{url('/catalog/edit/' . $arrayPeliculas->id)}}">Editar pelicula</a>
        			<a type="button" class="btn btn-default" href="{{url('/catalog/')}}">Volver al listado</a>
        	@endif

  	</div>
</div>
@stop
</body>
</html>