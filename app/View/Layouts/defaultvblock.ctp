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
//	echo $this->Html->css('common_adm');
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
<div id = 'left-column'>
	<?php echo($this->fetch('left_column')); ?>
</div>

<div id = 'right-column'>
	<?php echo($this->fetch('right_column')); ?>

</div>
</body>
</html>