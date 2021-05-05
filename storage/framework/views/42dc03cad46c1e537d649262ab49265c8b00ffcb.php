<?php $__env->startSection('content'); ?>
<form class="editing-form" method="POST" action="/fsdata/edit">
    <?php echo e(csrf_field()); ?>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="system-input">Select a system here</label>
                <input type="text"
                       id="system-input"
                       class="form-control ui-widget"
                       aria-describedby="system-explanation-block"
                       placeholder="System name"
                       name="system-selection">
                <p id="system-explanation-block" class="form-text text-muted">
                    If you can't find a system here you'll have to add it to the database first
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="faction-input">Select a faction here</label>
                <input type="text"
                       id="faction-input"
                       class="form-control ui-widget"
                       aria-describedby="faction-explanation-block"
                       placeholder="Faction name"
                       name="faction-selection">
                <p id="faction-explanation-block" class="form-text text-muted">
                    If you can't find a faction here you'll have to add it to the database first or assign it to a system here
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <label for="new-influence-input">New infuence</label>
            <div class="input-group">
                <input type="number"
                       class="form-control"
                       id="new-influence-input"
                       placeholder="0"
                       aria-describedby="percentage-addon"
                       name="new-influence">
                <span class="input-group-addon" id="percentage-addon">%</span>
            </div>
            <div class="form-group">
                <label for="new-pending-state-input">New pending state</label>
                <input type="text" class="form-control" id="new-pending-state-input"
                       placeholder="New pending state" name="pending-state">
            </div>
            <div class="form-group">
                <label for="new-current-state-input">New current state</label>
                <input type="text" class="form-control" id="new-current-state-input"
                       placeholder="New current state" name="current-state">
            </div>
            <div class="form-group">
                <label for="new-recovering-state-input">New recovering state</label>
                <input type="text" class="form-control" id="new-recovering-state-input"
                       placeholder="New recovering state" name="recovering-state">
            </div>
        </div>
    </div>
    <div class="row">
        <input type="submit" class="btn btn-primary" id="send-btn" value="Submit Data">
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>