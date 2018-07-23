<div class="row">
    <div class="form-group col-md-6 <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
        <?php echo Html::decode(Form::label('name', 'Full Name <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ); ?>

        <div class="col-md-12">
            <?php echo Form::text('name', null , ['class' => 'form-control'] ); ?>

            <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6 <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
        <?php echo Html::decode(Form::label('email', 'Email <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ); ?>

        <div class="col-md-12">
            <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

            <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>

    <div <?php echo e(isset($submitButtonText) ? "style=display:none" : "style=display:block"); ?> class="form-group col-md-6 <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
        <?php echo Html::decode(Form::label('password', 'Password <span class="req_star">*</span>', ['class' => 'control-label col-md-12']) ); ?>

        <div class="col-md-12">
            <?php echo Form::text('password', null , ['class' => 'form-control']); ?>

            <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        <div class="col-md-12"> 
            <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Submit', ['class' => 'btn btn-primary']); ?>

        </div>
    </div>
</div>
<!-- <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?> -->