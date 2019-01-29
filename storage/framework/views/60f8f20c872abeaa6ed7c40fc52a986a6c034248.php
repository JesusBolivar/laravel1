<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-sm-4">
            <img src="<?php echo e($arrayPeliculas->poster); ?>" style="height:200px"/>
    </div>
	<div class="col-sm-8">
        <h3 style="min-height:45px;margin:5px 0 10px 0">
            <?php echo e($arrayPeliculas->title); ?>

        </h3>
        <h5>
            Año: <?php echo e($arrayPeliculas->year); ?>

        </h5>
        <h5>
        	Director: <?php echo e($arrayPeliculas->director); ?>

        </h5>
        </br>
        <h6>
        	<strong>Resumen:</strong> <?php echo e($arrayPeliculas->synopsis); ?> 
        </h6>
        </br>

        	<strong>Estado:</strong> 
        	<?php if($arrayPeliculas->rented == false): ?>
        	    	Pelicula disponible
        	    </br>
        			<a type="button" class="btn btn-primary">Alquilar</a>
        			<a type="button" class="btn btn-warning" href="<?php echo e(url('/catalog/edit/' . $arrayPeliculas->id)); ?>">Editar pelicula</a>
        			<a type="button" class="btn btn-default" href="<?php echo e(url('/catalog/')); ?>">Volver al listado</a>
        	<?php else: ?>
        			Pelicula actualmente alquilada
        		</br>
        			<a type="button" class="btn btn-danger">Devolver pelicula</a>
        			<a type="button" class="btn btn-warning" href="<?php echo e(url('/catalog/edit/' . $arrayPeliculas->id)); ?>">Editar pelicula</a>
        			<a type="button" class="btn btn-default" href="<?php echo e(url('/catalog/')); ?>">Volver al listado</a>
        	<?php endif; ?>

  	</div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>