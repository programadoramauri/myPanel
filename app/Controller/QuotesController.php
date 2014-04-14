<?php
	class QuotesController extends AppController{
		
		public function beforeFilter(){
			$this->set('authors', $this->Quote->Author->find('list'));
			$this->set('categories', $this->Quote->Category->find('list'));
			parent::beforeFilter();
		}
	}