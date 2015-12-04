<div class="participantes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Participante'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Participante'), array('action' => 'edit', $participante['Participante']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Participante'), array('action' => 'delete', $participante['Participante']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Participantes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Participante'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Eventos'), array('controller' => 'eventos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Evento'), array('controller' => 'eventos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tipopalestrantes'), array('controller' => 'tipopalestrantes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tipopalestrante'), array('controller' => 'tipopalestrantes', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($participante['Participante']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($participante['Participante']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Apelido'); ?></th>
		<td>
			<?php echo h($participante['Participante']['apelido']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Grauacademico'); ?></th>
		<td>
			<?php echo h($participante['Participante']['grauacademico']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Empresa'); ?></th>
		<td>
			<?php echo h($participante['Participante']['empresa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Datanascimento'); ?></th>
		<td>
			<?php echo h($participante['Participante']['datanascimento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Genero'); ?></th>
		<td>
			<?php echo h($participante['Participante']['genero']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($participante['Participante']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($participante['Participante']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Evento'); ?></th>
		<td>
			<?php echo $this->Html->link($participante['Evento']['name'], array('controller' => 'eventos', 'action' => 'view', $participante['Evento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipopalestrante'); ?></th>
		<td>
			<?php echo $this->Html->link($participante['Tipopalestrante']['name'], array('controller' => 'tipopalestrantes', 'action' => 'view', $participante['Tipopalestrante']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

