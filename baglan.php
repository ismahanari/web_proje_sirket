<?php
//$conn = mysqli_connect("localhost","root","","sirket");
$conn = mysqli_connect("localhost","121620201021","8F3w9eMkg3S","db_121620201021");
 /* Bağlantı Kontrolü */
 if ( mysqli_connect_errno() ) {
	 echo "Bağlantı Başarısız. Hata :".mysqli_connect_error();
	 die();
 } else {
	// echo "Bağlantı Başarılı";
 }
 mysqli_query($conn,"SET NAMES 'utf8'");
 //mysqli_close($conn);
 ?>