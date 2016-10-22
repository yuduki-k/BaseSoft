<?php
  function sql()
  {
      $dsn = 'mysql:dbname=User_Money_log; host=localhost; charset=utf8';
      $usr = 'Yuduki';
      $passwd = 'dev';
      try {
          $db = new PDO($dsn, $usr, $passwd);
      } catch (PDOException $e) {
          var_dump($e->getMessage());
      }

      return $db;
  }
