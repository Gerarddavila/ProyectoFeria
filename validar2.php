<?php
session_start();

if (!isset($_SESSION['valido']))
	$_SESSION['valido']=0;

include_once "conexion.php";
//$Conexion = mysql_connect('localhost','root','');
//mysql_select_db('UserBD', $Conexion);

$vUsuario = $_POST['usuario'];   
$vPassword = $_POST['password'];
 
$result = mysql_query("SELECT * FROM usuario WHERE nombreusuario= '$vUsuario'");

if($row = mysql_fetch_array($result))
{     
 if($row["contrasenia"] == $vPassword)
 {
header('Location: principal.php');  
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario;
 
 }
 else
 {
echo "Contraseña incorrecta"  ;   
echo "USUARIO INVALIDO";
		$_SESSION['valido']=0;
 }
}
else
{
 echo "Usuario Incorrecto";
 echo "USUARIO INVALIDO";
		$_SESSION['valido']=0;
         
}


?>