

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
            <a href="/productos/create" class="btn btn-info">
              <i class="zmdi zmdi-plus"></i> &nbsp; REGISTRAR NUEVO ARTICULO
            </a>
          </li>
          <li>
            <a class="btn btn-success" href="/productos"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PROCDUCTOS</a>
          </li>
          <li>
            <a href="#" class="btn btn-primary">
              <i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTO
            </a>
          </li>
      </ul>
    </div>
    <div class="container-fluid">
      <form class="well" action="<?php echo e(route('buscarpro')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="form-group label-floating">
              <span class="control-label">Ingresa la código del Producto</span>
              <input class="form-control" id="id_usuario" type="text" name="buscarpro" required="">
              

            </div>
          </div>
          <div class="col-xs-12">
            <p class="text-center">
              <button type="submit" id="id_usuario" value="buscar" name="busca_especifica" onclick="buscar_usuario();" class="btn btn-primary btn-raised btn-sm"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
            </a>
            </p>
          </div>
        </div>
      </form>
    </div>
    
     <?php $__env->stopSection(); ?>
        

    <?php $__env->startSection("pie"); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views//productos/buscar.blade.php ENDPATH**/ ?>