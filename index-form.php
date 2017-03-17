<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UMG</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/red.css" rel="stylesheet">
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Fiestas San Marcos 2017 </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">9no. Semestre - UMG</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="principal.php">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">

				<li class="active"><a href="principal.php">Inicio</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<?php
    if (!isset($_SESSION['valido']))
        $_SESSION['valido']=0;

    if($_SESSION['valido']==0){
    echo"   <section id='intro' class='intro'>";
    echo"        <div class='intro-content'>";
                echo "<div class='container'>";
                echo"<div align='center'>    " ;       
                echo"<img class='img-responsive' src='img/restringido.jpg' alt='restringido'>";
                echo"<a class='btn btn-warning' href='index.php'>Inicio</a>";
                echo"</div>                ";
                echo"</div>      ";
            echo"</div>";
        echo"</div>     "; 
    echo"</section>";


    }
else
    {
?>
	
	
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">	</div>
				<div class="col-lg-4">



					<div id="grid-container" class="cbp-l-grid-team">
				                <ul>
				                    <li class="cbp-item psychiatrist">
				                       <a class="cbp-caption">
				                            <div class="cbp-caption-defaultWrap">
				                                
				                                

				                                <?php 
				                                $candidata=$_GET['ref'];
				                               $con = mysqli_connect('localhost', 'comision_admin', '$Sanmarcos2017', 'comision_belleza2017');

												$query = "select idcandidatas,nombrec,municipio from candidatas where idcandidatas=".$candidata.";";

												$record = mysqli_query($con,$query);

												//$dato = mysqli_fetch_array($record);

				                                if (!empty($_GET['ref'])) {

												  if ($_GET['ref'] == $candidata)
												  {
												  echo "<img src='img/team/".$candidata.".JPG' alt='230' width='370'>";
												  }

												  }
												 ?>
				                            </div>
				                        </a>

				                        <?php 
				                        $candidata=$_GET['ref'];
				                               $con = mysqli_connect('localhost', 'comision_admin', '$Sanmarcos2017', 'comision_belleza2017');

												$query = "select idcandidatas,nombrec,municipio from candidatas where idcandidatas=".$candidata.";";

												$record = mysqli_query($con,$query);
												$dato = mysqli_fetch_array($record);
												if (!empty($_GET['ref'])) {

												  if ($_GET['ref'] == $candidata)
												  {
												   echo"<a  class='cbp-l-grid-team-name'>".$dato['nombrec']."</a>";
				                        		   echo"<div  class='cbp-l-grid-team-position ' >".$dato['municipio']."</div>";
												  }

												  }


				                         ?>
				                        
				                    </li>
				                </ul>
				            </div>



					</div>
					<div class="col-lg-4">
						<div class="form-wrapper">


						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Aspectos a Calificar</h3>
									</div>
									<div class="panel-body">									   

    					                <form action="" method="post" role="form" class="contactForm lead">    									
    										<div>
    										<?php 
    										$candidata=$_GET['ref'];
                                            $user=$_GET['id'];

    											echo"<a  href='tipico.php?id=".$user."&ref=" .$candidata."' class='btn btn-skin btn-block btn-lg'>Traje Típico</a>";
    											
    											echo"<a  href='coreografia.php?id=".$user."&ref=" .$candidata."' class='btn btn-skin btn-block btn-lg'>Coreografia</a>";
    											
    											echo"<a  href='gala.php?id=".$user."&ref=" .$candidata."' class='btn btn-skin btn-block btn-lg'>Traje de Gala</a>";

    											echo"<a  href='mensaje.php?id=".$user."&ref=" .$candidata."' class='btn btn-skin btn-block btn-lg'>Mensaje	</a>";


    											 ?>

    										</div>    									
    										    									
    									</form>
                							<?php 
                                            $user=$_GET['id'];
											echo "<a  href='principal.php?id=".$user."'class='btn btn-skinC  btn-lg'>Regresar</a> "; ?>
								</div>
							</div>				
						
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
		

		<footer>
	
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
	
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Siguenos</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
	
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright - 9no. Semestre - UMG.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Pasar a otra pagina</a> 
                        </div>
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
    <?php
}
?>
</body>

</html>
