<?php
if(isset($isName,$isComment)){

  if(!$isName){
    print("名前が入力されていません<br>");
  }

  if(!$isComment){
    print("内容が入力されていません<br><br>");
  }
}
?>
<form name="post" method="post" action="index.php">
  名前：<input type="text" name="name" id="name"><br><br>
  内容：<br>
  <textarea name="comment" rows="10" cols="30" id="comment"></textarea>
  <br>
  <input type="submit" value="送信">
</form>
