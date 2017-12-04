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
							var respuesta=confirm("Realmente deseas Agregar a esta cancion???");
							if (respuesta==true)
							{
								alert("La cancion se ha agregado");
								return false;
						    }
								else
									alert("La operacion ha sido cancelada");
								return false;
							}
						</script>
                            <?php
			if(isset($_POST['Agregar'])){
				$artista  	= mysqli_real_escape_string($conn,(strip_tags($_POST['artista'], ENT_QUOTES)));
				$cancion	= mysqli_real_escape_string($conn,(strip_tags($_POST['cancion'], ENT_QUOTES)));
				$genero	= mysqli_real_escape_string($conn,(strip_tags($_POST['genero'], ENT_QUOTES)));
		
				$insert = mysqli_query($conn, "INSERT INTO cantantes(artista, cancion, genero)
															VALUES('$artista', '$cancion', '$genero')") or die(mysqli_error());
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
            Agregar Cancion
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro.php" method="POST" >
										<div class="control-group">
											<label class="control-label" for="artista">ARTISTA QUE LA CANTA</label>
											<div class="controls">
												<input type="text" name="artista" id="artista" placeholder="Nombre del artista" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="cancion">CANCION</label>
											<div class="controls">
												<input type="text" name="cancion" id="cancion" placeholder="cancion" class="form-control span8 tip" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="genero">GENERO DE LA CANCION</label>
											<div class="controls">
												<input type="text" name="genero" id="genero" placeholder="genero" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button  type="submit"  name="Agregar" id="Agregar" input onClick="confirma();" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="canciones.php" class="btn btn-sm btn-danger">Cancelar</a>
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
