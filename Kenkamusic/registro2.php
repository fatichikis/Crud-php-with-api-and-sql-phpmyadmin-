<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
						<script>
						function confirma(){
							var respuesta=confirm("Realmente deseas Agregar a este artista???");
							if (respuesta==true)
							{
								alert("El artista se ha agregado");
								return false;
						    }
								else
									alert("La operacion ha sido cancelada");
								return false;
							}
						</script>
                            <?php
			if(isset($_POST['Agregar'])){
				$Nombre_Artistico  	= mysqli_real_escape_string($conn,(strip_tags($_POST['Nombre_Artistico'], ENT_QUOTES)));
				$Lugar_Nacimiento 	= mysqli_real_escape_string($conn,(strip_tags($_POST['Lugar_Nacimiento'], ENT_QUOTES)));
				$Edad 	= mysqli_real_escape_string($conn,(strip_tags($_POST['Edad'], ENT_QUOTES)));
		
				$insert = mysqli_query($conn, "INSERT INTO artistas(Nombre_Artistico, Lugar_Nacimiento, Edad)
															VALUES('$Nombre_Artistico', '$Lugar_Nacimiento', '$Edad')") or die(mysqli_error());
						if($insert){
							echo '
							<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente.</div>
							';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';
						}
				
			}
			?>
            
            <blockquote>
            Agregar Artista
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro2.php" method="POST" >
										<div class="control-group">
											<label class="control-label" for="Nombre_Artistico">NOMBRE DEL ARTISTA</label>
											<div class="controls">
												<input type="text" name="Nombre_Artistico" id="Nombre_Artistico" placeholder="Nombre del artista" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="Lugar_Nacimiento">LUGAR DE NACIMIENTO</label>
											<div class="controls">
												<input type="text" name="Lugar_Nacimiento" id="Lugar_Nacimiento" placeholder="Lugar de Nacimiento" class="form-control span8 tip" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="Edad">EDAD</label>
											<div class="controls">
												<input type="text" name="Edad" id="Edad" placeholder="Edad" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button  type="submit"  name="Agregar" id="Agregar" input onClick="confirma();" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="artistas.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
        <!--/.wrapper--><br />

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
