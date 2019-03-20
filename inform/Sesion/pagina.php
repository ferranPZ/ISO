<?php
require('../conexion.php');

$query=('SELECT * FROM PACIENTE P,ALERGIAS AL ,MEDICAMENTOS M
WHERE P.RUT_PA=AL.RUT_PA AND P.RUT_PA=M.RUT_PA');
 
$resultado = mysql_query($query);


 

?> 
 
 
 
<html>
   <title>Reserva Atencion</title>
    <div class="wrapper row1">
   
    <h1><a>Reserva Atencion</a></h1>
 
    </div>
 
 
	<head>
	  
	  
	 
      <link rel="stylesheet" href="../styles/layout_2.css" type="text/css">    
	 
	 
	 
	 
	</head>
	 
 
	 
	 
	  <?php while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) { ?>	
	  
	 
		
	 
	<body oncontextmenu="return false" onkeydown="return false">
    



<p></p></center>
	
		<table id="t01" border=1 width="20%">		
			<thead>			 
				<tbody>				 
					 		
		  
							<tr>
							<td> Nombre Paciente   </td>
                            <td id="td01">
							   <?php echo $row['NOMBRE_PA'];?>
							</td>
							
							<tr>
 						<td height="50"> R.U.T Paciente  </td>
							<td>
							   <?php echo $row['RUT_PA'];?>
							</td>
							
							<tr>
						<td height="50"> Area a Tratar  </td>
							<td>
							   <?php echo $row['LUGAR_TATU_PA'];?>
							</td>
							
						 
					 
							
							
							
							
							
							 
						</tr>

					 
					 
					 
					 
				</tbody>
				 
			</table>		


<h1><a>Paciente Seleccionado</a></h1>

	 
	  <table id="t05" border=1 width="20%">		
			<thead>			 
				<tbody>				 
					 		
		  
							<tr>
							<td> Nombre Paciente   </td>
                            <td id="td01">
							   <?php echo $row['NOMBRE_PA'];?>
							</td>
							
							<tr>
 						<td height="50"> R.U.T Paciente  </td>
							<td>
							   <?php echo $row['RUT_PA'];?>
							</td>
							 
							
						 
					 
							
							
							
							
							
							 
						</tr>

					 
					 
					 
					 
				</tbody>
				 
			</table>	

	  
 
 
 <h1><a>Hora Registrada</a></h1>

	 
	  <table id="t05" border=1 width="20%">		
			<thead>			 
				<tbody>				 
					 		
		  
							<tr>
							<td> Horario   </td>
                            <td id="td01">
							   <?php echo $row[' '];?>
							</td>
							
							 
							
						 
					 
							
							
							
							
							
							 
						</tr>

					 
					 
					 
					 
				</tbody>
				 
			</table>	

 
 
 
 
 
 
 
 
				</tbody>
				 
		 <?php } ?>	 	
  
  </div>	
			
			
			
 		 
			
			
			

  
	</html>	
	

	
	
	
	
	
	
	 