

    <?php $__env->startSection("cabecera"); ?>
      <?php $__env->stopSection(); ?>
    
    <?php $__env->startSection("contenido"); ?>
    <div class="container-fluid" >
            <div class="page-header">
              <h1 class="text-titles">INGRESE LOS DATOS DEL <small>PRODUCTOS</small></h1>
            </div>
        </div>
<!--############### Sumenú Productos ###################-->
        <div class="container-fluid">
      <ul class="breadcrumb breadcrumb-tabs">
          <li>
            <a href="#" class="btn btn-info">
              <i class="zmdi zmdi-plus"></i> &nbsp; REGISTRAR NUEVO ARTICULO
            </a>
          </li>
          <li>
            <a class="btn btn-success" href="/productos"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PROCDUCTOS</a>
          </li>
          <li>
            <a href="/productos/buscar" class="btn btn-primary">
              <i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTO
            </a>
          </li>
      </ul>
    </div>
      <div class="card" style="width: 60rem; margin:25px  auto; padding-left: 20px;">
    <form class="row g-3" method="post" action="/productos" style="width: 40rem; margin:20px  auto;" >
     <div class="col-md-6">
       <label for="NombreArticulo" class="form-label">Nombre del articulo</label>
       <input type="text" class="form-control" name="NombreArticulo" id="" placeholder=""> 
       <?php echo e(csrf_field()); ?>

     </div>
     <div class="col-md-4">
    <label for="Seccion" class="form-label">Sección</label>
    <select id="" name="Seccion" class="form-select">
      <option selected>Sección...</option>
      <option value="Moda">Moda</option>
      <option value="Ferretería">Ferretería</option>
      <option value="Tecnología">Tecnología</option>
    </select>
  </div>
  
  <div class="col-md-5">
    <label for="Precio" class="form-label">Precio</label>
    <input type="number" class="form-control" name="Precio" id="" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="Fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="Fecha" name="Fecha" value="2018-07-22" min="2018-01-01" max="2070-12-31">
  </div>
  <div class="col-md-5">
    <label for="PaisOrigen" class="form-label">País de origen</label>
    <input type="text" class="form-control" id="" name="PaisOrigen" placeholder="">
  </div>
  
  
      
      <div class="col-12">
        <button type="submit"  class="btn btn-info btn-raised btn-sm">Registrar</button>
      </div>
    </form>
    </div>
     <?php $__env->stopSection(); ?>
        

    <?php $__env->startSection("pie"); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views//productos/create.blade.php ENDPATH**/ ?>