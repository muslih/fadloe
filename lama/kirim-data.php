<?php
//panggil file config.php untuk menghubung ke server
include('koneksi.php');
 
//tangkap data dari form
$namastu = $_POST['namastu'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$siup = $_POST['siup'];
$tdp = $_POST['tdp'];
$sktu = $_POST['sktu'];

//kirim email
$formcontent=" Nama Studio : $namastu \n Alamat : $alamat \n No. Telep: $telp \n No.Siup: $siup \n No.TDP : $tdp \n No.SKTU : $sktu ";
$recipient = "muslihzarth@gmail.com";
$subject = "Kontak Form";
$mailheader = "From: UNLAM \r\n";
mail($recipient, $subject, $formcontent, $mailheader); /* or die("Error!"); */
 
//simpan data ke database
$query = mysql_query("insert into datastudio values('', '$namastu', '$alamat', '$telp', '$siup', '$tdp', '$sktu')") or die(mysql_error());


 
 
if ($query) {
    header('location:index.php?message=success');
}
?>
