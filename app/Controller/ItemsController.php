<?php

App::uses('Appcontroller','Controller');

class ItemsController extends AppController {
	public $name = 'Items';
	public $uses = array('Item');

	public function detail($id){
		$conditions = array('conditions' => array('Item.id' => $id));
		$item = $this->Item->find('first',$conditions);

		//Item見つからない例外エラー
		if(! $item){ throw new NotFoundException(); }

		$this->set('item',$item);
	}

	public function edit($id = null){
		if($this->request->data){
			//POSTされた値の処理
			$this->request->data['Item']['id'] = $id;

			$this->Item->set($this->request->data);

			if(! $this->Item->validates()){
				//Validateエラー
				$this->render('edit');
			}else{
				switch($this->request->data['System']['action']){
					case 'confirm':
						$this->render('confirm');
						break;
					case 'save':
						if($this->Item->save()){
							$this->redirect('/items/detail/'.$id);
						}
						break;
				}
			}
		}else{
			// 値のPOSTが無ければDBから取得
			$conditions = array('conditions' => array('Item.id' => $id));

			$item = $this->Item->find('first',$conditions);
			//Item見つからない例外エラー
			if(! $item){ throw new NotFoundException(); }

			$this->request->data['Item'] = $item['Item'];
		}
	}

}
