

<style>
    /* Opcional: para ocultar el panel inicialmente */
    #elemt2 {
        display: none;
    }
</style>

<?php $__env->startSection("cabecera"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("contenido"); ?>
<div class="container-fluid">
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
            <a class="btn btn-success" href="/productos"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PRODUCTOS</a>
        </li>
        <li>
            <a href="/productos/buscar" class="btn btn-primary">
                <i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTO
            </a>
        </li>
    </ul>
    
    <div class="card-body">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <i class="fas fa-exclamation-triangle"></i>
                <?php if($error === "Ya existe un producto con ese nombre, desea añadir al Stand?"): ?>
                    <form id="formStand" class="row g-3" method="" action="" style="width: 40rem; margin:20px auto;" onsubmit="event.preventDefault(); onFormSubmit();">
                        <div class="alert alert-danger" role="alert" style="--bs-alert-padding-x: 1; --bs-alert-padding-y: 1;">
                            <?php echo e($error); ?>

                            <button type="button" onclick="ver(); mostrarPanel();" class="btn btn-info btn-raised btn-sm">Añadir a Stand</button>
                        </div>
                    </form>
                <?php else: ?>
                    <div class="alert alert-danger" role="alert" style="--bs-alert-padding-x: 1; --bs-alert-padding-y: 1;">
                        <strong><?php echo e($error); ?></strong>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
        <div id="elemt1">
            <div class="panel panel-info">
                <div class="panel-heading" id="formExistProd">
                    <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO PRODUCTO</h3>
                </div>
                <div class="panel-body">
                    <form id="form1" class="row g-3" method="post" action="/productos" style="width: 40rem; margin:20px auto;">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-6">
                            <label for="NombreArticulo" class="form-label">Nombre de artículo</label>
                            <input type="text" class="form-control" name="NombreArticulo" placeholder="">
                        </div>
                        <div class="col-md-5">
                            <label for="Marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="Marca" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="Cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="Stock_cantidad" placeholder="">
                        </div>
                        <div class="col-md-5">
                            <label for="Precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="Precio" placeholder="">
                        </div>
                        <div class="col-md-5">
                            <label for="Descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="Descripcion" placeholder="">
                        </div>
                        <p class="text-center" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Agregar Productos</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div id="elemt2">
    <div class="panel panel-info">
                <div class="panel-heading" id="formExistProd">
                    <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; ACTUALIZAR STAND</h3>
                </div>
                <div class="panel-body">
            <form id="form2" class="row g-3" method="post" action="/productos" style="width: 40rem; margin:20px auto;">
                <?php echo e(csrf_field()); ?>

                
                
                <div class="col-md-4">
                    <label for="Cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="Stock_cantidad" placeholder="">
                </div>
                <div class="col-md-5">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="Precio" placeholder="">
                </div>
                <div class="col-md-5">
                    <label for="Descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="Descripcion" placeholder="">
                </div>
                <p class="text-center" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Añadir a Stand</button>
                </p>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<script type="text/javascript">
    window.onload = function() {
        document.getElementById('elemt2').style.display = 'none'; // Ocultar form2 al cargar
    };

    function ver() {
        document.getElementById('elemt1').style.display = 'none'; // Ocultar form1
         document.getElementById('formStand').style.display = 'none';
        
    }

    function mostrarPanel() {
        document.getElementById('elemt2').style.display = 'block'; // Mostrar form2
    }
</script>

<?php $__env->startSection("pie"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views/productos/create.blade.php ENDPATH**/ ?>