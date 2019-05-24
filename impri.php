<?php 
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
	extract($_POST);
	if(empty($Nombres) or empty($Apellidos) or empty($sexo) or empty($dia) or empty($mes) or empty($year))
	{
		header("location:index.php?error=Debe llenar Todos los campos");
	}
	else
	{
		if($sexo=="m"){
			$sexo="Masculino";
		}
		else{
			$sexo="Femenino";
		}
echo <<<HTML
	<h1>Nuevo Registro de Usuario</h1>
	<hr/>
	<table>
		<tr>
			<td><strong>Nombres: </strong></td>
			<td>$Nombres</td>
		</tr>
		<tr>
			<td><strong>Apellidos: </strong></td>
			<td>$Apellidos</td>
		</tr>
		<tr>
			<td><strong>Sexo: </strong></td>
			<td>$sexo</td>
		</tr>
		<tr>
			<td><strong>Fecha de Nacimiento: </strong>
			<td>$dia de $mes del $year</td>
		</tr>
	</table>
HTML;
		}
	}else{
		header("location:index.php?error=INGRESO NO AUTORIZADO POR URL!!!!");
	}
 ?>