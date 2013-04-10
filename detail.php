<?php
	// Panggil koneksi database
    include "./include/koneksi.php";
    include "./variable/variable.php";
    
    
    
    switch($_GET[aksi]){
      default:
     $id=$_GET[no];
     $query= "Select * from mhs where No='$id'";
     $hasil=mysql_query($query);

?>

<h1>Data Mahasiswa</h1>
<?php while ($row = mysql_fetch_array($hasil)){	?>
<div class="baris">
	<!-- tombol simpan san reset -->
	<button type="submit" onclick="window.location.href='?mod=detail&aksi=edit&no=<?php echo $row["No"]; ?>';">Edit</button>
	<button type="reset" onclick="window.location.href='?mod=hapus&modul=detail&no=<?php echo $row["No"]; ?>';">Hapus</button>
	<button type="reset" onclick="window.location.href='?mod=cetak&no=<?php echo $row["No"]; ?>';">Cetak Kartu Ujian</button>
</div>





<table>
	<tr>
		<!-- nomor pendaftaran -->
		<td>No Pendaftaran</td>
		<td>:</td>
		<td>
        <?php echo $row["no_ujian"]; ?>
		</td>
	</tr>
	<tr>
		<!-- nama calon mahasiswa -->
		<td>
   <label for="nama">Nama</label>
		</td>
		<td>:</td>
		<td><?php echo $row["nama"]; ?></td>
	</tr>
	<tr>
		<!-- pilihan prodi pertama -->
		<td>
			<label for="prodi1">Pilihan Prodi 1</label>
		</td>
		<td>:</td>
		<td>
            <?php echo jurusan($row["jur_satu"]); ?>
		</td>
	</tr>
		<!-- pilihan prodi kedua -->
		<tr>
		<td>
			<label  for="prodi2">Pilihan Prodi 2</label>
		</td>
		<td>:</td>
		<td>
            <?php echo jurusan($row["jur_dua"]); ?>
		</td>
	</tr>
	<tr>
		<!-- Tempat Lahir -->
		<td>Tempat Lahir</td>
		<td>:</td>
		<td>
			<?php echo $row["tmpt_lahir"]; ?>
		</td>
	</tr>
	<tr>
		<!-- Tanggal Lahir -->
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td>
            <?php echo $row["tgl_lahir"]; ?>
		</td>
	</tr>
	<tr>
		<!-- Telpon -->
		<td>Telepon</td>
		<td>:</td>
		<td>
			<?php echo $row["telpon"]; ?>
		</td>
	</tr>
	<tr>
		<!-- Asal Sekolah -->
		<td>Asal Sekolah</td>
		<td>:</td>
		<td>
			<?php echo $row["asal_skol"]; ?>
		</td>
	</tr>
	<tr>
		<!-- Alamat -->
		<td>Alamat</td>
		<td>:</td>
		<td>
			<?php echo $row["alamat"]; ?>
		</td>
	</tr>


</table>
<?php
		};
		break;

     case "edit":
     $id=$_GET[no];
     $query= "Select * from mhs where No='$id'";
     $hasil=mysql_query($query);

?>

<h1>Edit Data Mahasiswa</h1>
<?php while ($row = mysql_fetch_array($hasil)){	?>
<form action="index.php?mod=pesan&aksi=edit&no=<?php echo $row["No"]; ?>" method="post" name="input_data">
<table>
	<tr>
		<!-- nomor pendaftaran -->
		<td>No Pendaftaran</td>
		<td>:</td>
		<td>
			<input type="text" value="<?php echo $row["no_ujian"]; ?>" disabled="disabled">
		</td>
	</tr>
	<tr>
		<!-- nama calon mahasiswa -->
		<td>
			<label for="nama">Nama</label>
		</td>
		<td>:</td>
		<td><input id="nama" name="nama" type="text" value="<?php echo $row["nama"]; ?>" required></td>
	</tr>
	<tr>
		<!-- pilihan prodi pertama -->
		<td>
			<label for="prodi1">Pilihan Prodi 1</label>
		</td>
		<td>:</td>
		<td>
			<select name="prodi1" id="prodi1" required>
			  <option value=""> --pilih prodi-- </option>
			  <option value="S1-Keperawatan" <?php $jur1=$row["jur_satu"]; if ($jur1 == 'S1-Keperawatan') echo 'selected' ?>>S1 Keperawatan</option>
			  <option value="D3-Keperawatan" <?php $jur1=$row["jur_satu"]; if ($jur1 == 'D3-Keperawatan') echo 'selected' ?>>D3 Keperawatan</option>
			  <option value="D3-Keperawatan-Internasional" <?php $jur1=$row["jur_satu"]; if ($jur1 == 'D3-Keperawatan-Internasional') echo 'selected' ?>>D3 Kep. Internasional</option>
			  <option value="D3-Kebidanan" <?php $jur1=$row["jur_satu"]; if ($jur1 == 'D3-Kebidanan') echo 'selected' ?>>D3 Kebidanan</option>
			  <option value="D3-Farmasi" <?php $jur1=$row["jur_satu"]; if ($jur1 == 'D3-Farmasi') echo 'selected' ?>>D3 Farmasi</option>
			</select>
		</td>
	</tr>
		<!-- pilihan prodi kedua -->
		<tr>
		<td>
			<label  for="prodi2">Pilihan Prodi 2</label>
		</td>
		<td>:</td>
		<td>
			<select name="prodi2" id="prodi2" required>
			  <option value=""> --pilih prodi-- </option>
			  <option value="S1-Keperawatan" <?php $jur2=$row["jur_dua"]; if ($jur2 == 'S1-Keperawatan') echo 'selected' ?>>S1 Keperawatan</option>
			  <option value="D3-Keperawatan" <?php $jur2=$row["jur_dua"]; if ($jur2 == 'D3-Keperawatan') echo 'selected' ?>>D3 Keperawatan</option>
			  <option value="D3-Keperawatan-Internasional" <?php $jur2=$row["jur_dua"]; if ($jur2 == 'D3-Keperawatan-Internasional') echo 'selected' ?>>D3 Kep. Internasional</option>
			  <option value="D3-Kebidanan" <?php $jur2=$row["jur_dua"]; if ($jur2 == 'D3-Kebidanan') echo 'selected' ?>>D3 Kebidanan</option>
			  <option value="D3-Farmasi" <?php $jur2=$row["jur_dua"]; if ($jur2 == 'D3-Farmasi') echo 'selected' ?>>D3 Farmasi</option>
			</select>
		</td>
	</tr>
	<tr>
		<!-- Tempat Lahir -->
		<td>Tempat Lahir</td>
		<td>:</td>
		<td>
			<input type="text" name="tmpt_lahir" value="<?php echo $row["tmpt_lahir"]; ?>">
		</td>
	</tr>
	<tr>
		<!-- Tanggal Lahir -->
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td>
		<?php $tgl=substr($row["tgl_lahir"],0,2); $bln=substr($row["tgl_lahir"],3,2); $thn=substr($row["tgl_lahir"],6);?>
		<select name="tgl" >
                <? for($i=1;$i<=31;$i++){ ?>
                <option value="<?php echo pad_zero($i,2); ?>" <?php if ($tgl == $i) echo 'selected' ?>><?php echo pad_zero($i,2); ?></option>
                <? } ?>
       </select>
		<select name="bulan" >
                <? for($i=1;$i<=12;$i++){ ?>
                <option value="<?php echo pad_zero($i,2); ?>" <?php if ($bln == $i) echo 'selected' ?>><?php echo pad_zero($i,2); ?></option>
                <? } ?>
       </select>
		<select name="tahun" >
                <? for($i=1945;$i<=date('Y');$i++){ ?>
                <option value="<?php echo $i; ?>" <?php if ($thn == $i) echo 'selected' ?>><?php echo $i; ?></option>
                <? } ?>
       </select>
		</td>
	</tr>
	<tr>
		<!-- Telpon -->
		<td>Telepon</td>
		<td>:</td>
		<td>
			<input type="text" name="telpon" value="<?php echo $row["telpon"]; ?>">
		</td>
	</tr>
	<tr>
		<!-- Asal Sekolah -->
		<td>Asal Sekolah</td>
		<td>:</td>
		<td>
			<input type="text" name="asal_skol" value="<?php echo $row["asal_skol"]; ?>">
		</td>
	</tr>
	<tr>
		<!-- Alamat -->
		<td>Alamat</td>
		<td>:</td>
		<td>
			<textarea cols="40" rows="4"name="alamat"><?php echo $row["alamat"]; ?> </textarea>
		</td>
	</tr>


</table>

<div class="baris">
	<!-- tombol simpan san reset -->
	<button type="submit">Simpan</button>
	<button type="reset">Hapus</button>
</div>
</form>

<?php }; break;}?>

