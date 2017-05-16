<?php
$file = "file.txt";

$lines = count(file($file));

echo "В файле $file <br> количество строк $lines";
