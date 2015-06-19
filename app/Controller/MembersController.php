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
		return $this->Member->find('all',array('conditions' => array('Member.age between ? and ?' => array(30,39))));
	}

	//日付
	public function obtainNewCome(){
		return $this->Member->find('all',array('conditions' => array('Member.member_from >=' => date('Y-m-d',strtotime('-60 days')))));
	}

	//部署と名前のみ



}
