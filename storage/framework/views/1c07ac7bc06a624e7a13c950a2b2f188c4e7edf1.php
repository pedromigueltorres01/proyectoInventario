

	<?php $__env->startSection("cabecera"); ?>


	 <?php $__env->stopSection(); ?>
	 <?php $__env->startSection("contenido"); ?>
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
  	<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-secondary">
      <th  scope="row"> <a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($contador++); ?></a></th>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->NombreArticulo); ?></a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->Marca); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->Precio); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->Descripcion); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->Stock_cantidad); ?></a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->created_at); ?></a></td>
   
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<?php $__env->stopSection(); ?>
		

	<?php $__env->startSection("pie"); ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views/productos/proporlote.blade.php ENDPATH**/ ?>