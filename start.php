<?php  
session_start();

if ($_SESSION==0){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';
}

$id_Usuario = $_SESSION['userid'];
?>