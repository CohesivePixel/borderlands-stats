<?php $__env->startSection('content'); ?>
    <form class="editing-form" method="POST" action="/system/add">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-lg-3">
                <label for="system-add-name">System Name</label>
                <input type="text"
                       id="system-add-name"
                       class="form-control"
                       placeholder="System name"
                       name="system_add_name"
                       required>
                <p id="system_add_name_explanation" class="text-muted">
                    50 Characters max.
                </p>
            </div>
            <div class="col-lg-3">
                <label for="system-add-star-class">Star Class</label>
                <input type="text"
                       id="system-add-star-class"
                       placeholder="Star class"
                       name="system_add_star_class"
                       required>
                <p id="system_add_name_explanation" class="text-muted">
                    3 Characters max.
                </p>
            </div>
            <div class="col-lg-3">
                <label for="system-add-industry-type">Industry Type</label>
                <input type="text"
                       id="system-add-industry-type"
                       placeholder="Industry type"
                       name="system_add_industry_type"
                       required>
                <p id="system_add_name_explanation" class="text-muted">
                    15 Characters max.
                </p>
            </div>
            <div class="col-lg-3">
                <label for="system-add-current-order-id">ID of the current given order</label>
                <input type="text"
                       id="system-add-current-order-id"
                       placeholder="Order ID"
                       aria-describedby="system-add-current-order-id-explanation"
                       name="system_add_current_order_id"
                       required>
                <p id="system-add-current-order-id-explanation" class="form-text text-muted">
                    1.  {...} <br>
                    2.  {...} <br>
                    3.  {...} <br>
                    4.  {...} <br>
                    5.  {...} <br>
                    6.  {...} <br>
                </p>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn btn-primary" id="send-btn" value="Add System">
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>