@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de productos</h3></div>
          <div class="pull-right">
          <div class="btn-group">
              <a href="{{ route('product.create') }}" class="btn btn-info" >Añadir Producto</a>
            </div>
            <div class="btn-group">
            </div>
          </div>
          <div class="table-container">
            <table id="" class="table table-bordred table-striped">
             <thead>
             <th>Id</th>
               <th>Nombre</th>
               <th>Precio</th>
               <th>Des</th>
               <th>Status</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              {{-- @if($products->count())  
              @foreach($products as $producto)   --}}
              <tr>
              <td>{{--$producto->id--}}</td>
                <td>{{--$product->nombre--}}</td>
                <td>{{--$product->precio--}}</td>
                <td>{{--$product->descripcion--}}</td>
                <td>{{--$product->status--}}</td>
                <td><a href="" class="btn btn-info" >Editar Producto</a></td>
                <td><a href="" class="btn btn-warning" >Eliminar Producto</a></td>
               </tr>
               {{-- @endforeach 
               @else --}}
               <tr>
                <td colspan="8">JupaEcomac</td>
              </tr>
              {{-- @endif --}}
            </tbody>
 
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
 
@endsection