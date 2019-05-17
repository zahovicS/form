<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		.formulario{
			background: #222548;
			color: white;
			width: 280px;
			height: 230px;
			font-size: 20px;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
		}
		.fechas{
			width: 100%;
			padding: 0;
			margin: 0;
			font-size: 15px;
		}
		button{
			transform: translate(110%,20%);
			font-size: 20px;
			background: orange;
			border: 0;
			color: white;
		}
		select{
			font-size: 15px;
		}
	</style>
</head>
<body>
<div class="formulario">
<form action="impri.php">

<table border="0">
	<tr>
		<td><label for="nombres">Nombres</label>
		<td><input type="text" name="Nombres" id="nombres" placeholder="Nombres" /></td>
	</tr>
	<tr>
		<td>
			<label for="apellidos">Apellidos</label>
		</td>
		<td><input type="text" name="Apellidos" id="apellidos" placeholder="Apellidos" /></td>
	</tr>
	<tr>
		<td>Sexo</td>
		<td>
			<input type="radio" name="sexo" id="m" value="m">
			<label for="m">Masculino</label>
			<br />
			<input type="radio" name="sexo" id="f" value="f">
			<label for="f">Femenino</label>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<label>Fecha de Nacimiento</label>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="date" name="fechaNac" class="fechas">
		</td>
	</tr>
	<tr class="fechas2">
		<td colspan="2" class="dias">
			<select name="dia">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">31</option>
			</select>
			<select name="mes">
				<option value="Enero">Enero</option>
				<option value="...">...</option>
				<option value="Diciembre">Diciembre</option>
			</select>
			<select name="year">
				<option value="1980">1980</option>
				<option value="...">...</option>
				<option value="2019">2019</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit">Guardar</button>
		</td>
	</tr>
</table>
	<!--<h1>Formulario</h1>
	<label></label>
	<input type="text" name="Nombre" placeholder="Nombre">
	<input type="text" name="Apeliidos" placeholder="Apellidos">
	<label>Sexo</label>
	<input type="radio" name="sexo" value="m">
	<input type="radio" name="sexo" value="f">
	-->
</form>
</div>
</body>
</html>
