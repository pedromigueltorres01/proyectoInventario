<!--  <img src="/images/logoJEMS.JPEG" class="imagenCabecera" />-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="/images/logoJEMS.JPEG" class="imagenCabecera" />
    <!--<a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(asset('/productos/')); ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(asset('/productos/create')); ?>">Registrar</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="<?php echo e(asset('/productos/read')); ?>">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(asset('/productos/update')); ?>">Modificar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(asset('/productos/delete')); ?>">Eliminar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Privilegios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

  </div>
  <div class="contenido"><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views/layouts/barraDeNavegacion.blade.php ENDPATH**/ ?>