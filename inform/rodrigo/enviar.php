

<?php
   
	echo "hola";


$idsesion=$_POST['idsesion'];

echo $idsesion;




	

    $con=mysql_connect('localhost','root','') or die(mysql_error());   
    mysql_select_db('lol') or die("No puede seleccionar la BDD");  
  
    $query=mysql_query("SELECT * FROM sesion WHERE idsesion='".$idsesion."'");  
    $numrows=mysql_num_rows($query);  
    echo $numrows;

 ECHO "ASKJDSKJ";
 echo $idsesion;

        if(!$numrows==0) {  
ECHO "|||ASKJDSKJ";


	

	$result = mysql_query("SELECT horario FROM sesion WHERE idsesion='123'");
	$row = mysql_fetch_array($result);
	print_r ($row[0]);
	if ($row[0]=='manana'){
		echo "el bananero soy chooo";
	}

	
	if ($row[0]=='manana'){

	$sql="UPDATE sesion
	SET horarios='tarde'
	WHERE idsesion='$idsesion'";

	$updat=mysql_query($sql);  }

	if ($row[0]=='tarde'){

	$sql="UPDATE sesion
	SET horarios='manana'
	WHERE idsesion='$idsesion'";

	$updat=mysql_query($sql);  }


	header("location: cambiocorrecto.html");

}

?>