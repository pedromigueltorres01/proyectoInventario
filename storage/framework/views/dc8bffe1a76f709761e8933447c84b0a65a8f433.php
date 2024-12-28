<!DOCTYPE html>
<html>
<head>
	

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="icon" type="text/css" href="../assets/img/logoSantidad.jpg">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/material-design-iconic-font.min.css')); ?>">
	<script src="<?php echo e(asset('js/jquery-3.2.1.js')); ?>"></script>

</head>
<body>
	<div class="cabecera">
		<?php echo $__env->make("layouts.menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent("cabecera"); ?>
	
		<?php echo $__env->yieldContent("contenido"); ?>

	</div>
	<div class="pie">
		<?php echo $__env->yieldContent("pie"); ?>
		
	</div>
<!--====== Scripts -->
	<script src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/sweetalert2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/material.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/ripples.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	<script>
		$.material.init();
	</script>
</body>
</html><?php /**PATH /home/vagrant/code/Laravel_crud/resources/views////layouts/plantilla.blade.php ENDPATH**/ ?>