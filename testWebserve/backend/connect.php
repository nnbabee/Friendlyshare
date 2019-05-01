<?php
$host = 'webservhost';
$username='godprogrammer_us';
$password='Gly33140';
$db='godprogrammer_db';
mysql_connect($host,$username,$password) or die ('error connect');
mysql_query('set name utf8');
mysql_select_db($db) or die('select error');
error_reporting(E_ERROR | E_PARSE);
?>