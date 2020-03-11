<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:dbname=mysql;host=localhost;charset=utf8;unix_socket=/tmp/mysql.sock','root', '0427yuri');

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,true);



} catch(PDOException $e){
    echo '接続エラー'.$e->getMessage();
}
$link=null;
?>
