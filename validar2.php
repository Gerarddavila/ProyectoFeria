<?php
session_start();

if (!isset($_SESSION['valido']))
	$_SESSION['valido']=0;

include_once "conexion.php";
//$Conexion = mysql_connect('localhost','root','');
//mysql_select_db('UserBD', $Conexion);

$vUsuario = $_POST['usuario'];   
$vPassword = $_POST['password'];
$vAdmon = 1;
$vJurado = 2;
$vJuez = 3;
 
$result = mysql_query("SELECT * FROM usuario WHERE nombreusuario= '$vUsuario'");

if($row = mysql_fetch_array($result))
{     
 if($row["contrasenia"] == $vPassword && $row["admon"] == $vAdmon)
 {
$vid=$row['idusuario'];
header('Location: principal.php?id='.$vid.'');  
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario; 
 }
 else if($row["contrasenia"] == $vPassword && $row["admon"] == $vJurado)
 {
$vid=$row['idusuario'];
header('Location: principal_jurado.php?id='.$vid.'');  
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario; 
 }
else if($row["contrasenia"] == $vPassword && $vJuez == $vJuez)
 {
$vid=$row['idusuario'];
header('Location: principal_reportes.php?id='.$vid.'');  
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario; 
 }
 else
 {
echo "Contraseña incorrecta "  ;   
echo "";
		$_SESSION['valido']=0;
 }
}
else
{
 echo "Usuario Incorrecto ";
 echo "";
		$_SESSION['valido']=0;
         
}
?>