<div class="eventos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Evento'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Evento'), array('action' => 'edit', $evento['Evento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Eventos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Evento'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tipoeventos'), array('controller' => 'tipoeventos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tipoevento'), array('controller' => 'tipoeventos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Estados'), array('controller' => 'estados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Estado'), array('controller' => 'estados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participantes'), array('controller' => 'participantes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participante'), array('controller' => 'participantes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($evento['Evento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipoevento'); ?></th>
		<td>
			<?php echo $this->Html->link($evento['Tipoevento']['name'], array('controller' => 'tipoeventos', 'action' => 'view', $evento['Tipoevento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($evento['Evento']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Local'); ?></th>
		<td>
			<?php echo h($evento['Evento']['local']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data'); ?></th>
		<td>
			<?php echo h($evento['Evento']['data']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Horainicio'); ?></th>
		<td>
			<?php echo h($evento['Evento']['horainicio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Horafim'); ?></th>
		<td>
			<?php echo h($evento['Evento']['horafim']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Agenda'); ?></th>
		<td>
			<?php echo h($evento['Evento']['agenda']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descricao'); ?></th>
		<td>
			<?php echo h($evento['Evento']['descricao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estado'); ?></th>
		<td>
			<?php echo $this->Html->link($evento['Estado']['name'], array('controller' => 'estados', 'action' => 'view', $evento['Estado']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Participantes'); ?></h3>
	<?php if (!empty($evento['Participante'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Apelido'); ?></th>
		<th><?php echo __('Grauacademico'); ?></th>
		<th><?php echo __('Empresa'); ?></th>
		<th><?php echo __('Datanascimento'); ?></th>
		<th><?php echo __('Genero'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($evento['Participante'] as $participante): ?>
		<tr>
			<td><?php echo $participante['id']; ?></td>
			<td><?php echo $participante['name']; ?></td>
			<td><?php echo $participante['apelido']; ?></td>
			<td><?php echo $participante['grauacademico']; ?></td>
			<td><?php echo $participante['empresa']; ?></td>
			<td><?php echo $participante['datanascimento']; ?></td>
			<td><?php echo $participante['genero']; ?></td>
			<td><?php echo $participante['telefone']; ?></td>
			<td><?php echo $participante['email']; ?></td>
			<td><?php echo $participante['evento_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'participantes', 'action' => 'view', $participante['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'participantes', 'action' => 'edit', $participante['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'participantes', 'action' => 'delete', $participante['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $participante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Participante'), array('controller' => 'participantes', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
