<?php
  include "include/ceksesion.php"
?>


<h2>Data Sekolah</h2>
<table border="1">
  <?php
  include "include/koneksi.php";
  $no=1;
  $sql = mysql_query("select * from data_sekolah");
while ($data = mysql_fetch_array($sql)) {

?>
  <tr>
    <td>No</td>
    <td>:</td>
    <td>
      <?php echo $no ; ?>
    </td>
  </tr>
  <tr>
    <td>NPSN</td>
    <td>:</td>
    <td>
      <?php echo $data[npsn]; ?>
    </td>
  </tr>
  <tr>
    <td>Nama Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data[nama_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Jenis Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data[jenis_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Kode Kabupaten</td>
    <td>:</td>
    <td>
       <?php echo $data[kode_kabupaten]; ?>
    </td>
  </tr>
  <tr>
    <td>Nama Kabupaten</td>
    <td>:</td>
    <td>
      <?php echo $data[nama_kabupaten]; ?>
    </td>
  </tr>
  <tr>
    <td>Kode Provinsi</td>
    <td>:</td>
    <td>
      <?php echo $data[kode_provinsi]; ?>
    </td>
  </tr>
  <tr>
    <td>Nama Provinsi</td>
    <td>:</td>
    <td>
      <?php echo $data[nama_provinsi]; ?>
    </td>
  </tr>
  <tr>
    <td>Akreditasi Sekolah</td>
    <td>:</td>
    <td>
      <?php echo $data[akreditasi_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Kepemilikan</td>
    <td>:</td>
    <td>
      <?php echo $data[kepemilikan]; ?>
    </td>
  </tr>
  <?php 
    $no++;
  }
  ?>
</table>

<h2>Data Jurusan</h2>
<table border="1">
  <?php
$n=1;
$sql2 = mysql_query("select * from data_jurusan");
while ($data2 = mysql_fetch_array($sql2)) {
?>
  <tr>
    <td>ID Jurusan</td>
    <td>:</td>
    <td><?php echo $data2[id_jurusan]; ?></td>
  </tr>
  <tr>
    <td>NPSN</td>
    <td>:</td>
    <td>
      <?php echo $data2[npsn_sekolah]; ?>
    </td>
  </tr>
  <tr>
    <td>Masa Studi</td>
    <td>:</td>
    <td>
      <?php echo $data2[masa_studi_dalam_tahun]; ?>
    </td>
  </tr>
  <?php 
   $n++;
    }
   ?>
</table>

<a href="include/logout.php">Logout</a>