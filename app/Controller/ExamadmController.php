<?php
App::uses('AppController', 'Controller');

class ExamadmController extends AppController{
	public $layout = 'defaultadm';  // layout変更
	public $name = 'Examadm';
	public $uses = array('User');
	public $components = array('RequestHandler','Auth');

	public function index(){	}

	public function redirect1(){
		//ログ出力例
		$msg = 'ログ情報123';
		$this->log($msg,LOG_DEBUG);
		/*
		 * 	LOG_EMERG			emergency.log
		 * 	LOG_ALERT			alert.log
		 * 	LOG_CRIT			critical.log
		 * 	LOG_ERR				error.log
		 * 	LOG_WARNING			warning.log
		 * 	LOG_NOTICE			notice.log
		 * 	LOG_INFO			info.log
		 * 	LOG_DEBUG			debug.log
		 */

		//コントローラとアクションを指定する例
		$this->redirect(array('controller' => 'Exam','action' => 'index'));
	}

	public function redirect2(){
		//ホスト名含むURL
		$this->redirect('http://localhost/recipe/Exam/index');
	}

	public function redirect3(){
		//ホスト名含まない絶対パス
		$this->redirect('/Exam/index');
	}

	public function redirect4(){
		//ホスト名含まない絶対パス
		$this->redirect('../Exam/index');
	}


}
