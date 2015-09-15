<?php
$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}
echo("Hello ".$username."!");
?>