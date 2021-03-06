<div class="eventos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Eventos'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Evento'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Tipoeventos'), array('controller' => 'tipoeventos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tipoevento'), array('controller' => 'tipoeventos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Estados'), array('controller' => 'estados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Estado'), array('controller' => 'estados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Participantes'), array('controller' => 'participantes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participante'), array('controller' => 'participantes', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('tipoevento_id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('local'); ?></th>
						<th><?php echo $this->Paginator->sort('data'); ?></th>
						<th><?php echo $this->Paginator->sort('horainicio'); ?></th>
						<th><?php echo $this->Paginator->sort('horafim'); ?></th>
						<th><?php echo $this->Paginator->sort('agenda'); ?></th>
						<th><?php echo $this->Paginator->sort('descricao'); ?></th>
						<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($eventos as $evento): ?>
					<tr>
						<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($evento['Tipoevento']['name'], array('controller' => 'tipoeventos', 'action' => 'view', $evento['Tipoevento']['id'])); ?>
		</td>
						<td><?php echo h($evento['Evento']['name']); ?>&nbsp;</td>
						<td><?php echo h($evento['Evento']['local']); ?>&nbsp;</td>
						<td><?php echo h($evento['Evento']['data']); ?>&nbsp;</td>
						<td><?php echo h($evento['Evento']['horainicio']); ?>&nbsp;</td>
						<td><?php echo h($evento['Evento']['horafim']); ?>&nbsp;</td>
						<td><?php echo h($evento['Evento']['agenda']); ?>&nbsp;</td>
						<td><?php echo h($evento['Evento']['descricao']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($evento['Estado']['name'], array('controller' => 'estados', 'action' => 'view', $evento['Estado']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $evento['Evento']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $evento['Evento']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $evento['Evento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
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