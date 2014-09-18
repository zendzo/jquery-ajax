<?php
$content =  $_POST['content'];
$file = fopen('data.txt', 'w');
fwrite($file, htmlentities(stripcslashes($content)));
fclose($file);