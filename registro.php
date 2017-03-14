<?php

$vNombres=$_POST['nombre'];
$vDireccion=$_POST['direccion'];
$vEdad=$_POST['edad'];
$vUsuario=$_POST['usuario'];
$vPassword=$_POST['password'];
$vTipo=$_POST['rbutton'];

 $con = mysqli_connect('localhost','comision_admin','$Sanmarcos2017','comision_belleza2017');
mysqli_query($con,$query=" INSERT INTO `comision_belleza2017`.`usuario`
(`nombrec`,
`direccion`,
`edad`,
`nombreusuario`,
`contrasenia`,
`admon`)
VALUES('$vNombres','$vDireccion','$vEdad','$vUsuario','$vPassword','$vTipo')");

/*if (mysqli_query($query)) 
	echo "Datos Insertados";
else
	echo "NO se pudo insertar";
echo $query;

header('location:principal.html');*/


?>

<script language="javascript">window.location="principal.php";</script>

	


//call registrar_usuario
