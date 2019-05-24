<?php 
	extract($_GET);
	if (isset($numero)and !empty($numero)) {
		
	}
	else{
		header("location:parimpar.php?error=Ingrese un valor")
	}
?>