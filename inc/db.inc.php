<?php

require('dblogin.cfg.php');

if(get_cfg_var("mysql.default_user")){
	$db = new mysqli();
}else{
	//Define your connection here!
}
if (mysqli_connect_error()) {
	die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

?>