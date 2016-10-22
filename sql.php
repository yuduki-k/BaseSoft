<?php
  function sql()
  {
      $dsn = 'mysql:dbname=ID_Pass; host=localhost; charset=utf8';
      $usr = 'root';
      $passwd = 'root';
      try {
          $db = new PDO($dsn, $usr, $passwd);
      } catch (PDOException $e) {
          var_dump($e->getMessage());
      }

      return $db;
  }
