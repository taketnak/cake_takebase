<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<head prefix=”og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#>
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo('title'); ?> </title>
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="">
<meta name="copyright" content="">
<?php echo $this->html->meta('icon'); ?>
<?php
//	echo $this->Html->script('hogehoge');
	echo $this->Html->css('common');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>

<script>
<?php
//ここにGoogle analyticsなど
?>
</script>

</head>

<body>
<div id="top">
	<div id="wrapper">
		<div id="header"><h1>cakePHP sample＆学習</h1></div>
		<div id="menu">
			<ul>
			<li class="home"><?php echo($this->Html->link('home','/Exam/index')); ?></li>
			<li>XXXXXX</li>
			<li>XXXXXX</li>
			<li><?php echo($this->Html->link('ユーザ登録','/Signup/index')); ?></li>
			<li>XXXXXX</li>
			</ul>
		</div>
		<div id="contents">
			<div id="main">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<div id="sub">
				<div class="section"></div>
				<div class="section">
					<h2>sample1</h2>
					<ul>
						<li>XXXXXXXXX</li>
						<li>XXXXXXXXX</li>
						<li>XXXXXXXXX</li>
					</ul>
				</div><!-- /.section -->
				<div class="section">
					<h2>sample2</h2>
					<ul>
						<li>XXXXXXXXX</li>
						<li>XXXXXXXXX</li>
						<li>XXXXXXXXX</li>
					</ul>
				</div><!-- /.section -->
			</div><!-- /#sub -->
			<div id="pageTop">
				<a href="#top">ページのトップへ戻る</a>
			</div><!-- /#pageTop -->
			<div id="footMenu"></div><!-- /#footerMenu -->
		</div><!-- /#contents -->
		<div id="footer">
			<div class="copyright">Copyright &copy; XXXXXXXXXX All Rights Reserved.</div>
		</div><!-- /#footer -->
	</div>
</div>

</body>
</html>
