<?php $__env->startSection('title'); ?>
    Skate Finder
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(Session::has('cart')): ?>
        
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <span class="badge badge-success"><?php echo e($product['qty']); ?></span>
                            <strong><?php echo e($product['item']['title']); ?></strong>
                            <span class="label label-success">$<?php echo e($product['price']); ?></span>   
                            <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Reduce by 1</a>
                                    <a class="dropdown-item" href="#">Remove All</a>
                                  </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: $<?php echo e($totalPrice); ?></strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="<?php echo e(route('pages.checkout')); ?>" class="btn btn-success">Checkout</a>
            </div>
        </div>

    <?php else: ?>
        
         <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>NO ITEMS IN CART</h2>
            </div>
        </div>
    
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>