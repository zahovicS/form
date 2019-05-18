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
<form action="impri.php" method="post">

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
	<!--<tr>
		<td colspan="2">
			<input type="date" name="fechaNac" class="fechas">
		</td>-->
	</tr>
	<tr class="fechas2">
		<td colspan="2" class="dias">
			<select name="dia" id="dia">
			</select>
			<select name="mes" id="mes">
			</select>
			<select name="year" id="year">
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit">Guardar</button>
		</td>
	</tr>
</table>

	<script type="text/javascript">
		let dia=document.querySelector("#dia");
		let meses=document.querySelector("#mes");
		let year=document.querySelector("#year");

		let mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

		for (let i=1;i<=31;i++)
		{
			dia.innerHTML+="<option>"+i+"</option>";
		}
		for (m of mes)
		{
			meses.innerHTML+="<option>"+m+"</option>";
		}
		for (let i = 2019; i >= 1940; i--) {
			year.innerHTML+="<option>"+i+"</option>";
		}

		meses.addEventListener("change",()=>{
			let m=meses.value.toLowerCase();

			if(m=="enero" || m=="marzo" || m=="mayo" || m=="julio" || m=="agosto" || m=="octubre" || m=="diciembre"){
				dia.innerHTML="";
				for (let i =1; i <= 31; i++) {
					dia.innerHTML+="<option value=\""+i+"\">"+i+"</option>";
				}
			}
			else if(m=="febrero")
			{
					dia.innerHTML="";
					for (let i = 1; i <= 28; i++) {
						dia.innerHTML+="<option>value=\""+i+"\""+i+"</option>";
					}
			}
			else
				{
					dia.innerHTML="";
					for (let i = 1; i <= 30; i++) {
						dia.innerHTML+="<option>value=\""+i+"\""+i+"</option>";
					}
				}
		});
	</script>
</form>
</div>
</body>
</html>
