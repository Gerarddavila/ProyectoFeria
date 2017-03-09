<?php
	if(isset($_post['nombre']) 	&& !empty($_post['nombre'])	&&
	   isset($_post['origen']) 	&& !empty($_post['origen']) &&
	   isset($_post['edad']) 	&& !empty($_post['edad']) 	&&
	   isset($_post['usuario']) 	&& !empty($_post['usuario']) &&
	   isset($_post['contrasenia']) 	&& !empty($_post['contrasenia']) 	&&
	   isset($_post['rbutton']) && !empty($_post['rbutton'])
	  	{	
				

					include_once ("conexion.php");
					$con = mysql_connect('50.3.72.100', 'comision_admin', '$Sanmarcos2017', 'comision_bellezadepartamental');
					mysql_select_db(DBNAME $con) or die ("problema con la base de datos");
					$consulta = mysql_query("SELECT * FROM usuario WHERE nombreusuario ='".$_post["usuario"] ."'");


					if(mysql_num_rows($consulta)>0)
						{		
							echo "el usuario ya existe";
						}

					else
						{
						
							
							
							mysql_query("INSERT INTO usuario (nombrec,direccion,edad,nombreusuario,contrasenia,admon)
										 VALUES ('$_post[nombre]','$_post[origen]','$_post[edad]','$_post[usuario]','$_post[contrasenia]'
												 ,'$_post[rbutton]')",$con)
										or die ("Problema al ingresar al nuevo usuario Intetenlo Mas tarde");
										echo "datos Guardados con exito";

?>

						<script >
							window.location = "../index-nuevoJ.html"; 
						</script>
<?php
						}
				
		}

	else
		echo "Upss completa El formulario Para Poder Registrarte ";


 ?>