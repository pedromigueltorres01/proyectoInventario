

	<?php $__env->startSection("cabecera"); ?>


	  <?php $__env->stopSection(); ?>
	<?php $__env->startSection("contenido"); ?>
		<div class="card" style="width: 60rem; margin:25px  auto;">
      <div class="container-fluid" >
            <div class="page-header">
              <h1 class="text-titles">ACTUALIZAR DATOS <small> <?php echo e($producto->NombreArticulo); ?></small></h1>
            </div>
        </div>
      <!--######### ver linea de codigo número 40 #############-->
    <form class="row g-3" method="post" action="/productos/<?php echo e($producto->id); ?>" style="width: 40rem; margin:20px  auto;" >
     <div class="col-md-6">
       <label for="NombreArticulo" class="form-label">Nombre del articulo</label>
       <input type="text" class="form-control" value="<?php echo e($producto->NombreArticulo); ?>" name="NombreArticulo" id="">
       <?php echo e(csrf_field()); ?>

     </div>
     <div class="col-md-4">
    <label for="Seccion" class="form-label">Sección</label>
    <select id="" name="Seccion" class="form-select">
      <option selected><?php echo e($producto->Seccion); ?></option>
      <option value="Moda">Moda</option>
      <option value="Ferretería">Ferretería</option>
      <option value="Tecnología">Tecnología</option>
    </select>
  </div>
  <div class="col-12">
    <label for="Precio" class="form-label">Precio</label>
    <input type="number" value="<?php echo e($producto->Precio); ?>"  class="form-control" name="Precio" id="" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="Fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="Fecha" name="Fecha" value="<?php echo e($producto->Fecha); ?>" min="2018-01-01" max="2070-12-31">
  </div>
  <div class="col-12">
    <label for="PaisOrigen" class="form-label">País de origen</label>
    <input type="text" value="<?php echo e($producto->PaisOrigen); ?>" class="form-control" id="" name="PaisOrigen" placeholder="Apartment, studio, or floor">
  </div>
  <!--######### Importante para usar el metodo Editar esta linea #############-->
    <input type="hidden" name="_method" value="PUT">
      <table style="">
        <tr>
     <td> <div class="col-12">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      
    </form>
    </td>
    <td>
    <form method="POST" action="/productos/<?php echo e($producto->id); ?>">
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Eliminar</button>
         <?php echo e(csrf_field()); ?>

         <input type="hidden" name="_method" value="DELETE">
      </div>
      </td>
      </tr>
      </table>
    </div>
	  <?php $__env->stopSection(); ?>
		

	<?php $__env->startSection("pie"); ?>
	<?php $__env->stopSection(); ?>
	

	
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views//productos/edit.blade.php ENDPATH**/ ?>