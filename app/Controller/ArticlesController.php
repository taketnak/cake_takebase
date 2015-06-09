<?php
App::uses('AppController', 'Controller');

class ArticlesController extends AppController{

	public $name = 'Articles';
	public $uses = array('Article');

	public function index(){
		$conditions = array();


		// 各検索条件の追加
		if($this->request->data){
			$search = $this->request->data['Search'];

			if($search['text']){
				$conditions['Article.title like'] = '%'.$search['text'].'%';
			}
			if($search['is_active']){
				$conditions['Article.is_active'] = true;
			}

		}

		$this->paginate = array(
			'Article' => array(
				'limit' => 20,
				'order' => 'Article.created desc',
				'conditions' => $conditions,
			),
		);

		$articles = $this->paginate('Article');
		$this->set('articles',$articles);
	}

}
