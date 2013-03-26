<?php
// mulai sesion
session_start();

// kokeksinya dibuka, di kiau dulu file koneksinya
include "include/koneksi.php";

// maambil variablel post nang dikirim
$username = $_POST[username];
$password = $_POST[password];

// limbah tu hanyar kita kiau data kasan maambil tabel admin
// imbah dapat hanyar dipasakan username lawan passwordnya

$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$query=mysql_query($sql) or die(mysql_error());
$data=mysql_fetch_array($query);

echo $data['nama'];
// bila inputannya kada kusung, hanyar kita gulak nilai sesionnya
if($data['nama']!=""){
	$_SESSION['id_admin']=$data['id_admin'];
	$_SESSION['nama']=$data['nama'];

	// hanyar ditampilakan listnya
	header("location:tampil.php");
}else{
	// bila kusung kadada paswordnya babulik pulang ka lugin
	// lawan kirimkan variable pesan jua
	header("location:login.php?pesan=Maaf, username dan password kada pas");
}

mysql_errno();
?>