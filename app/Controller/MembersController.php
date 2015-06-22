<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 *
 */
class MembersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
//	public $scaffold;


	public function index(){
		// MAX取得方法
		// $max_age = $this->Member->find('first',array('fields' => array('max(age) as Member.age_max')));
		$max_age = $this->Member->find('first',array('fields' => array('max(age)')));

		$this->log($max_age,LOG_DEBUG);


		// COUNT 条件合致するレコード取得方法
		$mngr_count = $this->Member->find('count',array('conditions' => array('Member.is_manager' => true)));

		$this->set('max',$max_age[0]['max(age)']);
		$this->set('mngr_count',$mngr_count);
	}

	public function all(){
		return $this->Member->find('all');
	}
	// ～以上の条件
	public function obtainOver30(){
		$members = $this->Member->find('all',array('conditions' => array('Member.age >=' => 30)));

		return $members;
	}

	// Boolean
	public function obtainNoManager(){
		return $this->Member->find('all',array('conditions' => array('Member.is_manager ' => false)));

	}
	//Like
	public function obtainTaro(){
		return $this->Member->find('all',array('conditions' => array('Member.name like' => '%太郎%')));
	}

	//AND
	public function obtainOvr50Mn(){
		return $this->Member->find('all',array('conditions' => array('and' => array('Member.is_manager' => true,
																					'Member.age >=' => 50))));
	}

	//between
	public function obtainAround30(){
		return $this->Member->find('all',array('conditions' => array('Member.age between ? and ?' => array(30,39)),'order' => 'Member.name desc'));
	}

	//日付
	public function obtainNewCome(){
		return $this->Member->find('all',array('conditions' => array('Member.member_from >=' => date('Y-m-d',strtotime('-60 days')))));
	}

	//必要なフィールドのみ取得（idと名前と部署名のみ）
	public function obatainFlName(){
		return $this->Member->find('all', array('field' => array('Member.id','Member.name','Division.name')));
	}

	//開始行と取得行数を指定（直 と ページ）
	public function obtainLimit($param){
		if($param == "d"){			// 直接指定
			return $this->Member->find('all', array('conditions' => array('Member.is_manager' => false),
								'offset' => 2,
								'limit' => 3));

		}else if($param == "p"){		// ページ指定
			return $this->Member->find('all',array('conditions' => array('Member.is_manager' => false),
								'page' => 2,
								'limit' => 3));

		}
	}


}
