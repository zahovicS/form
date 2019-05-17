<?php 
	date_default_timezone_set("America/lima");
	extract($_GET);
	echo $Nombres;
	echo "<br />";
	echo $Apellidos;
	echo "<br />";
	if ($sexo=="f") {
		echo "Femenino";
	}
	else{
		echo "Masculino";
	}
	echo "<br/>";
	$meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
	foreach ($meses as $key => $value) {
		echo $value;
		//echo "<option value=\"$value\">",$value,"</option>";
	}
	for ($i=1920; $i<=2010  ; $i+=10) { 
		echo $i;
		echo "<br/>";
	}
	/*
	<script>

	let dia=document.querySelector("#dia");
	for (let i=1;i<=31;i++)
	{
		dia.innerHTML="<option>"+i+"</option>";
	}
	*/
	echo "<br />";
	echo "<br />";
 ?>