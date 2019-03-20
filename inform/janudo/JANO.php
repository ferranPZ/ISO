<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../styles/layout_2.css">
<head>
	<title></title>
</head>
<body>

</body>
</html>

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
ECHO "|||ASKJDSKJ";


	

	$result = mysql_query("SELECT TURNO_EMP FROM EMPLEADOS WHERE RUT_EMP='123'");
	$row = mysql_fetch_array($result);
	print_r ($row[0]);
	if ($row[0]=='manana'){
		echo "";
	}

	
	if ($row[0]=='manana'){

	$sql="UPDATE EMPLEADOS
	SET TURNO_EMP='tarde'
	WHERE RUT_EMP='$RUT_EMP'";

	$updat=mysql_query($sql);  }

	if ($row[0]=='tarde'){

	$sql="UPDATE EMPLEADOS
	SET TURNO_EMP='manana'
	WHERE RUT_EMP='$RUT_EMP'";

	$updat=mysql_query($sql);  }


	header("location: cambiocorrecto.html");

}

?>