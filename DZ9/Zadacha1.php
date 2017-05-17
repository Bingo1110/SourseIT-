<?php

$date = $_POST['date'];
if (!empty($_POST['date']) ){
    $a = explode(".", $date);
    
    $d = $a[0];
    
    $m = $a[1];
    
    $y = $a[2];
    
    if (checkdate($m,$d,$y))
    {
        echo "<br/> Валидация пройдена";
    }
    else
    {
        echo "<br/> Валидация не пройдена";
    }
}

?>

<form  method="POST">
    <input type="text" placeholder="Введите Дату" name="date" placeholder="">
    <input type="submit" name="submit" value="Отправить">
<!--    <input placeholder="Введите вашу Фамилию">-->
</form>
