

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
      <div class="container-fluid">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO</h3>
        </div>
        <div class="panel-body">
    <form class="row g-3" method="post" action="/productos" style="width: 40rem; margin:20px  auto;" >
     <!-- <?php echo Form::open(['url' => '/productos','method' => 'post']); ?>-->
     <div class="col-md-6" class="form-label">
       <label for="NombreArticulo" class="form-label">Nombre de artículo</label>
      <input type="text" class="form-control" name="NombreArticulo" id="" placeholder=""> 
       <?php echo e(csrf_field()); ?>

     </div>
     <div class="col-md-5">
   <label for="Marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="" name="Marca" placeholder="">
  </div>
     <div class="col-md-4">
    <label for="Cantidad" class="form-label">Cantidad</label>
    <input type="number" class="form-control" name="Stock_cantidad" id="" placeholder=""> 
  </div>
  
  <div class="col-md-5">
   <label for="Precio" class="form-label">Precio</label>
    <input type="number" class="form-control" name="Precio" id="" placeholder="">
  </div>
  
  <div class="col-md-5">
   <label for="Descripcion" class="form-label">Descripción</label>
    <input type="text" class="form-control" id="" name="Descripcion" placeholder="">
  </div>
  
  
      
      </fieldset>
              <p class="text-center" style="margin-top: 20px;">
                <button type="submit"  class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar Datos</button>
              </p>
              
            </form>
            
        </div>
      </div>
    </div>
    
  </section>
    
     <?php $__env->stopSection(); ?>
        

    <?php $__env->startSection("pie"); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views/productos/create.blade.php ENDPATH**/ ?>