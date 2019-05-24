<?php 
	extract($_GET);
	if (isset($numero) and !empty($numero)) {
		$digitos=strlen($numero);
		header("location:digitos.php?res=$digitos&num=$numero");
	}
	else{
		header("location:digitos.php?error=Ingrese un valor");
	}
?>