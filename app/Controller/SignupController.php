<?php

App::users('AppController','Controller');
App::users('CakeEmail','Network/Email');

class SignupController extends AppController{
	public $name = 'Signup';
	public $uses = array('User');
	public $components = array('Auth');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}

	public function index(){
		if(! $this->request->data){
			$this->render();
			return;
		}
		$this->User->validate = array(
			'email' => array(
					array(
						'rule' => 'notEmpty',
						'message' => 'メールアドレスを入力してください',
						),
					array(
						'rule' => array('custom',' /^.+@.+$/ '),
						'message' => '形式が正しくありません' ,
						),
					array(
						'rule' => 'confirm',
						'message' => 'メールアドレスが一致しません'
						),
					array(
						'rule' => 'isUniqueAndActive',
						'message' => 'すでに使用されています'
						)
					)
			);
		
	}

}
