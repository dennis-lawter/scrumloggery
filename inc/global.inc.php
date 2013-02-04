<?php

require("config.inc.php");

function handleError($errorNumber, $errorString, $file, $line, $vars) {
	$email = "<p>An error ($errorNumber) occured on line <strong>$line</strong> and in the <strong>file: $file.</strong></p><p>$message</p>";
	$email .= "<pre>" . print_r($vars, 1) . "</pre>";
	$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	error_log($email, 1, $_CFG['error_email'], $headers);
	if($errorNumber>512){
		die("An error occured, please try again later.");
	}
}

set_error_handler('handleError');

echo $unset;

session_start();

require("db.inc.php");

function sanitize($str) {
	$str = trim($str);
	$str = stripslashes($str);
	$str = mysql_real_escape_string($str);
	return $str;
}

?>