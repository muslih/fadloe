<?php
	//Memulai sesi
	session_start();
	
	//Membuka koneksi dnegan memanggil file koneksi
	include "koneksi.php";
	
	//Menangkap variabel-variabel post yang dikirim
	$usename=$_POST['username'];
	$password=$_POST['password'];
	
	//Perintah SQL untuk mengambil data dari tabel admin dnegan mencocokan username 
	// dan password yang dienkripsi
	$sql="select nama, username, password from admin where username='$usename' and password=PASSWORD('$password')";
	$query=mysql_query($sql)or die(mysql_error());
	$data=mysql_fetch_array($query);
	
	//Apabila data tidak kosong maka set nilai-nilai sesi
	if($data['nama']!=""){
		$_SESSION['nama']=$data['nama'];
		$_SESSION['username']=$data['username'];
		$_SESSION['password']=$data['password'];
		
		//Kemudian ditampilkan file tampil siswa
		header("location:../tampil.php");
	}else{
		//Jika data kosong maka ditampilkan kembali login.php dengna mengirimkan variabel pesan
		header("location:../login.php?pesan=Maaf, kombinasi username dan password tidak cocok");
	}
?>