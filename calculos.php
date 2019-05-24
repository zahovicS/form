<<?php 
	extract($_GET);

	if (isset($cuadrado)and !empty($cuadrado)) {
		$re=$cuadrado*$cuadrado;
		header("location:index2.php?r=$re&n=$cuadrado");
	}else{
		header("location:index2.php?error=ingresar un valor");
	}

?>