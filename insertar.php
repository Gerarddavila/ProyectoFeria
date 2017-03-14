<?php
	if(isset($_post['nombre']) 	&& !empty($_post['nombre'])	&&
	   isset($_post['origen']) 	&& !empty($_post['origen']) &&
	   isset($_post['edad']) 	&& !empty($_post['edad']) 	&&
	   isset($_post['usuario']) 	&& !empty($_post['usuario']) &&
	   isset($_post['pass']) 	&& !empty($_post['pass']) 	&&
	   isset($_post['rbutton']) && !empty($_post['rbutton']))
	  	{	
				

					include_once ("conexion.php");
					mysqli_select_db(DBNAME $con) or die ("problema con la base de datos");
					$consulta = mysqli_query("SELECT * FROM usuario WHERE nombreusuario ='".$_post["usuario"] ."'");


					if(mysqli_num_rows($consulta)>0)
						{		
							echo "el usuario ya existe";
						}

					else
						{
						
							
							
							mysqli_query("INSERT INTO usuario (nombrec,direccion,edad,nombreusuario,contrasenia,admon)
										 VALUES ('$_post[nombre]','$_post[origen]','$_post[edad]','$_post[usuario]','$_post[pass]'
												 ,'$_post[rbutton]')",$con)
										or die ("Problema al ingresar al nuevo usuario Intetenlo Mas tarde");
										echo "datos Guardados con exito";

?>

						<script >
							window.location = "index-nuevoJ.php"; 
						</script>
<?php
						}
				
		}

	else
		echo "Upss completa El formulario Para Poder Registrarte ";


 ?>