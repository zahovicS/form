<fieldset>
	<form action="calculos.php">
		<label for="cuadrado">Ingresar Nuemero: </label>

		<input type="number" name="cuadrado" value="<?=isset($_GET['n'])?$_GET['n']:""; ?>"/>

		<button type="submit">Elevar al Cuadrado</button>
	</form>

	<?php
		echo isset($_GET['r'])?"el resultado es: ".$_GET['r']:"";
		echo isset($_GET['error'])?$_GET['error']:"";
	?>
</fieldset>




<fieldset>
	<!--Form para saber cuantos digitos tiene una cantidad-->
	<form>
		
	</form>
</fieldset>