<?php
/*
$dbServername = "localhost";
$dbUsername = "root";
$debPassword = "";
$dbName = "loginsystem";

$dbServername = "sql312.eshost.com.ar";
$dbUsername = "eshos_21024758";
$debPassword = "ferrary321";
$dbName = "eshos_21024758_login";



$conn = mysqli_connect($dbServername,$dbUsername,$debPassword,$dbName) or die('error de conexion: ' . mysql_error());


$conn= mysqli_connect("sql312.eshost.com.ar","eshos_21024758","clave","eshos_21024758_login")  or die('error de conexion: ' . mysql_error());
*/

 $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('ingsoft') or die("cannot select DB"); 