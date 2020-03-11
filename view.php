<?php
try{

  $pdo->beginTransaction();

  $sql ="SELECT * FROM board";

  $stmh = $pdo->prepare($sql);
  $stmh->execute();
  $count = $stmh->rowCount();

  $pdo->commit();
}
catch(PDOException $e){
  echo '接続エラー'.$e->getMessage();
}

if($count === 0){
  echo "書き込みがありません<br>";

}else{
  echo "書き込み件数は.$count.件です<br>";
}
?>

<?php
 while($row =$stmh->fetch(PDO::FETCH_ASSOC)){
?>
番号：<?php print($row['id']);?><br>
氏名：<?php print($row['name']);?><br>
内容：<?php print($row['comment']);?><br>

<br>
<br>
<?php
 }
?>
