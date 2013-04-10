<?php include "include/koneksi.php";
  $no=1;
  $id = 4130000419;
  //$id=4130000535;
  // $id=$_GET['id_kelas']; 
 ?>

<?php 

$pilihan = mysql_query("select * from Data_Pilihan where nomor_pendaftaran = '$id'");


while ($datapilihan = mysql_fetch_array($pilihan)) {
	echo "urutan ke ".$datapilihan[urutan_program_studi]."dengan pilihan prodi :<strong>".$datapilihan[program_studi]."</strong><br/>";
}
?>
<br/>
<?php 
mysql_fetch_array($pilihan);
$nilai = mysql_query("select sum(nilai), kode_mata_pelajaran from Data_Nilai where kode_mata_pelajaran in('KIM','TIK','KBA','SJR')");


// while ($datanilai= mysql_fetch_array($nilai)) {
	$datanilai= mysql_fetch_array($nilai);

	// echo array_sum($datanilai); 
	// echo "<p>".$datanilai['nilai']."</p>";
	// echo "<p>".$datanilai['sum(nilai)']."</p>";
	echo "<p>Total Mata Pelajaran".$datanilai[kode_mata_pelajaran]."adalah = ".$datanilai['sum(nilai)'];

	// echo "<p>".sum('$datanilai[nilai]')."</p>"; 

	// }
	// echo "<p>".$datanilai[kode_mata_pelajaran]."</p>";
	// echo "<p>".$datanilai[nilai]."</p>";
	// echo "<p>".$datanilai[kkm]."</p>";

?>