<?php
include "koneksi.inc.php";
?>

<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>jenis kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>
</tr>


<?php
$no=1;
$sql= mysqli_query($conn, "select * from kontak order by nama");
while($data=mysqli_fetch_array($sql)){

?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['jkel']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['kota']; ?></td>
<td><?php echo $data['pesan']; ?></td>
</tr>
<?php
}
?>

</table>
