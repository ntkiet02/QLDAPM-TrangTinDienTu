<?php
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'trangtin');
	if($link)
		mysqli_set_charset($link, 'utf8mb4');
	else
		die('Không kết nối được tới server!');
?>