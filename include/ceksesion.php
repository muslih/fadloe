<?php
	session_start();
	if($_SESSION['id_admin']=="" and $_SESSION['nama']==""){
		header("location:login.php?pesan=Maaf, Anda Belum Login");	
	}
?>