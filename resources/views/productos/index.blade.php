@extends("../layouts.plantilla")

	@section("cabecera")


	  @endsection
	@section("contenido")
    <div class="container-fluid" >
            <div class="page-header">
              <h1 class="text-titles">LISTAS DE PRODUCTOS <small>DISPONIBLES</small></h1>
            </div>
        </div>
        <!--############### Sumenú Productos ###################-->
        <div class="container-fluid">
      <ul class="breadcrumb breadcrumb-tabs">
          <li>
            <a href="productos/create" class="btn btn-info">
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
        
		<div  class="card" style="width: 60rem; margin:25px  auto; padding-left: 20px;" >
<!--###################  Plantilla de Tabla #######################-->
            <div class="panel panel-success">
            <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE ARTÍCULOS</h3>
                </div>
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
       <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->Marca}}</a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->Precio}} </a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;"> {{$producto->Descripcion}} </a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->Stock_cantidad}} </a></td>
      <td ><a href="{{route('productos.show',$producto->id)}}" style="color: black; text-decoration: none;">{{$producto->created_at}}</a></td>
    
   @endforeach
   </tr>
  </tbody>
</table>
 <!-- Paginación -->
    <nav aria-label="Pagination">
        <ul class="pagination justify-content-center">
            @if ($productos->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $productos->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            @for ($i = 1; $i <= $productos->lastPage(); $i++)
                <li class="page-item @if ($i == $productos->currentPage()) active @endif">
                    <a class="page-link" href="{{ $productos->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if (!$productos->onLastPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $productos->nextPageUrl() }}" rel="next">Siguiente</a>
                </li>
            @endif
        </ul>
    </nav>
</div>
</div>
		</div>

	  @endsection
		

	@section("pie")
	@endsection
	

	