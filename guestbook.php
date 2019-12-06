<?php
 
 if($_POST['SubmitGuestPost']){

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 20000);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<div class='guestbook__comment'>
  <div class='guestbook__comment--name'>".$Name." skriver:</div>
  <div class='guestbook__comment--post'>".$Comment."</div>
</div>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo fread($read, 20000);
 fclose($read);

?>