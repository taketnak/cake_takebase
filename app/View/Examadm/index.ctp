<?php // Examadm/index.ctp   ?>
<h2><?php echo $page_title ?></h2>

<h3>Controller & view</h3>
<h4>色々なリダイレクト例</h4>
画面上の動作は一緒<br />
<ul>
	<li><?php echo($this->Html->Link('[リダイレクト１]','/Examadm/redirect1')); ?></li>
	<li><?php echo($this->Html->Link('[リダイレクト２]','/Examadm/redirect2')); ?></li>
	<li><?php echo($this->Html->Link('[リダイレクト３]','/Examadm/redirect3')); ?></li>
	<li><?php echo($this->Html->Link('[リダイレクト４]','/Examadm/redirect4')); ?></li>
</ul>

<h4>SEO的なリンク方法変更</h4>
<ul>
	<li>
		<a href="http://localhost/recipe/items/detail?id=3">http://localhost/recipe/items/detail?id=3</a>
	</li>
	<li>
		<a href="http://localhost/recipe/items/detail/3">http://localhost/recipe/items/detail/3</a>
	</li>
	<li>
		<a href="http://localhost/recipe/items/detail/3.html">http://localhost/recipe/items/detail/3.html</a>
	</li>
	<li></li>
</ul>

<h4>getリクエスト,POSTパラメータ</h4>
<p>
	<a href="http://localhost/recipe/Examadm/paramget?name=Android&color=red">http://localhost/recipe/Examadm/paramget?name=Android$color=red</a>
</p>
<p>
	<form method="post" action="/recipe/Examadm/parampost">
		description<input type="text" name='description' /><br />
		stocks[black]<input type="text" name='stocks[black]' /><br />
		data[catchcopy]<input type="text" name='data[catchcopy]' /><br />
		data[resolution][x]<input type="text" name='data[resolution][x]' /><br />
		<input type="checkbox" name="specs[]" value="LTE" />
		<input type="checkbox" name="specs[]" value="3G" /><br />
		<input type="submit" />
	</form>
</p>

