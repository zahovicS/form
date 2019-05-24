<?php 
//form 1
extract($_GET);
	if (isset($n1)and isset($n2) and !empty($n1) and !empty($n2)) {
		$resultado=$n1+$n2;
		header("location:suma.php?re=$resultado&n1=$n1&n2=$n2");
	}
	else{
		header("location:suma.php?error=Ingrese un valor");
	}
?>