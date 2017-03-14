<?php
session_start();
		if (!isset($_SESSION['valido']))
		$_SESSION['valido']=0;

$con = mysqli_connect('50.3.72.100', 'comision_admin', '$Sanmarcos2017', 'comision_bellezadepartamental');

$vUsuario = $_POST['usuario'];   
$vPassword = $_POST['password'];

$result = mysqli_query($con,"SELECT * FROM Usuario WHERE nombreUsuario='$vUsuario' and contrasenia='$vPassword'");

if($row = mysqli_fetch_array($result))
{     
 if($row["contrasenia"] == $vPassword)
 {
  echo "USUARIO VALIDO";
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario;
  header("Location: principal.php");  
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