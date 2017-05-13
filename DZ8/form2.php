<?php
setcookie('name' , $_POST['name'] , time()+15 , '/' );
var_dump($_COOKIE);

?>
<form  method="POST">
    <input type="text" name="name" placeholder="Введите ваше имя">
    <input type="submit" name="submit" value="Отправить">
</form>

