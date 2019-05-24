<fieldset>
	<form action="digitoscalc.php">
		<label>CALCULA CUANTOS DIGITOS TIENE LO INGRESADO</label><br/>
		<label>INGRESE EL NUMERO: </label>
		<input type="number" name="numero" value="<?= isset($_GET['num'])?$_GET['num']:"" ?>">
		<button type="submit">CALCULAR</button>
	</form>
	<?php
		echo isset($_GET['res'])?"Lo ingresado tiene: ".$_GET['res']." digitos":"";
		
		echo isset($_GET['error'])?$_GET['error']:"";
	?>
</fieldset>