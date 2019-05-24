<?php 
extract($_GET);
if (isset($num1)and isset($num2) and isset($num3) and !empty($num1) and !empty($num2) and !empty($num3)) {
		$promedio=($num1+$num2+$num3)/3;
		header("location:promedio.php?num1=$num1&num2=$num2&num3=$num3&promedio=$promedio");
	}
	else{
		header("location:promedio.php?error=Debe ingresar un valor");
	}
?>