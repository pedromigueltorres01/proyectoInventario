

	<?php $__env->startSection("cabecera"); ?>


	  <?php $__env->stopSection(); ?>
	<?php $__env->startSection("contenido"); ?>
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
                    <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE USUARIOS</h3>
                </div>
			<table class="table" >
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
  	<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-secondary">
      <th  scope="row"> <a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($contador++); ?></a></th>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->NombreArticulo); ?></a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->Seccion); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"> <?php echo e($producto->Precio); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->Fecha); ?> </a></td>
      <td ><a href="<?php echo e(route('productos.show',$producto->id)); ?>" style="color: black; text-decoration: none;"><?php echo e($producto->PaisOrigen); ?></a></td>
    
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tr>
  </tbody>
</table>
 <!-- Paginación -->
    <nav aria-label="Pagination">
        <ul class="pagination justify-content-center">
            <?php if($productos->onFirstPage()): ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($productos->previousPageUrl()); ?>" rel="prev">Anterior</a>
                </li>
            <?php endif; ?>

            <?php for($i = 1; $i <= $productos->lastPage(); $i++): ?>
                <li class="page-item <?php if($i == $productos->currentPage()): ?> active <?php endif; ?>">
                    <a class="page-link" href="<?php echo e($productos->url($i)); ?>"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>

            <?php if(!$productos->onLastPage()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($productos->nextPageUrl()); ?>" rel="next">Siguiente</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
</div>
		</div>

	  <?php $__env->stopSection(); ?>
		

	<?php $__env->startSection("pie"); ?>
	<?php $__env->stopSection(); ?>
	

	
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views//productos/index.blade.php ENDPATH**/ ?>