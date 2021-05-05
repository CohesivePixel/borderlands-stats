<?php $__env->startSection('content'); ?>
    <div class="jumbotron">
        <h1 class="display-3">Yay!</h1>
        <p class="lead">o7 CMDR. You've succesfully added or edited <?php echo e($entity_name); ?></p>
        <hr class="my-4">
        <a href="/" class="btn btn-success" role="button">Return to editor</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>