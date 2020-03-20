<?php
if (!empty ($_POST['email']) AND !empty($_POST['name']) AND !empty($_POST['message'])){
   
  $theme = 'Новое сообщение';

  $letter = 'Данные Сообщения:r\n';
  $letter .='Email'.$_POST['email']'r\n';
  $letter .='Name'.$_POST['name']'r\n';
  $letter .='message'.$_POST['message']'r\n';
  mail('dimf29@gmail.com',$theme,$letter);
}
else{
    header('Location:/');
}

 ?>
