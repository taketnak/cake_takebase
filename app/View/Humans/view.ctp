<div class="humans view">
<h2><?php echo __('Human'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($human['Human']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($human['Human']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Division'); ?></dt>
		<dd>
			<?php echo $this->Html->link($human['Division']['name'], array('controller' => 'divisions', 'action' => 'view', $human['Division']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($human['Human']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Manager'); ?></dt>
		<dd>
			<?php echo h($human['Human']['is_manager']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member From'); ?></dt>
		<dd>
			<?php echo h($human['Human']['member_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($human['Human']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($human['Human']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Human'), array('action' => 'edit', $human['Human']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Human'), array('action' => 'delete', $human['Human']['id']), array(), __('Are you sure you want to delete # %s?', $human['Human']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Humans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Human'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
