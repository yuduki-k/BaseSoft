<?php
  function go()
  {
      header('Location:index.html');
  }
  function back()
  {
    header('Location:NewAcount.html');
  }
  require_once 'sql.php';
  $password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
  $db = sql();
    $sql2 = 'INSERT INTO ID_Pass(ID, Pass)VALUES(:ID, :Pass)';
    $esql2 = $db->prepare($sql2);
    $esql2->execute(array(':ID' => $_POST['user'],
                        ':Pass' => $password));

    file_put_contents($_POST['user'].".txt", 0);
    file_put_contents($_POST['user']."_histry.txt","<tr><td>".date("Y/m/d H:i:s")."</td><td>アカウント作成</td><td><br></td><td>0</td></tr>");
  go();
