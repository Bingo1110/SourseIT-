<?php
session_start();

$_SESSION ['name'] = $_POST['name'];

if ($_POST['name']){
  $name = $_POST['name'];
  echo $name;
  
} else
    echo 'Введите имя!';

?>


<form  method="POST">
    <input type="text" name="name" placeholder="Введите ваше имя">
    <input type="submit" name="submit" value="Отправить">
</form>
