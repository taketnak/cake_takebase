<div class="divisions view">
<h2><?php echo __('Division'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($division['Division']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($division['Division']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($division['Division']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($division['Division']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Division'), array('action' => 'edit', $division['Division']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Division'), array('action' => 'delete', $division['Division']['id']), array(), __('Are you sure you want to delete # %s?', $division['Division']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Humans'), array('controller' => 'humans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Human'), array('controller' => 'humans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Humans'); ?></h3>
	<?php if (!empty($division['Human'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Division Id'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Is Manager'); ?></th>
		<th><?php echo __('Member From'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($division['Human'] as $human): ?>
		<tr>
			<td><?php echo $human['id']; ?></td>
			<td><?php echo $human['name']; ?></td>
			<td><?php echo $human['division_id']; ?></td>
			<td><?php echo $human['age']; ?></td>
			<td><?php echo $human['is_manager']; ?></td>
			<td><?php echo $human['member_from']; ?></td>
			<td><?php echo $human['created']; ?></td>
			<td><?php echo $human['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'humans', 'action' => 'view', $human['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'humans', 'action' => 'edit', $human['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'humans', 'action' => 'delete', $human['id']), array(), __('Are you sure you want to delete # %s?', $human['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Human'), array('controller' => 'humans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($division['Member'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Division Id'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Is Manager'); ?></th>
		<th><?php echo __('Member From'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($division['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['name']; ?></td>
			<td><?php echo $member['division_id']; ?></td>
			<td><?php echo $member['age']; ?></td>
			<td><?php echo $member['is_manager']; ?></td>
			<td><?php echo $member['member_from']; ?></td>
			<td><?php echo $member['created']; ?></td>
			<td><?php echo $member['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), array(), __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
