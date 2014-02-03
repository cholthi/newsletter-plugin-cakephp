<?php
/**
 * 
 */
?>
<h1>Inscription à la newsletter</h1>
<div class="row">
	<div class="col-md-4">
		<?php 
			echo $this->Form->create('Newsletter', array(
				'url' => array('plugin' => 'Newsletter', 'controller' => 'newsletter', 'action' => 'subscribe')
			));
		?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('firstname', array('label' => 'Votre nom', 'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('lastname', array('label' => 'Votre prénom', 'class' => 'form-control')); ?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('email', array('label' => 'Adresse email', 'class' => 'form-control', 'type' => 'email')); ?>
		</div>
		
		<p class="pull-right" >
			<a href="<?php echo $this->Html->url('/newsletter/unsubscribe'); ?>">Unsubscribe?</a><br />
		</p> 
		
		<?php echo $this->Form->submit('Subscribe!', array('class' => 'btn btn-default')); ?>
	</div>
</div>