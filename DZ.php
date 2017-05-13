<?php

if (!empty($_POST ['name'])&& !empty($_POST ['surname'])&& !empty ($_POST ['post'])) {
    $name = $_POST ['name'];
    $surname = $_POST ['surname'];
    $post = $_POST ['post'];
      $list = array($name, $surname, $post);
      $fp = fopen("file.csv", "a");
      fputcsv($fp, $list);
      fclose($fp);
header('locacion: http://DZ7/DZ.php', FALSE);
} else
    echo  'Все поля должны быть заполнены';




?>


<form method="POST">
    <label for="name">Имя</label> <input type="text" id="first_name" name="name" placeholder="Введите ваше имя"> <br>
    <label for="surname">Фамилия</label><input type="text" id="surname" name="surname" placeholder="Введите вашу Фамилию"> <br>
    <label for="post">Должность</label><input type="text" id="post" name="post" placeholder="Введите вашу должность"> <br>
    <input type="submit" name="submit" value="Отправиль">
</form>
