
<?php // Exam/index.ctp   ?>

<h2>各サンプル実装</h2

<h3>Controller & view</h3>


<h4>ログインしないと見えない画像出力</h4>
<?php echo $this->Html->image('/Exam/image/sampimg.png'); ?>
<br />
<?php  echo($this->Html->Link('[ログインページへ]','/Users/login/')); ?>

<?php echo($this->Html->link('[ログアウト]','/users/logout')); ?>

<h4>JSON出力サンプル</h4>
<br />
<?php echo($this->Html->Link('[JSON出力]','/Exam/json')); ?>
<br />

<h4>ファイルアップロード</h4>
<p>
<?php
	echo($this->Form->create(null,array('url' => array('controller' => 'Exam', 'action' => 'upload'),'type' => 'file')));
	echo($this->Form->input('file',array('type' => 'file','label' => 'ファイル')));
	echo($this->Form->submit('アップロード'));
	echo($this->Form->end());
?>
</p>

<h4>ファイルダウンロード</h4>
<p>
	<?php echo($this->Html->Link('[ダウンロード]','/Exam/download/sampimg.png')); ?>
</p>

