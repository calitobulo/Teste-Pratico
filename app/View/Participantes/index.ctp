<div class="participantes index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Participantes'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participante'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Eventos'), array('controller' => 'eventos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Evento'), array('controller' => 'eventos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Tipopalestrantes'), array('controller' => 'tipopalestrantes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tipopalestrante'), array('controller' => 'tipopalestrantes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('apelido'); ?></th>
						<th><?php echo $this->Paginator->sort('grauacademico'); ?></th>
						<th><?php echo $this->Paginator->sort('empresa'); ?></th>
						<th><?php echo $this->Paginator->sort('datanascimento'); ?></th>
						<th><?php echo $this->Paginator->sort('genero'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
						<th><?php echo $this->Paginator->sort('tipopalestrante_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($participantes as $participante): ?>
					<tr>
						<td><?php echo h($participante['Participante']['id']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['name']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['apelido']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['grauacademico']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['empresa']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['datanascimento']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['genero']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($participante['Participante']['email']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($participante['Evento']['name'], array('controller' => 'eventos', 'action' => 'view', $participante['Evento']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($participante['Tipopalestrante']['name'], array('controller' => 'tipopalestrantes', 'action' => 'view', $participante['Tipopalestrante']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $participante['Participante']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $participante['Participante']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $participante['Participante']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->