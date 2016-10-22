<?php
/*print $_POST['username2'];
print ":";
print     $_POST['moneys2'];
print ":";
print   $_POST['kenmei2'];
*/
$zandaka = file_get_contents($_POST['username'].".txt");
$zandaka=$zandaka-$_POST['moneys2'];
file_put_contents($_POST['username'].".txt",$zandaka);
$get_file_history= file_get_contents($_POST['username']."_histry.txt");
$get_file_history=$get_file_history."\n"."<tr><td>".date("Y/m/d H:i:s")."</td><td>引出</td><td>".$_POST['kenmei2']."</td><td>".$zandaka."</td></tr>";
file_put_contents($_POST['username']."_histry.txt",$get_file_history);

print "引出しました。<br>";
print "<a href= \"MyPage.php?id=".$_POST['username']."\">戻る<a>";

 ?>
