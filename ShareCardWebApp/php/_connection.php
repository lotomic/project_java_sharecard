<?php
	$conn = mysql_connect('localhost','root', '') or die('Nije moguće spojiti se na bazu.');
	mysql_select_db('mydb') or die('Baza ne postoji!');
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER_SET 'utf8'");
	
?>
