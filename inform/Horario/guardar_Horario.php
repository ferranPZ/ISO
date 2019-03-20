
 
<?php 
   
	require('../conexion.php');
	
 
	$cod_hora=$_POST['cod_hora']; 
	$boleta_ses=$_POST['boleta_ses'];
	$fecha_hora=$_POST['fecha_hora']; 
	$bloque_hora=$_POST['bloque_hora']; 
 
 
  
  
   
	
 
   $query1 = "INSERT INTO `HORARIOS` (`cod_hora`, `boleta_ses`, `fecha_ses`, `bloque_hora`) 
   VALUES ('$cod_hora', '$boleta_ses', '$fecha_hora', '$bloque_hora')";
   
    
   
   
   
   $resultado1 = mysql_query($query1) 
	 	
?>
   
 
<html>
 <link rel="stylesheet" href="../styles/layout_2.css" type="text/css">  
 
 
 
	<head>
		<title>Guardar Horario</title>
	</head>
	<body oncontextmenu="return false" >		<center>	
			
			<?php if($resultado1>0){ ?>
				<h1>Horario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Horario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="../index.php">Regresar</a>
			
		</center>
	</body>
	</html>	