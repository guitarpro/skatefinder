<?php $__env->startSection('content'); ?>

<?php if(auth()->guard()->guest()): ?>
    <h1>You are not Logged in</h1>
<?php else: ?>
<style>
        .jumbotron p {
        font-size: 20px;
    }
    .jumbotron {
        background-image: url("<?php echo e(asset('images/map-hero.jpg')); ?>");
    }
    
    @media  only screen and (max-width: 600px){
            .display-3 {
            font-size: 50px;
            }
        }
</style>
<div class="jumbotron">
        
	<div class="container">
          
		<h1 class="display-3">Explore</h1>
          
		<p>Ready to skate cool new spots with your friends? You've come to the right place. Explore all these Spots, Parks, and Shops near you!</p>
        
	</div>
      
</div>
<div class="container">
    <div class="row">
        <div class="row mb-2">  
            <?php $__currentLoopData = $locations->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locationChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
                <?php $__currentLoopData = $locationChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
	       <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo e($location->type); ?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#"><?php echo e($location->name); ?></a>
                        </h3>
                        <div class="mb-1 text-muted"><?php echo e($location->address); ?></div>
                        <p class="card-text mb-auto"><?php echo e($location->description); ?></p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" src="<?php echo e($location->image_path); ?>" alt="Card image cap" width="200px" height="250">
                </div>
            </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
		
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>