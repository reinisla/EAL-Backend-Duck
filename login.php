<?php
if(isset($_POST["user"]) && isset($_POST["pass"])){
	setcookie("user", $_POST["user"]);
	
	if($_POST["user"] == "Person" && $_POST["pass"] == "Secret"){
		header("Location: main.php");
		exit();
	}
	else{
		header("Location: index.php");
		exit();
	}
}
else{
	header("Location: index.php");
	exit();
}
?>