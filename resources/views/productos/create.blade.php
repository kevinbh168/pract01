@extends('layouts.app')
@section('title','Crear producto')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="{{ route('producto.store') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Insertar nombre del producto" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insertar precio" name="precio">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingresar categoria" name="categoria">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Stock</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Numero en stock" name="stock">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
<div class="col-md-3"></div>
@endsection