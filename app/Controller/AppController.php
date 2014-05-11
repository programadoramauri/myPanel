<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar',
		'Paginator',
		'Session'
	);

	public $helpers = array(
		'Form',
		'Attach.Attach'
	);

	public $paginate = array(
		'limit' => 10
	);

	public function beforeFilter(){
		if(isset($this->params['prefix']) && $this->params['prefix'] == 'admin'){
			$this->layout = 'admin';
		}
	}

	public function admin_index(){
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate($this->modelClass);
		$this->set('data', $data);
	}

	public function admin_edit($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid Data'));
		}

		$post = $this->{$this->modelClass}->findById($id);

		if(!$post){
			throw new NotFoundException(__('Invalid Data'));
		}

		if($this->request->is(array('post', 'put'))){
			if($this->_saveData($this->request->data)){
				$this->Session->setFlash('Your data has been updated');
				return $this->redirect(array('action' => 'index'));
			}
		}
		if(!$this->request->data) {
			$this->request->data = $post;
		}
	}

	public function admin_add(){
		$this->set('formName', $this->modelClass);
		if($this->request->is('post')){
			if($this->_saveData($this->request->data)) {
				$this->Session->setFlash(__('Your data has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function admin_delete($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid Data'));
		}

		$data = $this->{$this->modelClass}->findById($id);

		if(!$data){
			throw new NotFoundException(__('Invalid Data'));
		}

		if($this->{$this->modelClass}->delete($id)){
			$this->Session->setFlash(__('Your data has been deleted'));
			$this->redirect(array('action' => 'index'));
		}
	}

	public function view(){
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate($this->modelClass);
		$this->set('data', $data);
	}

	private function _saveData($data){
		return $this->{$this->modelClass}->saveAll($data);
	}
}