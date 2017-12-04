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
               <?php
//Database Connection
include 'conn.php';
//Get ID from Database
if(isset($_GET['id_artista'])){
//"SELECT * FROM empleado  where rfc=".$_GET['rfc'];
 $sql = "SELECT * FROM artistas  where id_artista=".$_GET['id_artista'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information  descripcion, rfc, rfc2
if(isset($_POST['btn-update'])){
 $id_artista	= mysqli_real_escape_string($conn,(strip_tags($_POST['id_artista'], ENT_QUOTES)));	
 $Nombre_Artistico 	= mysqli_real_escape_string($conn,(strip_tags($_POST['Nombre_Artistico'], ENT_QUOTES)));
 $Lugar_Nacimiento	= mysqli_real_escape_string($conn,(strip_tags($_POST['Lugar_Nacimiento'], ENT_QUOTES)));
 $Edad	= mysqli_real_escape_string($conn,(strip_tags($_POST['Edad'], ENT_QUOTES)));
 $update = mysqli_query($conn, "UPDATE artistas SET Nombre_Artistico ='$Nombre_Artistico', Lugar_Nacimiento='$Lugar_Nacimiento', Edad='$Edad' WHERE id_artista = '$id_artista'") or die(mysqli_error());
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: artistas.php");
 }
}
?>
<script language="JavaScript" type="text/javascript" >
						function update(){
							var respuesta=confirm("Realmente deseas actualizar esta artista???");
							if (respuesta==true)
							{
								   alert("El Artista ha sido actualizado");
									return false;
						    }
								else
									alert("La operacion ha sido cancelada");
								return false;
							}
						</script>  
            <blockquote>
            Actualizar datos del cliente
            </blockquote>
                         <form name="form1" id="id_artista" class="form-horizontal row-fluid" method="POST" >
						  <input type=hidden name="id_artista" value="<?php echo $myrow["id_artista"] ?>">

										<div class="control-group">
										<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
											<input type="text" name="id_artista" placeholder="id_artista" class="form-control span8 tip" value="<?php echo $row["id_artista"]; ?>" readonly="readonly">
											</div>
											</div>
											
										<div class="control-group">
											<label class="control-label" for="basicinput">ARTISTA</label>
											<div class="controls">
											<input type="text" name="Nombre_Artistico" placeholder="Nombre_Artistico" class="form-control span8 tip" value="<?php echo $row["Nombre_Artistico"]; ?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">LUGAR DE NACIMIENTO</label>
											<div class="controls">
												<input type="text" name="Lugar_Nacimiento" placeholder="Lugar_Nacimiento" class="form-control span8 tip" value="<?php echo $row['Lugar_Nacimiento']; ?>">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">EDAD</label>
											<div class="controls">
											<input type="text" name="Edad" placeholder="Edad" class="form-control span8 tip" value="<?php echo $row['Edad']; ?>">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
											<input type="submit" name="btn-update" id="btn-update" onClick="update()" class="btn btn-sm btn-primary"/>
											<!-- Alert for Updating -->

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
        </div>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>