<?php echo $this->Form->create('Author') ?>
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('name') ?>
<?php echo $this->Form->input('picture', array('type' => 'file')); ?>

<?php echo $this->Form->input('deleted', array('type' => 'hidden', 'value' => '')); ?>
<?php echo $this->Form->end('Save'); ?>