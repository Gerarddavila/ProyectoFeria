<?php
//$vUsuario = $_POST['usuario'];
//$vPassword = $_POST['password'];
  //$string = htmlentities($string, ENT_QUOTES, 'UTF-8');
//header("Content-Type: text/html; charset=UTF-8");

//define('DB_SERVER', 'localhost');
//define('DB_NAME', 'mydb');
//define('DB_USER', 'root');
//define('DB_PASS', '');

//$con = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
//mysql_select_db(DB_NAME, $con);

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
        header("Location:principal.html");

      }
        else
        {
          echo '<div class = "error"> Su Usuario o Contraseña es incorrecto, Intente Nuevamente... </div>';
          echo '<a href = "index.html"> Inicio</a>';
        }
    }
  }
?>