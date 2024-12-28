@extends("../layouts.plantilla")

	@section("cabecera")


	  @endsection
	@section("contenido")
  <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->NombreArticulo}} </a><small>haga clic sobre el nombre del producto si desea editarlo</small></h1>
      </div>
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
            <a class="btn btn-success" href="#"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PROCDUCTOS</a>
          </li>
          <li>
            <a href="/productos/product" class="btn btn-primary">
              <i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTO
            </a>
          </li>
      </ul>
    </div>
		<div class="card" style="width: 60rem; margin:25px  auto;">
		<table class="table">
  <thead>
    <tr>
      <th class="table-primary" scope="col">#</th>
      <th class="table-primary" scope="col">Producto</th>
      <th class="table-primary" scope="col">Seccion</th>
      <th class="table-primary" scope="col">Precio</th>
      <th class="table-primary" scope="col">Fecha</th>
      <th class="table-primary" scope="col">País origen</th>
    </tr>
  </thead>
  <tbody>
   
    <tr class="table-secondary">
      <th  scope="row">1</th>
      <td > <a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->NombreArticulo}} </a></td>
      <td  > <a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->Marca}} </a></td>
      <td  > <a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->Precio}} </a></td>
      <td ><a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->Descripcion}}</a></td>
      <td ><a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->Stock_cantidad}}</a></td>
      <td ><a href="{{route('productos.edit',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->creatd_at}}</a></td>
    
   
   </tr>
  </tbody>
</table>
 
</div>
		</div>
	  @endsection
		

	@section("pie")
	@endsection
	

	