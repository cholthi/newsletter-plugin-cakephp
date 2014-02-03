<?php
/**
 * 
 */
?>
<h1>Liste des inscrits</h1>
<div class="row">
	<div class="col-md-12">
		<table class="table table-condensed">
			<thead>
				<tr>
					<th>#</th>
					<th>Fistname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th>Registered on</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php if( empty($members) ) : ?>
					<tr>
						<td colspan="6"><p class="text text-danger text-center">Aucun inscrit</p></td>
					</tr>
				<?php else : ?>
					<?php foreach($members as $k=>$v) : ?>
					<tr>
						<td><?php echo $v['Newsletter']['id']; ?></td>
						<td><?php echo $v['Newsletter']['firstname']; ?></td>
						<td><?php echo $v['Newsletter']['lastname']; ?></td>
						<td><?php echo $v['Newsletter']['email']; ?></td>
						<td><?php echo date('d/m/Y', strtotime($v['Newsletter']['created'])); ?></td>
						<td><a href="<?php echo $this->Html->url('/newsletter/delete-member/'.$v['Newsletter']['id']); ?>" class="text text-danger"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
					</tr>
					<?php endforeach; ?>
				<?php endif;?>
			</tbody>
		</table>
	</div>
</div>