<?php
echo $this->Form->create('Quote');
echo $this->Form->input('id');
echo $this->Form->input('author_id');
echo $this->Form->input('category_id');
echo $this->Form->input('quote');
echo $this->Form->input('deleted', array('type' => 'hidden', 'value' => ''));
echo $this->Form->end(__('Save'));