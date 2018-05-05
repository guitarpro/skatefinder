<?php $__env->startSection('content'); ?>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>