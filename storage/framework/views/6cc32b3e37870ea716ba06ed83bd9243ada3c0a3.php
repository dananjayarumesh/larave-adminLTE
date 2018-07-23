<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<style type="text/css">

</style>

<?php echo $__env->make('layouts.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="box box-primary">
            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4><strong>Edit User:: <?php echo e($user->name); ?></strong>
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
                            <?php echo Form::model($user, [
                                'method' => 'PATCH',
                                'url' => ['dashboard/staff', $user->id],
                                'class' => 'form-users-edit',
                                'files' => true
                            ]); ?>


                            <?php echo $__env->make('users.form', ['submitButtonText' => 'Update'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script>

</script>



<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>