<?php

// シェルのモデル読み込みサンプル
class HomeBrewShell_2 extends Shell{
	public $uses = array('Item');

	public function startup(){




	}
	public function main(){
		$items = $this->Item->find('all');
		$this->out(print_r($items));
	}



}
