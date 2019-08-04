<?php
include_once ("koneksi.php");
$nama_barang=$_POST['nama_barang'];
$id=$_POST['id'];
$total_barang = sizeof($nama_barang);
for($i=0;$i<$total_barang;$i++)
{
	$insert_barang = $nama_barang[$i];
$sql = "INSERT INTO transaksi VALUES (DEFAULT,'$insert_barang','$id')";
$result = $con->query($sql);
}
if($result)
{
	echo "<br><a href='index.php'>Home</a>";
}else
{
	echo "Input Gagal";
	echo "<br><a href='index.php'>Home</a>";
}
	



mysqli_close($con);
?>