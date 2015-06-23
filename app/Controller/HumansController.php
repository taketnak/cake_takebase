<?php
App::uses('AppController', 'Controller');
/**
 * Humans Controller
 *
 */
class HumansController extends AppController {
public $uses = array('Human','Division');
public $components = array('Paginator','Session');
public $paginate = array(
        'limit' => 15,
        'order' => array(
            'Post.title' => 'asc')
    );

// public $name = 'Examadm';


/**
 * Scaffold
 *
 * @var mixed
 */
//	public $scaffold;

	public function index(){
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('Human');
		$this->set('humans', $data);
		// $humans = $this->Human->find('all');
		// $this->set('humans' , $humans);
	}


	public function add(){
		if ($this->request->is('post')) {
			$this->Human->create();
			$savedata = $this->request->data;
			// $savedata['Human']['created'] = true;
			// unset($savedata['Human']['created']);
			// unset($savedata['Human']['modified']);
			// $this->log($savedata,LOG_DEBUG);
			// $savesata['Human']['created'] = TRUE;
			// $savesata['Human']['modified'] = TRUE;

			if ($this->Human->save($savedata)) {
			// DEBUG
				$this->log( $this->Human->getDataSource()->getLog(), LOG_DEBUG);  //SQLデバッグサンプル
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}


			$this->Session->setFlash(__('Unable to add your post.'));
		}else{
			//テーブル関係性ない場合のリスト作成例  コメント
			// $opt_divisions = $this->Division->find('list' ,array('fields' => array('Division.id','Division.name')));
			// // var_dump($opt_divisions);
			// $this->set('options',$opt_divisions);


						$this->set('divisions', $this->Human->Division->find('list'));//belongsToしてるテーブルのリスト作成

		}
	}

	public function edit($id = null){
		if(!$id){
			throw new Exception(__('Invalid post1'));
		}
		$data = $this->Human->findById($id);

		if(!$data){
			throw new Exception(__('Invalid post2'));
		}
		if($this->request->is(array('data','put'))){
			$this->Human->id = $id;
			if($this->Human->save($this->request->data)){
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));

		}
		if (!$this->request->data) {
			    $this->request->data = $data;
				$this->set('divisions', $this->Human->Division->find('list'));//belongsToしてるテーブルのリスト作成
		}
 	}


	public function delete($id = null){
		if(!$id){
			throw new Exception(__('Invalid post1'));
		}
		$data = $this->Human->findById($id);

		if(!$data){
			throw new Exception(__('Invalid post2'));
		}
		if ($this->Human->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
		} else {
			$this->Session->setFlash(__('The post with id: %s could not be deleted.', h($id)));
		}
		return $this->redirect(array('action' => 'index'));

	}

	public function view($id = null){
		if(!$id){
			throw new Exception(__('Invalid post1'));
		}
		$data = $this->Human->findById($id);

		if(!$data){
			throw new Exception(__('Invalid post2'));
		}
		$this->set('human',$data);
	}

}
