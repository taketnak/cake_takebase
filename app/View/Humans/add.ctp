<div class="humans form">
<?php echo $this->Form->create('Human'); ?>
	<fieldset>
		<legend><?php echo __('Add Human'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('division_id');
		echo $this->Form->input('age');
		echo $this->Form->input('is_manager');
		echo $this->Form->input('member_from');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Humans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
