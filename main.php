<?php
$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Hello <?php echo($username);?>!</title>
	</head>
	
	<body>
	
	</body>
</html>
