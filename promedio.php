<fieldset>
	<form action="promediocalc.php">
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