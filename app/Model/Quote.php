<?php
class Quote extends AppModel{
	public $belongsTo = array(
		'Author' => array(
			'counterCache' => true
		),
		'Category' => array(
			'counterCache' => true
		)
	);
}