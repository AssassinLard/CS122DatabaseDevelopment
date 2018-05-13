<?php
//connect script

DEFINE ('dbHOST', 'localhost');
DEFINE ('dbUSER', 'root');
DEFINE ('dbPASSWORD', '');
DEFINE ('dbNAME', 'dtrdb');
$dbc = @mysqli_connect(dbHOST, dbUSER, dbPASSWORD, dbNAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
