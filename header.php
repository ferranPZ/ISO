<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<header>
	
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">&#8250;

Login</a>


</li>
			</ul>
			<div class="nav-login">

				<?php
					if(isset($_SESSION['e_rut'])){
						echo '	<form action="includes/logout.inc.php" method="POST">
								<button type="submit" name="submit">Cerrar Sesion</button>
								</form>


								';
						

						
					}else{

						echo '	
								<form action="includes/login.inc.php" method="POST">
									<input type="text" name="email" placeholder="&#64;
email">
									<input type="password" name="clave" placeholder="&#128273;
clave">
									<button type="submit" name="submit">Iniciar Sesion</button>
								</form>
								<a href="signup.php">Registrar </a>';


					}


				?>
				
				
			</div>
		</div>
	</nav>
</header>