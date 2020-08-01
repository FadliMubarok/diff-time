<?php 

$con = mysqli_connect('localhost', 'root', '', 'db_csr');
 
if(mysqli_connect_errno()) {
	echo "Tidak Dapat Koneksi Ke DB" ;
}
?>