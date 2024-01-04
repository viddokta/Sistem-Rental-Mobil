<?php
# Konek ke Web Server Lokal
$myHost	= "localhost:8080";
$myUser	= "root";
$myPass	= "";
$myDbs	= "rental_eria";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>