<?php

  $con=mysql_connect('localhost','C5','FSVjBG') or die(mysql_error());  
  mysql_select_db('C5') or die("No puede seleccionar la BDD");  
  

$query=('SELECT * FROM PACIENTE');
$resultado = mysql_query($query);
$query2=("SELECT NOMBRE_PA,RUT_PA FROM PACIENTE");
$valor1 = mysql_query($query2);
?>





<!DOCTYPE html>
<html>
<head>
	<title>
    Cambio Horario
	</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<link rel="stylesheet" href="../styles/layout_2.css" type="text/css">
<body>




</html>

<form class="jano-form" action="JANO.php" method="POST">

<center>
			<font size="6"  ><center><p><h1 style="background-color:teal;color:white">Cambio de Horario Pacientes</h1></p></center><br> </font> 
            
            <center><table border=1 width="20%"></center>
		
			<thead>
				  <a href="Paciente_nuevo.php">Agregar Paciente</a>
				<tbody>
				 
				     
				     
	 
 

					<?php while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) { ?>
						 
							<tr>
							<td><b>RUT</b></td>
                            <td>
							   <?php echo $row['RUT_PA'];?>
							</td>
							
							<tr>
 						<td><b>Nombre</b></td>
							<td>
							   <?php echo $row['NOMBRE_PA'];?>
							</td>
							
							
					<?php } ?>
					 
				</tbody>
				 
			</table>


			<td> 
			<center><a href="../index.php">Volver al Menu</a>
		    

           

			 

            
            <font color="black "> <h1> INGRESE ID DE USUARIO A CAMBIAR DE HORARIO</h1> </font><br>

                                
            
									<form action="JANO.php" method="POST">
									<input type="text" name="idsesion" placeholder="idsesion">
									<button type="submit" name="submit"> Generar Cambio de Turno</button>
								</form> 
								<br><br><br>
								
								<form action="enviar.php" method="POST">
									<input type="text" name="nuevahora" placeholder="horanueva">
									<button type="submit" name="submit"> Ingrese Cambio de Horario</button>
								</form>


<br><br><br><br><br><br><br><br><br><br><br><br>
<font size="5"  ><center><p><h1 style="background-color:teal;color:white"> .. </h1></p></center><br> </font> 
</center>




	

</form>

</body>