<!DOCTYPE html>
<html>
<head>
	<title>マイページ</title>
	<script type="text/javascript" src="js/MyPage.js"></script>
	<link rel="stylesheet" href="assets/MyPage.css" media="all">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
</head>
<body onload="detadown()" >
	<p>ようこそ。</p>
	<div id="calc">
		<input type="number" name="shiki1" id="shikiBox1">
		<span>?</span>
		<input type="number" name="shiki2" id="shikiBox2">
		<br>
		<button onclick="calc('+')">+</button>
		<button onclick="calc('-')">-</button>
		<button onclick="calc('*')">×</button>
		<button onclick="calc('/')">÷</button>
		<button onclick="calc('Z')">税込</button>
		<br>
		<p>答え:<span id="kotae"></span></p>
	</div>
	<div id="in">
		<form method="post" action="Mypages.php">
		<p>入金</p>
		<p>金額(¥)<input type="number" id="moneys" name="moneys"></p>
		<p>件名<input type="text" id="kenmei" name="kenmei"></p>
		<p></p>
		<?php
		   	print "<input type=hidden name=\"username\" value=".$_GET['id'].">";
		?>
		<p><input type="submit" value="送信"></p>
	</form>
	</div>
	<form method="post" action="withdrawal.php">
	<p>出金</p>
	<p>金額(¥)<input type="number" id="moneys2" name="moneys2"></p>
	<p>件名<input type="text" id="kenmei2" name="kenmei2"></p>
	<p></p>
	<?php
			print "<input type=hidden name=\"username\" value=".$_GET['id'].">";
	?>
	<p><input type="submit" value="送信"></p>
</form>
	<form method="post" action="Rireki.php">
		<?php
		   	print "<input type=hidden name=\"username\" value=".$_GET['id'].">";
		?>
		<input type="submit" value="履歴を表示">
	</form>
<?php
	print "<a href= \"index.html\">終了<a>";
?>
</body>
</html>
