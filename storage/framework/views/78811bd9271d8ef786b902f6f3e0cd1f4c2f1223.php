<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<?php $__env->startSection('content_header'); ?>
    <!-- <div class="container">
        <h3>Suppliers</h3>
    </div> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="box box-primary">

            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>
                            User Details
                            <div class="pull-right">
                                <a class="btn btn-default" href="<?php echo e(url('dashboard/staff')); ?>">Back</a>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="box-body im-box-body">
                <!-- <div class="well well-lg"> -->
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped mb-0">
                                <tr>
                                    <th scope="row">Name</th>
                                    <td><?php echo e($user->name); ?></td>
                                    
                                    <th scope="row">Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">User Role</th>
                                    <td colspan="3"><?php echo e(isset($role->name)?$role->name:'-'); ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>