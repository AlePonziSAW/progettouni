<?php
session_start();

if(isset($_COOKIE["autologin"])) {
	echo var_dump($_COOKIE["autologin"]) ." <br>";
	echo var_dump($_SESSION["user"]);
	setcookie("autologin", "" , time() - 3600 , "/");
	}
session_destroy();
echo "bla";
header('location: index.php');

?>