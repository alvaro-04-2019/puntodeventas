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
               <th>Descripción</th>
               <th>Status</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
        
              @forelse($products as $product)  
              <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->status }}</td>
                  <td><a href="" class="btn btn-success" >Editar Producto</a></td>
                  <td><a href="" class="btn btn-warning" >Eliminar Producto</a></td>
               </tr>
              @empty
               <tr>
                <td colspan="8">JupaEcomac</td>
              </tr>
              @endforelse 
            
              

            </tbody>
 
          </table>
        </div>
        {{ $products->render() }}
      </div>
    </div>
  </div>
</section>
 
@endsection