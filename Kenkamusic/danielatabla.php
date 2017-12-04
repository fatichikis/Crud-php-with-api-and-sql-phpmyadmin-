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
                       <div class="panel-body">
							<div class="pull-right">
								<a href="https://www.deezer.com/" target="_blank" class="btn btn-sm btn-primary">Ir a Deezer</a>
							</div><br>
							<hr>
							<?php include "obteniendojson/jsondaniela.php"; ?>
                                    <table id="lookup" class="table table-bordered table-hover">  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr><center>
	  
	                                    <th>FOTO</th>
                                        <th>ID</th>
										<th>ARTISTA</th>
										<th>ALBUM</th>
										<th>ENLACE</th>
                                       </tr></center>
									   <td><?php echo "<img src=$fotoalbum border='0' width='100' height='100'>";  ?></td>
									   <td><?php echo $id ?></td>
                                       <td><?php echo $name ?></td>
									   <td><?php echo $idalbum ?></td>
									   <td><center><a target="_blank" href="<?php echo $enlacealbum ?>"  data-toggle="tooltip" title="Ver + Informacion"><img src="https://iconscout.com/ms-icon-310x310.png" width=50" height="50"></a></td> </center>
                                    </center>
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