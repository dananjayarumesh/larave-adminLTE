<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php echo $__env->make('layouts.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="box box-primary">

            <div class="box-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>
                            My Profile 
                            <div class="pull-right">
                                <!-- <a class="btn btn-info" href="#">Change Password</a> -->
                                <a class="btn btn-primary" href="<?php echo e(url('dashboard/profile/edit')); ?>">Edit Profile</a>
                                <!-- <a class="btn btn-default" href="<?php echo e(url('dashboard/staff')); ?>">Back</a>  -->
                            </div>
                        </h4>
                    </div>
                </div>
            </div> 
            <div class="box-body im-box-body">
                <!-- <div class="well well-lg"> -->
                    <div class="row">
                        <div class="col-md-2">
                            <div  align="left"> 
                                <img alt="User Pic" 
                                    src="<?php echo e(asset('/images/nobody.jpg')); ?>" 
                                    id="profile-image" class="img-circle img-responsive profile-image" /> 
                            </div>                            
                        </div>
                        <div class="col-md-10">
                            <br>
                            <div  align="left">
                                <p><i class="fa fa-fw fa-user-circle-o"></i> &nbsp;&nbsp; <?php echo e($user->name); ?></p>
                                <p><i class="fa fa-fw fa-envelope"></i> &nbsp;&nbsp; <?php echo e($user->email); ?></p>
                                <p><i class="fa fa-fw fa-key"></i> &nbsp;&nbsp; <a class="btn btn-info btn-xs" href="<?php echo e(url('dashboard/profile/psw/change')); ?>">Change Password</a></p>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/app.js')); ?>"></script> 
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>