<?php
  include "include/ceksesion.php";
 
?>


<h2>Data Sekolah</h2>
<table border="1">
   <tr>
    <td>No</td>
    <td>NPSN</td>
    <td>Nama Sekolah</td>
    <td>Jenis Sekolah</td>
    <td>Kabuparen</td>
    <td>aksi</td>
  </tr>
  <?php
  include 'include/ClassPaging.php';
  include "include/koneksi.php";

  $limit = 5; 

  //buat query
  $query = new CnnNav($limit,'nama_sekolah','*','npsn');

  //jalankan querynya
  $result = $query ->getResult();
  //perintah diatas sama dengan perintah mysql_query

  $nomor = ($limit * $_GET['offset'])+1; 
  while($data = mysql_fetch_array($result)){

  //lama 
  //   $no=1;
  //   $sql = mysql_query("select * from data_sekolah");
  // while ($data = mysql_fetch_array($sql)) {

?>


  <tr>
    <td>
      <?php echo $nomor ; ?>
    </td>
    <td>
      <?php echo $data[npsn]; ?>
    </td>
    <td>
      <?php echo $data[nama_sekolah]; ?>
    </td>
    <td>
      <?php echo $data[jenis_sekolah]; ?>
    </td>
    <td>
      <?php echo $data[nama_kabupaten]; ?>
    </td>
    <td>aksi</td>
  </tr>

  <?php 
    $nomor++;
  }
  ?>
</table>


  <p height="25" colspan="6" align="center" valign="middle">
    <?php 
      $query->printNav(); //Cetak paging
    ?>
  </p>


<a href="include/logout.php">Logout</a>