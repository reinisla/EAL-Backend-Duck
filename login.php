<?php
if(isset($_POST["user"]) && isset($_POST["pass"])){
	if($_POST["user"] == "Person" && $_POST["pass"] == "Secret"){
		echo("Successful login");
	}
	else{
		echo("Wrong user or password");
	}
}
else{
	echo("No post information");
}
?>