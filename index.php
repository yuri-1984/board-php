<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>掲示板</title>
  </head>
  <body>
    //DB情報
    <?php require 'init.php'?>
    //書き込み追加
    <?php require 'add.php'?>
   //書き込み一覧
    <?php require 'view.php'?>
   //投稿フォーム
    <?php require 'form.php'?>


  </body>
</html>


<?php
$sql = null;
$res = null;
$pdo = null;

try {
    $pdo = new PDO('mysql:dbname=mysql;host=localhost;charset=utf8;unix_socket=/tmp/mysql.sock','root', '******');

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,true);



} catch(PDOException $e){
    echo '接続エラー'.$e->getMessage();
}
$link=null;
?>
