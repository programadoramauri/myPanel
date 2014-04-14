<?php echo $this->Form->create('Category'); ?>
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('deleted', array('value' => '', 'type' => 'hidden')); ?>
<?php echo $this->Form->end(__('Save')); ?>