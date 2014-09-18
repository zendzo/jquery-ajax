<?php 
$files = file('data.txt');
foreach ($files as $file) {
	echo nl2br($file);
}