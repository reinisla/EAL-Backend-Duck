<?php
if(isset($_POST["newuser"]) && isset($_POST["newpass"])){
	
	$filehandle = fopen("users","r");
	
	//if username and password is in use
	if ($filehandle){
		$line;
		while ($line =fgets($filehandle)){		
			$line = trim($line);
			$comparetext = $_POST["newuser"]."=".$_POST["newpass"];
			if ($line == $comparetext ){
				fclose ($filehandle);
				setcookie("newuser", $_POST["newuser"]);
				header ("location:registerindex.php");
				exit();
			}	
		}
		fclose ($filehandle);
		$filehandle2 = fopen("users","a");
		$stringData = $_POST["newuser"]."=".$_POST["newpass"]."\n";
		fwrite($filehandle2, $stringData);
		fclose($filehandle2);
	}
	
		header("Location: index.php");
		exit();
	}

else{
	header("Location: index.php");
	exit();
}
?>