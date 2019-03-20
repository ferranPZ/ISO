<?php

session_start();

if(isset($_POST['submit'])){

	include 'dbh.inc.php';

	$EMAIL_EMP = $_POST['email'];
	$CLAVE = $_POST['clave']; 

	if (empty($EMAIL_EMP) || empty($CLAVE)) {
		header("Location: ../index.php?login=vacio");
		exit();
		
	}else {
		/*
		echo "email :";
		echo $EMAIL_EMP;
*/
	
		 $con=mysql_connect('localhost','root','') or die(mysql_error());  
   		 mysql_select_db('ingsoft') or die("cannot select DB"); 

	  
	    $query=mysql_query("SELECT * FROM empleado WHERE EMAIL_EMP='".$EMAIL_EMP."'");  
	    $numrows=mysql_num_rows($query); 
	    
	    if($numrows==0)
	    	{
	    		
			header("Location: ../index.php?login=UsuarioIncorrecto");
			exit();
		}else{

			

			while($row=mysql_fetch_assoc($query)) {  


			          //funcion que retorna la fila

				
				if ($CLAVE == false) {
					header("Location: ../index.php?login=claveIncorrecta");
					exit();
				}elseif ($CLAVE == true) {
					//log in
					$_SESSION['e_rut'] = $row['RUT_EMP'];
					$_SESSION['e_nombre'] = $row['NOMBRE_EMP'];
					$_SESSION['e_apellidop'] = $row['APELLIDOP'];
					$_SESSION['e_apellidom'] = $row['APELLIDOM'];
					$_SESSION['e_cargo'] = $row['CARGO_EMP'];
					$_SESSION['e_salario'] = $row['SALARIO_EMP'];
					$_SESSION['e_telefono'] = $row['TELEFONO_EMP'];
					$_SESSION['e_email'] = $row['EMAIL_EMP'];
					$_SESSION['e_direccion'] = $row['DIRECCION_EMP'];
					header("Location: ../index.php?login=correcto");
					exit();

				}
			}
		}
		
	}

} else{
	header("locaion: ../index.php?login=error");
	exit();

}