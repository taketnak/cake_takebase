<?php
App::uses('AppController', 'Controller');

class ExamadmController extends AppController{
	public $layout = 'defaultadm';  // layout変更
	public $name = 'Examadm';
	public $uses = array('User');
	public $components = array('RequestHandler','Auth','Session');


	//Controller内メソッド開始前共通サンプル
	public function beforeFilter(){
		parent::beforeFilter();

		$this->log('examadm start---',LOG_DEBUG);

	}

	//Controller内メソッドの終了後共通サンプル
	public function beforeRender(){
		parent::beforeRender();

		$this->set('page_title','examadm');

		$this->log('examadm end---',LOG_DEBUG);

	}

	public function index(){
		$this->viewset();
	}

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

	// パラメータ受け取り確認
	public function paramget(){
		$name = null;
		$color = null;

		if(isset($this->request->query['name'])){
			$name = $this->request->query['name'];
		}
		if(isset($this->request->query['color'])){
			$color = $this->request->query['color'];
		}

		$message = 'name['.$name.'],color['.$color.']';
		$this->Session->setFlash($message);
		$this->redirect('/Examadm/index');
	}

	public function parampost(){
		$description = null;
		$stocks = null;
		$catchcopy = null;
		$resolutions = null;
		$specs = array();

		//nameの受け取り
		if(isset($this->request->data['description'])){
			$description = $this->request->data['description'];
		}
		//nameの配列受け取り
		if(isset($this->request->data['stocks']['black'])){
			$stocks['black'] = $this->request->data['stocks']['black'];
		}
		//dataの配列の場合はname記載と同様の受けとり
		if(isset($this->request->data['catchcopy'])){
			$catchcopy = $this->request->data['catchcopy'];
		}
		//dataの多次元配列もdata省略の形で受け取り可能
		if(isset($this->request->data['resolution']['x'])){
			$resolutions['x'] = $this->request->data['resolution']['x'];
		}
		//同一名称のパラメータ配列
		if(isset($this->request->data['specs'])){
			$specs = $this->request->data['specs'];
		}

		$message = 'desc['.$description.']'.
					',stocks['.$stocks['black'].']'.
					',catchcp['.$catchcopy.']'.
					',resol['.$resolutions['x'].']'.
					',specs['.$specs.']';
		$this->Session->setFlash($message);

		$this->redirect('/Examadm/index');
	}

	//コントローラからビューへの値渡しサンプル
	public function viewset(){
		$this->set('price',1500);
		$this->set('title','商品詳細');

		$this->set('user',
				$this->User->find('first',array('conditions' => array('User.id' => 2))));
	}
}
