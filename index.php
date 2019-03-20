<?php
	include_once 'header.php';
?>


<section class="main-container">
	<div class="main-wrapper"> 
		<h2>Bienvenido!</h2>

		<?php

		if(isset($_SESSION['e_rut'])){

			$nombre = $_SESSION['e_nombre'];
			echo 'Hola '.$nombre. '!';
			echo "<br>";
			echo '<a href="inform/index.php">&#8250;Ingrese Aqui</a>';


		}

		?>
	</div>
</section>

<?php

	include_once 'footer.php';
?>

