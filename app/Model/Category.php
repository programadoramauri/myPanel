<?php
class Category extends AppModel{
	public $hasMany = array('Quote');
	public $validate = array(
		'image' => array(
				'extension' => array(
					'rule' => array(
						'extension', array(
							'jpg',
							'jpeg',
							'bmp',
							'gif',
							'png',
						)
					),
					'message' => 'File extension is not supported',
					'on' => 'create'
				),
				'mime' => array(
					'rule' => array(
						'mime', array(
							'image/jpeg',
							'image/pjpeg',
							'image/bmp',
							'image/x-ms-bmp',
							'image/gif',
							'image/png'
						)
					),
					'on' => 'create'
				),
				'size' => array(
					'rule' => array('size', 2097152),
					'on' => 'create'
				)
		),
	);
	public $actsAs = array(
		'Utils.SoftDelete',
		'Attach.Upload' => array(
			'image' => array(
				'dir' => 'webroot{DS}uploads{DS}media{DS}category',
				'thumbs' => array(
					'thumb' => array(
						'w' => 190,
						'h' => 158,
						'crop' => true
					)
				)
			)
		)
	);
}