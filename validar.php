<?php

include_once "conexion.php";

function verificar_login($usuario, $password, &$result)
{
  $sql ="SELECT * FROM usuario WHERE nombreusuario = '$usuario' and contrasenia = '$password'";
  $rec =mysql_query($sql);
  $count = 0;
  while ($row =mysql_fetch_object($rec)) {

    $count++;
    $result = $row;

  }
  if ($count == 1)
  {
    return 1;
  }
  else
  {
    return 0;
  }
}

  if (!isset($_SESSION['userid']))
  {
    //if (isset($_POST['ingreso']))
    {
      if (verificar_login($_POST['usuario'],$_POST['password'],$result) == 1)
      {
        $_SESSION['userid'] = $result ->idUsuario;
        header("Location:principal.php");

      }
        else
        {
          echo '<div class = "error"> Su Usuario o Contraseña es incorrecto, Intente Nuevamente... </div>';
          echo '<a href = "index.php"> Inicio</a>';
        }
    }
  }
?>