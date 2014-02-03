<div class="alert alert-<?php echo (isset($type) ? $type : 'success'); ?> <?php echo (isset($dismissable) ? 'alert-dismissable' : ''); ?>">
<?php if( isset($dissmissable) ) : ?>
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<?php endif; ?>
<?php echo $message; ?>
</div>