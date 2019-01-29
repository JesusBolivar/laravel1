<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
 
 <?php $__env->startSection('content'); ?>
 	<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir pelicula
         </div>
         <div class="card-body" style="padding:30px">

            

            

            <div class="form-group">
               <label for="title">Título</label>
               <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
               <label for="title">Año</label>
               <input type="text" name="año" id="año" class="form-control">
            </div>

            <div class="form-group">
               <label for="title">Director</label>
               <input type="text" name="Director" id="Director" class="form-control">
            </div>

            <div class="form-group">
               <label for="title">Poster</label>
               <input type="text" name="Poster" id="Poster" class="form-control">
            </div>

            <div class="form-group">
               <label for="synopsis">Resumen</label>
               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir película
               </button>
            </div>

            

         </div>
      </div>
   </div>
</div>
 <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>