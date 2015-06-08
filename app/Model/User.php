<?php

App::uses('AppModel','Model');


class User extends AppModel{

public $name = 'User';

	// 既に本登録済みのユーザがいないかチェックする
	public function isUniqueAndActive($check){
		foreach (check as $key => $value) {
			$count = $this->find('count',array(
				'conditions' => array(
									$key => value,'is_active' => true,
									),
				'recursive' => -1
				));
			if($count != 0){ return false;}
		}
			return true;
	}

	//対象フィールドと、フィールド名に「_confirm]をつけた値が等しいかを確認
	public function conrirm($check){
		foreach ($check as $key => $value) {
			if(! isset($this->data[$this->name][$key.'_confirm'])){
				return false;
			}
			if($value !== $this->data[$this->name][$key.'_confirm']){
				return false;
			}
		}
		return true;
	}

}
