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
if(isset($_GET['id_user'])){
//"SELECT * FROM empleado  where rfc=".$_GET['rfc'];
 $sql = "SELECT * FROM cantantes  where id_user=".$_GET['id_user'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information  descripcion, rfc, rfc2
if(isset($_POST['btn-update'])){
 $id_user	= mysqli_real_escape_string($conn,(strip_tags($_POST['id_user'], ENT_QUOTES)));	
 $artista	= mysqli_real_escape_string($conn,(strip_tags($_POST['artista'], ENT_QUOTES)));
 $cancion	= mysqli_real_escape_string($conn,(strip_tags($_POST['cancion'], ENT_QUOTES)));
 $genero	= mysqli_real_escape_string($conn,(strip_tags($_POST['genero'], ENT_QUOTES)));
 $update = mysqli_query($conn, "UPDATE cantantes SET artista='$artista', cancion='$cancion', genero='$genero' WHERE id_user = '$id_user'") or die(mysqli_error());
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: canciones.php");
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
                         <form name="form1" id="id_user" class="form-horizontal row-fluid" method="POST" >
						  <input type=hidden name="id_user" value="<?php echo $myrow["id_user"] ?>">

										<div class="control-group">
										<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
											<input type="text" name="id_user" placeholder="id_user" class="form-control span8 tip" value="<?php echo $row["id_user"]; ?>" readonly="readonly">
											</div>
											</div>
											
										<div class="control-group">
											<label class="control-label" for="basicinput">ARTISTA</label>
											<div class="controls">
											<input type="text" name="artista" placeholder="artista" class="form-control span8 tip" value="<?php echo $row["artista"]; ?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">CANCION</label>
											<div class="controls">
												<input type="text" name="cancion" placeholder="cancion" class="form-control span8 tip" value="<?php echo $row['cancion']; ?>">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">GENERO</label>
											<div class="controls">
											<input type="text" name="genero" placeholder="genero" class="form-control span8 tip" value="<?php echo $row['genero']; ?>">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
											<input type="submit" name="btn-update" id="btn-update" onClick="update()" class="btn btn-sm btn-primary"/>
											<!-- Alert for Updating -->

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
        </div>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>