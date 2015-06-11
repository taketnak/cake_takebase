<?php
App::uses('AppController', 'Controller');

class ExamadmController extends AppController{
	public $layout = 'defaultadm';  // layout変更
	public $name = 'Examadm';
	public $uses = array('User');
	public $components = array('RequestHandler','Auth');

	public function index(){	}

}
