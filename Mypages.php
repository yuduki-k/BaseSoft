<?php
/*  require_once 'sql.php';
  $db = sql();
  $sql1 = "INSERT INTO ";
  $esql = $db->prepare($sql);
  $esql->execute($esql);
  */

  $zandaka = file_get_contents($_POST['username'].".txt");
  $zandaka=$zandaka+$_POST['moneys'];
  file_put_contents($_POST['username'].".txt",$zandaka);
  $get_file_history= file_get_contents($_POST['username']."_histry.txt");
  $get_file_history=$get_file_history."\n"."<tr><td>".date("Y/m/d H:i:s")."</td><td>入金</td><td>".$_POST['kenmei']."</td><td>".$zandaka."</td></tr>";
  file_put_contents($_POST['username']."_histry.txt",$get_file_history);

  print "入金しました<br>";
  print "<a href= \"MyPage.php?id=".$_POST['username']."\">戻る<a>";
?>
