<style>
    .alert-custom { position: absolute; top: 55px; right: 10px; z-index: 100; width: auto; min-width: 250px; }
    .alert-custom .close { text-decoration: none; }
</style>

<script type="text/javascript">
	setTimeout(function(){ 
		$('.alert').alert('close'); 
	}, 5000);
</script>

<?php if(Session::has('flash_message_success')): ?>
	<div class="alert alert-success alert-custom alert-dismissible fade in" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	  	<?php echo e(Session::get('flash_message_success')); ?>

	</div>
<?php elseif(Session::has('flash_message_error')): ?>
	<div class="alert alert-danger alert-custom alert-dismissible fade in" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	  	<?php echo e(Session::get('flash_message_error')); ?>

	</div>
<?php elseif(Session::has('flash_message_warning')): ?>
	<div class="alert alert-warning alert-custom alert-dismissible fade in" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	  	<?php echo e(Session::get('flash_message_warning')); ?>

	</div>
<?php elseif(Session::has('flash_message_info')): ?>
	<div class="alert alert-info alert-custom alert-dismissible fade in" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	  	<?php echo e(Session::get('flash_message_info')); ?>

	</div>
<?php endif; ?>
