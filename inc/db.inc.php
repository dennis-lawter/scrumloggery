<?php

$db = new mysqli($_CFG['mysql_host'], $_CFG['mysql_user'], $_CFG['mysql_pass']);
if (mysqli_connect_error()) {
	die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

?>