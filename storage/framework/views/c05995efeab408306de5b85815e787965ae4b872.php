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
                        <h4>
                            Change Password
                            <div class="pull-right">
                                <a class="btn btn-default" href="<?php echo e(url('dashboard/profile')); ?>">Back</a>
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
                                'url' => ['dashboard/profile/psw/change'],
                                'class' => 'form-profile-password-change',
                                'files' => true
                            ]); ?>


                                <div class="row">
                                    <div class="form-group col-md-4 <?php echo e($errors->has('old_password') ? 'has-error' : ''); ?>">
                                        <?php echo Html::decode(Form::label('old_password', 'Current Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ); ?>

                                        <div class="col-md-12">
                                            <?php echo Form::password('old_password', ['class' => 'form-control'] ); ?>

                                            <?php echo $errors->first('old_password', '<p class="help-block">:message</p>'); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 <?php echo e($errors->has('new_password') ? 'has-error' : ''); ?>">
                                        <?php echo Html::decode(Form::label('new_password', 'New Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ); ?>

                                        <div class="col-md-12">
                                            <?php echo Form::password('new_password', ['class' => 'form-control'] ); ?>

                                            <?php echo $errors->first('new_password', '<p class="help-block">:message</p>'); ?>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 <?php echo e($errors->has('new_password_confirmation') ? 'has-error' : ''); ?>">
                                        <?php echo Html::decode(Form::label('new_password_confirmation', 'Confirm Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ); ?>

                                        <div class="col-md-12">
                                            <?php echo Form::password('new_password_confirmation', ['class' => 'form-control'] ); ?>

                                            <?php echo $errors->first('new_password_confirmation', '<p class="help-block">:message</p>'); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="col-md-12">
                                            <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

                                        </div>
                                    </div>
                                </div>

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