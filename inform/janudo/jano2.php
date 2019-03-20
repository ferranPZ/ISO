<?php
	echo "hola";


$RUT_EMP=$_POST['rut'];
echo $RUT_EMP;
	

    $con=mysql_connect('localhost','C5','FSVjBG') or die(mysql_error());  
    mysql_select_db('C5') or die("No puede seleccionar la BDD");  
  
    $query=mysql_query("SELECT * FROM EMPLEADOS WHERE RUT_EMP='".$RUT_EMP."'");  
    $numrows=mysql_num_rows($query);  
    echo $numrows;

 ECHO "ASKJDSKJ";
 echo $RUT_EMP;
        if(!$numrows==0) {  



	$sql="UPDATE EMPLEADOS
	SET TURNO_EMP='manana'
	WHERE RUT_EMP='$RUT_EMP'";

	$updat=mysql_query($sql);  




	header("location: cambiocorrecto.html");

}

?>