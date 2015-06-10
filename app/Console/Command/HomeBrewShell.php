<?php

// シェルのモデル読み込みサンプル
// シェルの引数サンプル
class HomeBrewShell extends Shell{
	public $uses = array('Item');

	public function startup(){




	}
	public function main(){

		// 引数あれば計算、なければItemモデル表示
		if(isset($this->args)){
			if(count($this->args)){
				$sum = 0;
				foreach($this->args as $arg){
					if($arg === 'help'){
						$this->_help();
						return;
					}

					$sum += $arg;
				}
				$this->out(implode('+',$this->args).' = '.$sum);
			}else{
				$items = $this->Item->find('all');
				$this->out(print_r($items));
			}
		}

	}

	public function _help(){
		$this->out('Usage: cake add param1 param2 param3 ... ');
	}



}
