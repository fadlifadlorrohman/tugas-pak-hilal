<?php
	include  "unikoneksi.php";
	$tampilkan = "select * from universitas";
	$query_tampilkan = mysql_query($tampilkan);

	echo
		"<table border=1>
			<tr>
				<td colspan=6 align=middle><a href=>Tambah Data</td>
			</tr>
			<tr>
				<th>Nama Universitas</th>
				<th>Action</th>
			</tr>";
	while ($hasil = mysql_fetch_array ($query_tampilkan))
	{
	echo"<tr>
			<td>$hasil[nama_universitas]</td>
			<td><a href=edit.php>EDIT<a href=hapus.php>HAPUS</a></td>
		</tr>";
	}
?>


<?php
	include "unikoneksi.php";
	$tampilkan = "select * from fakultas";
	$query_tampilkan = mysql_query($tampilkan);

	echo
		"<table border=1>
			<tr>
				<td colspan=7 align=middle><a href=>Tambah</a></td>
			</tr>
			<tr>
				<th>Kode Fakultas</th>
				<th>Nama Fakultas</th>
				<th>Jumlah Jurusan</th>
				<th>Jumlah Dosen</th>
				<th>Jumlah Mahasiswa</th>
				<th colspan=2>Action</th>
			</tr>";
	while($hasil = mysql_fetch_array($query_tampilkan))
	{
	echo"<tr>
			<td>$hasil[kode_fak]</td>
			<td>$hasil[nama_fak]</td>
			<td>$hasil[jum_jurusan]</td>
			<td>$hasil[jum_dos]</td>
			<td>$hasil[jum_mhs]</td>
			<td><a href=>EDIT</a></td>
			<td><a href=>HAPUS</a></td>
		</tr>";
	}echo "</table><br>"
?>

<?php
	include "unikoneksi.php";
	$tampilkan = "select * from mahasiswa";
	$query_tampilkan = mysql_query($tampilkan);

	echo
		"<table border=1>
			<tr>
				<td colspan=4 align=middle><a href=>Tambah</a></td>
			</tr>
			<tr>
				<th>NIM</th>
				<th>Nama Mahasiswa</th>
				<th>Jurusan</th>
				<th>Action</th>
			</tr>";
	while($hasil = mysql_fetch_array($query_tampilkan))
	{
	echo"<tr>
			<td>$hasil[nim]</td>
			<td>$hasil[nama_mhs]</td>
			<td>$hasil[jurusan]</td>
			<td><a href=>EDIT | HAPUS</a></td>
		</tr>";
	}echo "</table><br>"
?>

<?php
	include "unikoneksi.php";
	$tampilkan = "select * from dosen";
	$query_tampilkan = mysql_query($tampilkan);

	echo
		"<table border=1>
			<tr>
				<td colspan=4 align=middle><a href=>Tambah</a></td>
			</tr>
			<tr>
				<th>Kode Dosen</th>
				<th>Nama Dosen</th>
				<th>NIP</th>
				<th>Action</th>
			</tr>";
	while($hasil = mysql_fetch_array($query_tampilkan))
	{
	echo"<tr>
			<td>$hasil[kode_dos]</td>
			<td>$hasil[nama_dos]</td>
			<td>$hasil[Nip]</td>
			<td><a href=>EDIT | HAPUS</a></td>
		</tr>";
	}echo "</table><br>"
?>

<?php
	include "unikoneksi.php";
	$tampilkan = "select * from mata_kuliah";
	$query_tampilkan = mysql_query($tampilkan);

	echo
		"<table border=1>
			<tr>
				<td colspan=5 align=middle><a href=>Tambah</a></td>
			</tr>
			<tr>
				<th>Kode Mata Kuliah</th>
				<th>Nama Mata Kuliah</th>
				<th>Jumlah SKS</th>
				<th>Semester</th>
				<th>Action</th>
			</tr>";
	while($hasil = mysql_fetch_array($query_tampilkan))
	{
	echo"<tr>
			<td>$hasil[kode_matkul]</td>
			<td>$hasil[nama_matkul]</td>
			<td>$hasil[jum_sks]</td>
			<td>$hasil[semester]</td>
			<td><a href=>EDIT | HAPUS</a></td>
		</tr>";
	}echo "</table>"
?>
