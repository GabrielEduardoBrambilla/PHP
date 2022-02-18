<?php 
	session_start(); 
	if (!isset($_SESSION['Nome'])) { 
		if (isset($_POST['Nome'])) { 
			$_SESSION['Nome']=$_POST['Nome'];  
		} else { 
			require_once('index.html'); 
		} 
	}
	echo"Seu nome escolhido para registro; <br>";
	echo $_SESSION['Nome']." registrado! <br><br><br>";
	echo"Sua opiniao em Python: <br>";

	echo $_POST['python']."<br><br>";
	echo"Sua opiniao em JavaScript: <br>";
	echo $_POST['javascript']."<br>";

	
	session_destroy(); 
?>