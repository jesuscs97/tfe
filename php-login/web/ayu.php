<?php
	//paso 1 es conectarnos con el servidor //esta manera ya esta obsoleta!!
	$link = mysqli_connect('localhost', 'root', '','tfe');
	if(!$link){
		echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_connect_error();
    }
	//Paso 2 es seleccionar la base de datos
	//Paso 3 es hacer la sentencia sql y ejecutarla
			$sql = "SELECT * FROM ayuda";
			$ejecuta_sentencia = mysqli_query($link,$sql);
			if(!$ejecuta_sentencia){
				echo'hay un error en la sentencia de sql: '.$sql;
			}else{
	//Paso 4 es traer los resultados como un array para imprirlos en pantalla
				$lista_paises = mysqli_fetch_array($ejecuta_sentencia);
			}
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<h1>Mostrando Datos Desde Una Base De Datos</h1>
		<table>
			<tr>
				<th>Correo</th>
				<th>Mensaje</th>
				<?php
					for($i=0; $i<$lista_paises; $i++){
						echo"<tr>";
							echo"<td>";
								echo$lista_paises['correo'];
							echo"</td>";
							
							echo"<td>";
								echo$lista_paises['mensaje'];
							echo"</td>";
						echo"</tr>";
						
						$lista_paises = mysqli_fetch_array($ejecuta_sentencia);	
					}
				?>
			</tr>
		</table>
	</body>
</html>