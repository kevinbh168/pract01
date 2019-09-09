@extends('layouts.app')
@section('title','Crear producto')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="{{ route('producto.update',$producto->id) }}" method="PUT">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$producto->nombre}}" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$producto->precio}}" name="precio">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$producto->categoria}}" name="categoria">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Stock</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$producto->stock}}" name="stock">
  </div>
  <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
  <a href="{{ route('producto.index') }}" class="btn btn-info btn-block" >Atrás</a>
</form>
</div>
<div class="col-md-3"></div>
@endsection