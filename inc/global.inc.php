<?php
session_start();

require("db.inc.php");

function sanitize($str) {
	$str = trim($str);
	$str = stripslashes($str);
	$str = mysql_real_escape_string($str);
	return $str;
}

?>