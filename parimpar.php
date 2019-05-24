<fieldset>
	<!--Form para saber si un numero es par o impar-->
	<form action="parimparcalc.php">
		<label>PAR O IMPAR?</label><br/>
		<label>NUMERO: </label>
		<input type="number" name="numero" value="<?= isset($_GET['num'])?$_GET['num']:"" ?>">
		<button type="submit">CALCULAR</button>
	</form>
	<?php 
	echo isset($_GET['res'])?"El numero ".$_GET['num']." es: ".$_GET['res']:"";

	echo isset($_GET['error'])?$_GET['error']:"";
	?>
</fieldset>