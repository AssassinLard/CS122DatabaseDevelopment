<?php
//connect script

DEFINE ('dbHOST', 'localhost');
DEFINE ('dbUSER', 'root');
DEFINE ('PASSWORD', '');
DEFINE ('dbNAME', 'dtrdb');
$dbc = @mysqli_connect(HOST, USER, PASSWORD, NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
