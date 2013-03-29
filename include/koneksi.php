<?php
	$koneksi=mysql_connect("localhost","root","gulnar");
	if($koneksi){
		mysql_select_db("roby");
	}else{
		echo "Koneksi gagal";	
	}
?>