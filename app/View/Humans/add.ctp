<div class="humans form">
<?php echo $this->Form->create('Human'); ?>
	<fieldset>
		<legend><?php echo __('Add Human'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('division_id',array('type' => 'select',
								'options' => $options));

/*
		echo $this->Form->input( 'prefecture', array(
    'type' => 'select',
    'options' => $select1
//  'selected' => $selected  // 規定値をvalueで指定
//  'div' => false           // div親要素の有無(true/false)
//  'size' => 5              // 高さ設定(リストボックスとして表示)
//  'empty' => true          // 空白を許可
));
*/

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
