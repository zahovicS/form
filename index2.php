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
	<!--Form para hallar el promedio de 3 notas-->
	<form>
		<label>SACAR PROMEDIO</label><br/>
		<label>NOTA 1</label>
		<input type="number" name="num1" value="<?=isset($_GET['num1'])?$_GET['num1']:""; ?>">
		<label>NOTA 2</label>
		<input type="number" name="num2" value="<?=isset($_GET['num2'])?$_GET['num2']:""; ?>">
		<label>NOTA 3</label>
		<input type="number" name="num3" value="<?=isset($_GET['num3'])?$_GET['num3']:""; ?>">
		<button type="submit">Calcular</button>
	</form>
	<?php 	
		echo isset($_GET['promedio'])?"El promedio es: ".$_GET['promedio']:"no esta";

		echo isset($_GET['error'])?$_GET['error']:"";
	?>
</fieldset>

<fieldset>
	<!--Form para saber si un numero es par o impar-->
	<form>
		
	</form>
</fieldset>

<fieldset>
	<!--Form para saber cuantos digitos tiene una cantidad-->
	<form>
		
	</form>
</fieldset>