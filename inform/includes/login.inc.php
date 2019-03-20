<?php

session_start();

if(isset($_POST['submit'])){

	include 'dbh.inc.php';

	$EMAIL_EMP = mysqli_real_escape_string($conn, $_POST['email']);
	$CLAVE = mysqli_real_escape_string($conn, $_POST['clave']); 

	if (empty($EMAIL_EMP) || empty($CLAVE)) {
		header("Location: ../index.php?login=vacio");
		exit();
		
	}else {
		$sql = "SELECT * FROM empleado WHERE EMAIL_EMP='$EMAIL_EMP'";
		$resultado = mysqli_query($conn, $sql);
		$filas = mysqli_num_rows($resultado);

		if ($filas<1) {
			header("Location: ../index.php?login=UsuarioIncorrecto");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($resultado)) {          //funcion que retorna la fila

				//de-hashing a la contraseña
				$hashedclave = password_verify($CLAVE, $row['CLAVE']);
				if ($hashedclave == false) {
					header("Location: ../index.php?login=claveIncorrecta");
					exit();
				}elseif ($hashedclave == true) {
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