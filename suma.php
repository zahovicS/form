<fieldset>
	<form action="sumacalc.php">
		<label>SUMA DE DOS NUMEROS</label><br/>
		<label>CANTIDAD 1</label>
		<input type="number" name="n1" value="<?=isset($_GET['n1'])?$_GET['n1']:""; ?>" />
		
		<label>CANTIDAD 2</label>
		<input type="number" name="n2" value="<?=isset($_GET['n2'])?$_GET['n2']:""; ?>" />
		<button type="submit">Calcular</button>
	</form>
 	<?php 
 		echo isset($_GET['re'])?"El resultado es: ".$_GET['re']:" ";
 		echo isset($_GET['error'])?$_GET['error']:"";
 	?>
</fieldset>