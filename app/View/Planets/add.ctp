<div class="planets form">
<?php echo $this->Form->create('Planet'); ?>
	<fieldset>
		<legend><?php echo __('Add Planet'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('info');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Planets'), array('action' => 'index','language' => $this->params['language'])); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shippings'), array('controller' => 'shippings', 'action' => 'index','language' => $this->params['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipping'), array('controller' => 'shippings', 'action' => 'add','language' => $this->params['language'])); ?> </li>
	</ul>
</div>
