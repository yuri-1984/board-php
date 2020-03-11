<?php



if(isset($_POST["name"],$_POST["comment"])){
  if($_POST["name"] === ""){
    $isName = false;
  }
  else{
    $isName = true;
  }

  if($_POST["comment"] === ""){
    $isComment = false;
  }else{
    $isComment = true;
  }
}
?>
<?php
 if(isset($isName,$isComment)){
   if($isName && $isComment){
     try{

       $pdo->beginTransaction();

       $sql = "INSERT INTO board(name,comment)VALUES(:_name,:_comment)";
       $stmh = $pdo->prepare($sql);

       $stmh->bindValue(":_name",$_POST["name"],PDO::PARAM_STR);
       $stmh->bindValue(":_comment",$_POST["comment"],PDO::PARAM_STR);

       $stmh->execute();
       $pdo->commit();
     }catch(PDOException $e){
       $pdo->rollBack;
       print("エラー".$e->getMessage());
     }
   }
 }
 ?>




?>
