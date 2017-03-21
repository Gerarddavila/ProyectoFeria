<?php

$dom=$_POST['dominio'];
$tal=$_POST['talento'];
$pro=$_POST['proyeccion'];
$gra=$_POST['gracia'];
$tot=($dom+$tal+$pro+$gra);
$candidata=$_GET['ref'];
$us=$_GET['id'];

$con = mysqli_connect('localhost', 'comision_admin', '$Sanmarcos2017', 'comision_belleza2017');
$resultado = $con->query ("INSERT INTO coreografia (`dominio`,`talento`,`proyeccion`,`gracia`,`totalcoreo`,`usuario_idusuario`,
													`candidatas_idcandidatas`)
Values 	('$dom','$tal','$pro','$gra','$tot', '$us', '$candidata')");

if ($resultado) 
	echo "<a  href='index-form.php?id=".$us."&ref=".$candidata['ref']."'class='btn btn-skinC  btn-lg'>Regresar</a> "; 
else
	echo "NO se pudo insertar";
echo $query;

header("location:index-form.php?id='.$user.'&ref='$candidata.'");


?>

