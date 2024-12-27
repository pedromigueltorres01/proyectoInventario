

	<?php $__env->startSection("cabecera"); ?>


	  <?php $__env->stopSection(); ?>
	<?php $__env->startSection("contenido"); ?>
  <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><a href="<?php echo e(route('productos.edit',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->NombreArticulo); ?> </a><small>haga clic sobre el nombre del producto si desea editarlo</small></h1>
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
      <td > <a href="<?php echo e(route('productos.edit',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->NombreArticulo); ?> </a></td>
      <td  > <a href="<?php echo e(route('productos.edit',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->Seccion); ?> </a></td>
      <td  > <a href="<?php echo e(route('productos.edit',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->Precio); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.edit',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->Fecha); ?></a></td>
      <td ><a href="<?php echo e(route('productos.edit',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->PaisOrigen); ?></a></td>
    
   
   </tr>
  </tbody>
</table>
 
</div>
		</div>
	  <?php $__env->stopSection(); ?>
		

	<?php $__env->startSection("pie"); ?>
	<?php $__env->stopSection(); ?>
	

	
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views//productos/show.blade.php ENDPATH**/ ?>