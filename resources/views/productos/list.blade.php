@extends('layouts.app')
@section('title','Lista de productos');
@section('content')
<div class="row">
@foreach($productos as $producto)
<div class="col-md-2">
<div class="panel panel-default" style="width: 18rem;">
  <div class="panel-body">
    <h5 class="card-title">{{$producto->nombre}}</h5>
    <h6 class="card-subtitle mb-2 text-muted"> {{$producto->categoria}}</h6>
  </div>
  <div class="panel-footer">Precio S/.{{$producto->precio}}</div>
  <div class="panel-footer">
  	<div class="row">
  	
  	<a class="btn btn-primary" href="{{action('ProductoController@edit', $producto->id)}}">Editar</a>
  	<form action="{{action('ProductoController@destroy', $producto->id)}}" method="delete">
                   {{csrf_field()}}
    <button class="btn btn-danger" type="submit" >Eliminar</button>
	</form>
    </div>
  </div>
 
</div>
</div>
@endforeach
</div>
@endsection