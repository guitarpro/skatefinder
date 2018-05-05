<?php $__env->startSection('content'); ?>

<style>
    .jumbotron p {
        font-size: 20px;
    }
    .jumbotron {
        background-image: url("<?php echo e(asset('images/index-hero.jpg')); ?>");
    }
        @media  only screen and (max-width: 600px){
            .display-3 {
            font-size: 50px;
            }
        }
    

</style>
<div class="jumbotron">
        
	<div class="container">
          
		<h1 class="display-3">Products</h1>
          
		<p>In order to skate all the cool spots you'll find with Skate Finder, you need only the best skateboarding gear. Shop boards and find spots all in one stop!</p>
          
		<p><a class="btn btn-primary btn-lg" href="<?php echo e(route('pages.shopping-cart')); ?>" role="button">View Cart &raquo;</a>
		</p>
        
	</div>
      
</div>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $products->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
                <?php $__currentLoopData = $productChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-3 col-sm-6 border">
                    <span class="thumbnail">
                    <img class="img-responsive" style="height: 250px; width: 250px" src="<?php echo e($product->imagePath); ?>" alt="Card image cap">
                        <h5><?php echo e($product->title); ?></h5>
                        <p><?php echo e($product->description); ?></p>
			<hr class="line">
                	<div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p class="price">$<?php echo e($product->price); ?></p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <a href="<?php echo e(route('product.addToCart', ['id' => $product->id])); ?>" class="btn btn-success">ADD TO CART</a>
                            </div>
                        </div>    
                    </span>  
		</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
		
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>    
    </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>