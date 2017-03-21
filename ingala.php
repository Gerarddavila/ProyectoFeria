<?php 

$vPasarela=$_POST['pasarela'];
$vPostura=$_POST['postura'];
$vElegancia=$_POST['elegancia'];
$vGracia=$_POST['gracia'];
$user=$_GET['id'];
$candidata=$_GET['ref'];
$total=($vGracia+$vElegancia+$vPostura+$vPasarela);


$con = mysqli_connect('localhost', 'comision_admin', '$Sanmarcos2017', 'comision_belleza2017');
	

	$resultado= $con->query("INSERT INTO trajenoche (`pasarela`,`postura`,`elegancia`,`gracia`,`totalnoche`,
`usuario_idusuario`,`candidatas_idcandidatas`) VALUES ('$vPasarela','$vPostura','$vElegancia','$vGracia','$total','$user','$candidata')");	

	if ($resultado) 
		echo "Datos Insertados";
	else
		echo "NO se pudo insertar";


	echo $query;
	
header("location:index-from.php?id='.$user.'&ref='.$candidata.'");	

?>


