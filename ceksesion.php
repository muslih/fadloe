<?php
	// memulai sesi
	session_start();

	// amunnya kosong, langsungai di alihakan ka login
	if ($_SESSION['id_admin']=='' or $_SESSION['nama']=='') {
		header("location:login.php?pesan=Maaf, pian belum login pamanai");
	}
?>