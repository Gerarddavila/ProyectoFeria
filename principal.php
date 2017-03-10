<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

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


	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<link id="t-colors" href="color/red.css" rel="stylesheet">
   
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Señorita San Marcos 2017 </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">9no. Semestre - UMG</p>
					</div>
				</div>
			</div>
		</div>

        



        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="principal.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Inicio</a></li>
				<li><a href="#doctor">Candidatas</a></li>
				<li><a href="#facilities">Galería</a></li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo " ".$_SESSION['usuario'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Nuevo Jurado</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.html"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
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
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Señorita San Marcos 2017</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Candidatas</h4>
					</div>
					

					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="img/dummy/img-1.png" class="img-responsive" alt="" />
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Candidatas</h2>
					<p>Elija una Candidata</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item psychiatrist">
                       <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Maria del Rosario </a>
                        <div class="cbp-l-grid-team-position">San Marcos</div>
                    </li>

                    <li class="cbp-item cardiologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/sanpedro.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Daniela Massiel </a>
                        <div class="cbp-l-grid-team-position">San Pedro</div>
                    </li>

                    <li class="cbp-item cardiologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/sanmiguel.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Luz Abigail </a>
                        <div class="cbp-l-grid-team-position">San Miguel</div>
                    </li>
                    <li class="cbp-item neurologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/ocos.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name"> Cinithia Janet</a>
                        <div class="cbp-l-grid-team-position">Ocos </div>
                    </li>

				<li class="cbp-item neurologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/pajapita.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Astrid Adriana</a>
                        <div class="cbp-l-grid-team-position">pajapita </div>
                    </li>

			
					<li class="cbp-item neurologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/malacatan.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name"> Estefany Mariela</a>
                        <div class="cbp-l-grid-team-position">Malacatan</div>
                    </li>
                    <li class="cbp-item neurologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/comitancillo.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Yesli Anabela</a>
                        <div class="cbp-l-grid-team-position">Comitancillo </div>
                    </li>
                    <li class="cbp-item neurologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/catarina.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Yamileth Angelita</a>
                        <div class="cbp-l-grid-team-position">Catarina </div>
                    </li>
                
                <li class="cbp-item neurologist">
                        <a href="index-form.html" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/Ayutla.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">CALIFICAR</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index-form.html" class="cbp-l-grid-team-name">Beverly Yamileth</a>
                        <div class="cbp-l-grid-team-position">Ayutla </div>
                    </li>
                    
==================================================
                </ul>

				
					
            </div>




			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	
		
	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Galería</h2>
					<p>Aquí encontrara un álbum de fotografías de las candidatas</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->
	
	
	<!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        
							    <div class="mark">Biografía : <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Podría ir una pequeña Reseña histórica </p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">					
								<img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Ana Ramos</a>
								<span>San Marcos</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						     <div class="block-text rel zmin">
						        
							    <div class="mark">Biografía : <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Podría ir una pequeña Reseña histórica </p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">
				                <img src="img/testimonials/2.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Jorge Velásquez</a>
								<span>San Antonio Sac.</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							 <div class="block-text rel zmin">
						        
							    <div class="mark">Biografía : <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Podría ir una pequeña Reseña histórica </p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">
								<img src="img/testimonials/3.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Sindy Figueroa</a>
								<span>San Pedro Sac.</span>
							</div>
						</div>
                    </div>
                    
                </div>
				
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
	</section>
	<!-- /Section: testimonial -->
	
	<footer>
	
		<div class="container">
			
					<div class="widget">
						<h5>Siguenos</h5>
						<ul class="company-social">
							<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>	
						</ul>
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
    
<?php
}
?>
</body>

</html>
