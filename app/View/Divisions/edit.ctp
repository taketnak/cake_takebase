<div class="divisions form">
<?php echo $this->Form->create('Division'); ?>
	<fieldset>
		<legend><?php echo __('Edit Division'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Division.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Division.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Humans'), array('controller' => 'humans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Human'), array('controller' => 'humans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
