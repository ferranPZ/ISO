<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper"> 
		<h2>Crear cuenta</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">

			<input type="text" name="RUT_EMP" placeholder="rut" id="rutContacto" required>
			<input type="password" name="CLAVE" placeholder="clave" required>
			<input type="text" name="NOMBRE" placeholder="nombre" required>
			<input type="text" name="APELLIDOP" placeholder="apellido paterno" required>
			<input type="text" name="APELLIDOM" placeholder="apellido materno" required>
			<input type="text" name="CARGO_EMP" placeholder="cargo" required>
			<input type="text" name="SALARIO_EMP" placeholder="salario" required>
			<input type="text" name="TELEFONO_EMP" placeholder="telefono" required>
			<input type="text" name="EMAIL_EMP" placeholder="email" required>
			<input type="text" name="DIRECCION_EMP" placeholder="direccion" required>

			<button type="submit" name="submit">Registrar</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
