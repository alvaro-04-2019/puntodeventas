@extends('layouts.layout')
@section('content')
<div class="row">
 <section class="content">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Nuevo Producto</h3>
    </div>
    <div class="panel-body">     
     <div class="table-container">
      <form method="POST" action="{{-- route('product.store') --}}" >
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="nombre_producto" id="nombre_producto" class="form-control input-sm" placeholder="Nombre del producto">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="precio_producto" id="precio_producto" class="form-control input-sm" placeholder="Precio producto">
         </div>
        </div>
       </div>
 
       <div class="form-group">
        <textarea name="descripcion" class="form-control input-sm" placeholder="descripcion"></textarea>
       </div>
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="status" id="status" class="form-control input-sm" placeholder="status">
         </div>
        </div>

       </div>
       <div class="row">
 
        <div class="col-xs-12 col-sm-12 col-md-12">
         <input type="submit"  value="Guardar" class="btn btn-success btn-block">
         <a href="{{ route('product.index') }}" class="btn btn-info btn-block" >Atrás</a>
        </div> 
 
       </div>
      </form>
     </div>
    </div>
 
   </div>
  </div>
 </section>
 @endsection