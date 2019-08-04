<?php
include_once ("koneksi.php");
$nama_barang=$_POST['nama_barang'];
$sql = "INSERT INTO daftar_barang VALUES (DEFAULT,'$nama_barang')";
$result = $con->query($sql);
echo "<table<table style='align:center' border=\"1\">";
if($result)
{
	
	echo "<div style='text-align:center'><tr><td> <a href='index.php'>Home</a> </td><td><a href='tambah.php'>Tambah</a></td></tr><br></div>";


}else
{
	echo "Input Gagal Coba Lagi";
	echo "<br><a href='tambah.php'>Tambah</a>";
}
	echo "</table>";
	



mysqli_close($con);
?>