<?php
App::uses('AppController', 'Controller');
/**
 * Divisions Controller
 *
 */
class DivisionsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public function index(){

	}
 	//Not in
	public function obtainSeisan(){
		return $this->Division->find('all',array('conditions' => array(
									'not' => array('Division.name' => array('総務部','営業部')))));
	}

}
