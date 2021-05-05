<?php $__env->startSection('content'); ?>
    <div class="jumbotron">
        <h1 class="display-3">Oh noes!</h1>
        <p class="lead">Something went wrong</p>
        <hr class="my-4">
        <a href="/" class="btn btn-danger" role="button">Return to editor</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>