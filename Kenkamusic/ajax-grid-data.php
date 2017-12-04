<?php

 include "conn.php";

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
    0 => 'id_user', 
	1 => 'artista',
	2 => 'cancion',
	3 => 'genero',
	
);

// getting total number records without any search
$sql = "SELECT id_user, artista, cancion, genero";
$sql.=" FROM cantantes";
$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id_user, artista, cancion, genero";
	$sql.=" FROM cantantes";
	$sql.=" WHERE id_user LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR artista LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR cancion LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR genero LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get PO");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get PO"); // again run query with limit
	
} else {	

	$sql = "SELECT id_user, artista, cancion, genero";
	$sql.=" FROM cantantes";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get PO");
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

    $nestedData[] = $row["id_user"];
	$nestedData[] = $row["artista"];
	$nestedData[] = $row["cancion"];
	$nestedData[] = $row["genero"];
    $nestedData[] = '<td><center>
                     <a href="editar.php?id_user='.$row['id_user'].'"  data-toggle="tooltip" title="Editar datos" class="btn btn-sm btn-info"><img src="http://icons.iconarchive.com/icons/designcontest/outline/256/Pencil-icon.png" width="20" height="20"></a>
					 <a href="canciones.php?action=delete&id_user='.$row['id_user'].'"onClick="return confirma();" data-toggle="tooltip" title="Eliminar" class="btn btn-sm btn-danger"><img src="https://findicons.com/files/icons/1580/devine_icons_part_2/128/trash_recyclebin_empty_closed.png" width="20" height="20"></a>
					 
				     </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
