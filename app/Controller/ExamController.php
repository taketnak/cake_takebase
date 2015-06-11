<?php
App::uses('AppController', 'Controller');

class ExamController extends AppController{
	public $name = 'Exam';
	public $uses = array('User');
	public $components = array('RequestHandler','Auth');

	public function index(){

	}

	// 会員用画像表示サンプル
	public function image($file){

		$logged_in = $this->Auth->user();

		$this->autoRender = false;
		if($logged_in){
			$filepath = APP.'Vendor\\'.$file;
			return new CakeResponse(array('type' => 'image/png', 'body' => readfile($filepath)));

		}else{

			//DEGUBs
			$this->log('ログインエラー',LOG_DEBUG);

			throw new NotFoundException();
		}
	}

	// JSON出力サンプル
	public function json(){
		$data = array(
				'status' => 'success',
				'items' => array(
							array('id' => 1,'name' => 'apple','price' => 100),
							array('id' => 2,'name' => 'banana','price' => 200),
							array('id' => 3,'name' => 'melon','price' => 1000),
						)

		);

		$this->viewClass = 'Json';
		$this->set(compact('data'));
		$this->set('_serialize','data');
	}

	// ファイルアップロードサンプル
	public function upload(){
		if($this->request->data){
			$file = $this->request->data['User']['file'];
			//DEBUG
			$this->log($file,LOG_DEBUG);


			$original_filename = $file['name'];
			$uploaded_file = $file['tmp_name'];
			$filesize = $file['size'];
			$filetype = $file['type'];

			$dest_fullpath = APP.'tmp\\file\\'.md5(uniqid(rand(),true));
			//DEBUG
			$this->log($dest_fullpath,LOG_DEBUG);



			if(!move_uploaded_file($file['tmpfile'],$dest_fullpath)){
				//DEBUG
				$this->log('move error!',LOG_DEBUG);
			}

			$this->redirect('/Exam/index');

		}

	}

	//ファイルダウンロードサンプル
	public function download($file){

		$filepath = APP.'Vendor\\'.$file;

		$this->response->file($filepath,array(
								'download' => true,
								'name' => $file,
								)
			);
		return $this->response;
	}

	//PDF出力
	public function pdf($mode){
		App::import('Vendor','tcpdf/tcpdf');

		if(($mode !== 'D') && ($mode !== 'I')){
			throw new Exception("Illegal param");
			return;
		}

		$this->RequestHandler->respondAs('application/pdf');
		$this->autoRender = false;

		$pdf = new TCPDF('P','mm','A4',true,'UTF-8',false);
		$pdf->AddPage();
		$pdf->SetXY(50,50);
		$pdf->Cell(100,30,'0123456789');
		$pdf->SetXY(50,100);
		$pdf->Cell(100,30,'abcdefghijklnmopqrstuvwxyz');

		$pdf->SetFont('kozgopromedium');	// 日本語対応フォントをセット
		$pdf->SetXY(50,150);
		$pdf->Cell(100,30,'このように表示が可能');

		$pdf->Output('test.pdf',$mode);

	}

}
