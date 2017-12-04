<?php include "conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>KenkaMusic | Home ::</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="js/jquery-2.1.4.js"></script>


</head>

<!-- /w3layouts-agile -->
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
 
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">KENKA<span>M</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html">K </a>
			</div>
 	 <!-- /w3l-agile -->
			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.html"><i class="lnr lnr-home"></i><span>Home</span></a></li>
						<li><a href="radio.html"><i class="camera"></i> <span>Radio</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/app.png" width="20" height="20"><span>Apps</span></a></li>
						<li><a href="artistas.php"><i class="lnr lnr-users"></i> <span>Artistas</span></a></li> 
						<li><a href="canciones.php"><i class="lnr lnr-music-note"></i> <span>Canciones de Moda</span></a></li>						
						<li class="menu-list"><a href="browse.html"><i class="lnr lnr-indent-increase"></i> <span>Api Json</span></a>  
							<ul class="sub-menu-list">
								<li><a href="browse.html">Tracklist-Deezer</a> </li>
								<li><a href="404.html">Artistas-Deezer</a> </li>
							</ul>
						</li>
						<li><a href="blog.html"><i class="lnr lnr-book"></i><span>Blog</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>Mi Cuenta</span></a> 
							<ul class="sub-menu-list">
								<li><a href="radio.html">All Songs</a></li>
							</ul>
						</li>
						<li class="menu-list"><a href="contact.html"><i class="fa fa-thumb-tack"></i><span>Contacto</span></a>
							<ul class="sub-menu-list">
								<li><a href="contact.html">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		 	 <!-- /w3layouts-agile -->
					<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						<div class="col-md-5 app-left mpl">
							<h3>Mosaic mobile app on your smartphone!</h3>
							<p>Download and Avail Special Songs Videos and Audios.</p>
							<div class="app-devices">
								<h5>Gets the app from</h5>
								<a href="#"><img src="images/1.png" alt=""></a>
								<a href="#"><img src="images/2.png" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-7 app-image">
							<img src="images/apps.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
 	<!-- /w3l-agile -->
		<!-- signup -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="sign-right">
										<form action="#" method="post">

											<h3>Crear tu Cuenta </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>Al crear tu cuenta aceptas todos los <span>terminos y condiciones </span> de <span>VaquiMusic</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
 	 <!-- /w3l-agile -->
		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><img src="images/61778-200.png" width="20" height="20"></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form method=GET action="https://api.deezer.com/search?q=" target="_blank">
										<input class="sb-search-input" placeholder="Search" type="text" id="s" name="q" id="s">
										<input class="sb-search-submit" type="submit" id="x" name=btnG value="Buscar">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/tusisabes.ogg" type="audio/ogg"></source>
																<source src="media/tusisabes.mp3" type="audio/mpeg"></source>
																<source src="media/dna.ogg" type="audio/ogg"></source>
																<source src="media/dna.mp3" type="audio/mpeg"></source></audio>
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->


												<!--//-->
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"> <a href="#" id="loginButton"><span>Login </span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><img src="images/iconoupdate.png" width="40" height="30"></a>
														<div id="loginBox">  
												<form action="#" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
														 </form>
													</div>
												</div>

											</div>
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
	 <!-- /agileits -->
					<!-- //header-ends -->
					
						<div id="page-wrapper">
						<div class="inner-content">
            <!-- /navbar-inner -->
			
        </div><br />
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
			
         
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon-user"></i> Encuentra mas Informacion En Deezer...</h3> 
						 
                        </div>
						<?php include "obteniendojson/jsonnatalia.php"; ?>
						<?php include "obteniendojson/jsonjorge.php"; ?>
						<?php include "obteniendojson/jsondaniela.php"; ?>
                       <div class="panel-body">
							<div class="pull-right">
								<a href="https://www.deezer.com/" target="_blank" class="btn btn-sm btn-primary">Ir a Deezer</a>
							</div><br>
							<hr>
                                    <table id="lookup" class="table table-bordered table-hover">  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr>
	  
	                                    <th>ID</th>
                                        <th>ARTISTA</th>
										<th>ENLACE</th>
										<th>TRACKLIST</th>
										<th>FOTO</th>
                                       </tr>
									   <td><?php echo $id ?></td>
                                       <td><?php echo $name ?></td>
                                       <td><?php echo $enlace ?></td>
                                       <td><?php echo $tracklist ?></td>
									   <td><?php echo "<img src=$foto border='0' width='100' height='100'>";  ?></td>
									   <tr>
									   <td><?php echo $id2 ?></td>
                                       <td><?php echo $name2 ?></td>
                                       <td><?php echo $enlace2 ?></td>
                                       <td><?php echo $tracklist2 ?></td>
									   <td><?php echo "<img src=$foto2 border='0' width='100' height='100'>";  ?></td>
									   <tr>
									   <td><?php echo $id3 ?></td>
                                       <td><?php echo $name3 ?></td>
                                       <td><?php echo $enlace3 ?></td>
                                       <td><?php echo $tracklist3 ?></td>
									   <td><?php echo "<img src=$foto3 border='0' width='100' height='100'>";  ?></td>
                                    </table>
                            
                                </div>
                            </div>
                            
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
         <!--/.wrapper--><br />
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script>
        


        <!--footer section start-->
			<footer>
			   <p>&copy 2018 KenkaMusic. All Rights Reserved | Design by <a href="#" target="_blank">Kenia.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>