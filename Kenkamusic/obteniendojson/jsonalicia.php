<?php
//Url donde esta nuestro JSON
$req = 'https://api.deezer.com/artist/5211298';
//Iniciamos cURL junto con la URL
$cVimeo = curl_init($req);

//Agregamos opciones necesarias para leer
curl_setopt($cVimeo,CURLOPT_RETURNTRANSFER, TRUE);

// Capturamos la URL
$gVimeo = curl_exec($cVimeo);

//Descodificamos para leer
$getVimeo = json_decode($gVimeo,true);

//obtenemos el enlace de la foto
$foto = $getVimeo['picture_small'];

//Asociamos los campos del JSON a variables
$id = $getVimeo['id'];
$name = $getVimeo['name'];
$enlace = $getVimeo['link'];
?>
<?php
//Url donde esta nuestro JSON
$req = 'https://api.deezer.com/album/9804938';
//Iniciamos cURL junto con la URL
$cVimeo = curl_init($req);

//Agregamos opciones necesarias para leer
curl_setopt($cVimeo,CURLOPT_RETURNTRANSFER, TRUE);

// Capturamos la URL
$gVimeo = curl_exec($cVimeo);

//Descodificamos para leer
$getVimeo = json_decode($gVimeo,true);

//obtenemos el enlace de la foto
$fotoalbum = $getVimeo['cover'];

//Asociamos los campos del JSON a variables
$idalbum = $getVimeo['title'];
$enlacealbum = $getVimeo['link'];
?>