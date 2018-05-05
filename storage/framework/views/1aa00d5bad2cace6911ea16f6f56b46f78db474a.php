<?php $__env->startSection('content'); ?>

    <h1>Create a Spot</h1>
    <div class="col-md-8 order-md-1">
        <form action="store" method="post" enctype="multipart/form-data" class="needs-validation">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
            <label for="image_path">Photo</label>
            <input class="btn" type="file" name="image_path">

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <br>
            <label for="type">Location Type</label>
                    <select class="custom-select d-block w-100" id="type" required>
                        <option value="">Choose...</option>
                        <option>Park</option>
                        <option>Shop</option>
                        <option>Spot</option>
                    </select>
                <br>
            <input class="btn btn-success" type="submit" name="submit" value="Submit">
        </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>