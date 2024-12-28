@extends("../layouts.plantilla")

	@section("cabecera")


	 @endsection
	 @section("contenido")
		<div class="card" style="width: 60rem; margin:25px  auto;">
      <div class="container-fluid" >
            <div class="page-header">
              <h1 class="text-titles">LISTA DE <small> PRODUCTOS</small></h1>
            </div>
            <!--############### Sumenú Productos ###################-->
        <div class="container-fluid">
      <ul class="breadcrumb breadcrumb-tabs">
          <li>
            <a href="/productos/create" class="btn btn-info">
              <i class="zmdi zmdi-plus"></i> &nbsp; REGISTRAR NUEVO ARTICULO
            </a>
          </li>
          <li>
            <a class="btn btn-success" href="/productos/"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PROCDUCTOS</a>
          </li>
          <li>
            <a href="/productos/product" class="btn btn-primary">
              <i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTO
            </a>
          </li>
      </ul>
    </div>
        </div>
       
        
		<!--########### productos #########-->
	<table class="table" >
  <thead>
    <tr>
      <th class="table-primary" scope="col">#</th>
      <th class="table-primary" scope="col">Producto</th>
      <th class="table-primary" scope="col">Marca</th>
      <th class="table-primary" scope="col">Precio</th>
      <th class="table-primary" scope="col">Descripción</th>
      <th class="table-primary" scope="col">Stand</th>
      <th class="table-primary" scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($productos as $producto)
    <tr class="table-secondary">
      <th  scope="row"> <a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;">{{ $contador++ }}</a></th>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->NombreArticulo}}</a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->Marca}} </a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->Precio}} </a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->Descripcion}} </a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->Stock_cantidad}}</a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->created_at}}</a></td>
   
   @endforeach
	</div>
	@endsection
		

	@section("pie")
	@endsection