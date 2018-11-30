<?php
include "koneksi.php";
$tampilkan = "select * from tbl_mhs";
$query_tampilkan = mysql_query($tampilkan);
	echo"
	<table border=1>
	<tr>
		<td colspan=6 align=middle><a href=> TAMBAH DATA </a></td>
	</tr>

	<tr>
		<th> Username </th>
		<th> Alamat </th>
		<th> No HP </th>
		<th> Jenis Kelamin </th>
		<th> ID mahasiswa </th>
		<th> Action </th>
	</tr>";

while($hasil = mysql_fetch_array($query_tampilkan))
{
	echo"
	<tr>
		<td> $hasil[username] </td>
		<td> $hasil[alamat] </td>
		<td> $hasil[no_hp] </td>
		<td> $hasil[jenis_kelamin] </td>
		<td> $hasil[id_mhs] </td>
		<td> <a href=sss.html> EDIT | HAPUS </a> </td>";
}
echo"</table>"
?>
