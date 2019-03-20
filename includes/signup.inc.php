


<?php  


	$RUT_EMP=$_POST['RUT_EMP'];  
	$CLAVE = $_POST['CLAVE']; 
	$NOMBRE_EMP	 =  $_POST['NOMBRE']; 
	$APELLIDOP = $_POST['APELLIDOP']; 
	$APELLIDOM =$_POST['APELLIDOM']; 
	$CARGO_EMP = $_POST['CARGO_EMP']; 
	$SALARIO_EMP =  $_POST['SALARIO_EMP']; 
	$TELEFONO_EMP =  $_POST['TELEFONO_EMP']; 
	$EMAIL_EMP =  $_POST['EMAIL_EMP']; 
	$DIRECCION_EMP =  $_POST['DIRECCION_EMP'];

if(isset($_POST["submit"])){  
if(!empty($_POST['RUT_EMP']) && !empty($_POST['EMAIL_EMP'])) {  

    


 

         $con=mysqli_connect('localhost','root','') or die(mysql_error());  
         mysqli_select_db('ingsoft') or die("cannot select DB"); 


  
    $query=mysql_query("SELECT * FROM empleado WHERE RUT_EMP='".$RUT_EMP."' OR EMAIL_EMP='".$EMAIL_EMP."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  

    	
    $sql="INSERT INTO empleado(RUT_EMP,CLAVE,NOMBRE_EMP,APELLIDOP,APELLIDOM,CARGO_EMP,SALARIO_EMP,TELEFONO_EMP,EMAIL_EMP,DIRECCION_EMP) VALUES('$RUT_EMP','$CLAVE','$NOMBRE_EMP','$APELLIDOP','$APELLIDOM','$CARGO_EMP','$SALARIO_EMP','$TELEFONO_EMP','$EMAIL_EMP','$DIRECCION_EMP')";  
  


    $result=mysql_query($sql);  
        if($result){  
    header("Location: ../signup.php?signup.php?signup=exitoso");
    exit();
    } else {  
    echo "error!";  
    }  
  
    } else {  
    echo "Este empleado ya esta registrado";  
    }  
  
} else {  
    echo "Todos los campos son necesarios!";  
}  
}else{												/*por si intenta entrar por url*/
	header("Location: ../signup.php");
	exit();
}  
?>  