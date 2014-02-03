<?php
/**
 * 
 */
?>
<h1>Désinscription à la newsletter</h1>
<div class="row">
	<div class="col-md-4">
		<?php 
			echo $this->Form->create('Newsletter', array(
				'url' => array('plugin' => 'Newsletter', 'controller' => 'newsletter', 'action' => 'unsubscribe')
			));
		?>
		<div class="form-group">
			<?php echo $this->Form->input('email', array('label' => 'Adresse email', 'class' => 'form-control', 'type' => 'email')); ?>
		</div>
		
		<p class="pull-right" >
			<a href="<?php echo $this->Html->url('/newsletter/subscribe'); ?>">Subscribe?</a><br />
		</p> 
		
		<?php echo $this->Form->submit('Unsubscribe', array('class' => 'btn btn-default')); ?>
	</div>
</div>