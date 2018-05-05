<?php $__env->startSection('content'); ?>
    <h1>Products</h1>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $products->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $productChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo e($product->imagePath); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->title); ?></h5>
                            <p class="card-text"><?php echo e($product->description); ?></p>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>    
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>