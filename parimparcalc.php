<?php 
	extract($_GET);
	if (isset($numero)and !empty($numero)) {
		$imprimir;
		if($numero%2==0){
			$imprimir="par";
			header("location:parimpar.php?res=$imprimir&num=$numero");
		}else{
			$imprimir="impar";
			header("location:parimpar.php?res=$imprimir&num=$numero");
		}	
	}
	else{
		header("location:parimpar.php?error=Ingrese un valor");
	}
?>