
<h4>Inf（カウントとmaxの使用）</h4>
<p>最高齢は<?php echo($max); ?>です。
</p>
<p><?php echo($mngr_count); ?>人です。
</p>


<h4>ALL</h4>

<?php
$membersAll = $this->requestAction('members/all');
?>
<table>
	<?php foreach($membersAll as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['division_id']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>Over30</h4>
<?php
$membersOv30 = $this->requestAction('members/obtainOver30');
?>
<table>
	<?php foreach($membersOv30 as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>No Manager</h4>
<?php
$membersNmn = $this->requestAction('members/obtainNoManager');
?>
<table>
	<?php foreach($membersNmn as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>太郎（条件にLikeを使用）</h4>
<?php
$membersTaro = $this->requestAction('members/obtainTaro');
?>
<table>
	<?php foreach($membersTaro as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>生産（条件にnotを使用）</h4>
<?php
$divisonsSeisan = $this->requestAction('divisions/obtainSeisan');
?>
<table>
	<?php foreach($divisonsSeisan as $division):  ?>
	<tr>
	<td><?php echo($division['Division']['id']) ?></td>
	<td><?php echo($division['Division']['name']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>50歳以上のManager(条件文に不等号）</h4>
<?php
$membersOv50 = $this->requestAction('members/obtainOvr50Mn');
?>
<table>
	<?php foreach($membersOv50 as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>30歳代（between使用例)</h4>
<?php
$membersAr30 = $this->requestAction('members/obtainAround30');
?>
<table>
	<?php foreach($membersAr30 as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>入社したばっかり（日付指定）</h4>
<?php
$membersNC = $this->requestAction('members/obtainNewCome');
?>
<table>
	<?php foreach($membersNC as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

<h4>指定したフィールドのみ(field例）
)</h4>
<?php
$membersFl = $this->requestAction('members/obatainFlName');
?>
<table>
	<?php foreach($membersFl as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['id']) ?></td>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Division']['name']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>


<h4>非マネージャ（offsetとpageの利用)</h4>
<?php
$membersLD = $this->requestAction('members/obtainLimit/d');
?>
<h5>offset</h5>
<table>
	<?php foreach($membersLD as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>
<?php
$membersLP = $this->requestAction('members/obtainLimit/p');
?>
<h5>page</h5>
<table>
	<?php foreach($membersLP as $member):  ?>
	<tr>
	<td><?php echo($member['Member']['name']) ?></td>
	<td><?php echo($member['Member']['age']) ?></td>
	<td><?php echo($member['Member']['is_manager']) ?></td>
	<td><?php echo($member['Member']['member_from']) ?></td>
	</tr>
	<?php endforeach;  ?>
</table>

