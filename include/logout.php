<?php
	session_start();

	// perintah untuk menghapus session dengan variabel tertentu
	session_unregister('nama');
	session_unregister('username');
	session_unregister('password');

 // kembali ke halaman form login
 header("location:../login.php?pesan=Anda telah keluar sistem");
?>