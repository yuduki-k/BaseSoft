<?php
function go()
{
    header('Location:MyPage.php?id='.$_POST['username']);
}
function ATOS(){
  header('Location:ATOS.html');
}
require_once 'sql.php';
function user_authorization()
{
    $namapass = $_POST['password'];
    $pass = password_hash($namapass,PASSWORD_DEFAULT);
    $real_password = password_hash("ATOS",PASSWORD_DEFAULT);
    $userdata = [];
    $db = sql();
    try {
        $name = 0;
        if($_POST['username']==null || $pass==null){
          echo '認証に失敗.:(SQL::System::AuthError)';
          return false;
        }elseif ($_POST['username']=="ATOS" and $pass == $real_password){
          ATOS();
        }else{
          $name = $_POST['username'];
          $sql = "select * from ID_Pass where ID = '".$name."';";
          $sst = $db->prepare($sql);
          $sst->execute();
          while ($row = $sst->fetch(PDO::FETCH_NUM)) {
              foreach ($row as $key => $value) {
                  $userdata[$key] = $value;
              }
          }
        }
    } catch (PDOException $e2) {
        exit("Connect_Error:{$e2->getMessage()}");
    }
    if($_POST['username']==null || $pass==null){

    }else{
      if (password_verify($_POST['password'] ,@$userdata[1])) {
          go();
          exit();
        } else {
          echo '認証に失敗.:(SQL::System::AuthError:No.8785828)';
        }
      }
}
user_authorization();
