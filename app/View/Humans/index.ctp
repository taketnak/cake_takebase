<div class="humans index">
	<h2>search</h2>
<?php
	echo($this->Form->create('search'));
	echo($this->Form->input('sc_name',array('label' => '名前')));
	echo($this->Form->input('sc_age',array('label' => '年齢')));
	echo($this->Form->end('検索'));
?>

	<h2><?php echo __('Humans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('division_id'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('is_manager'); ?></th>
			<th><?php echo $this->Paginator->sort('member_from'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($humans as $human): ?>
	<tr>
		<td><?php echo h($human['Human']['id']); ?>&nbsp;</td>
		<td><?php echo h($human['Human']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($human['Division']['name'], array('controller' => 'divisions', 'action' => 'view', $human['Division']['id'])); ?>
		</td>
		<td><?php echo h($human['Human']['age']); ?>&nbsp;</td>
		<td><?php echo h($human['Human']['is_manager']); ?>&nbsp;</td>
		<td><?php echo h($human['Human']['member_from']); ?>&nbsp;</td>
		<td><?php echo h($human['Human']['created']); ?>&nbsp;</td>
		<td><?php echo h($human['Human']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $human['Human']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $human['Human']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $human['Human']['id']), array(), __('Are you sure you want to delete # %s?', $human['Human']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Human'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
