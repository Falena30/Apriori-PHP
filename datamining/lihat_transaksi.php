<html>
<header>
<?php
include_once ("koneksi.php");
$sql = "SELECT * FROM transaksi JOIN daftar_barang USING (id_barang)";
$result = $con->query($sql);
echo "<table style='align:center' border=\"1\">";
echo "<tr><td> ID Barang </td><td>Nama Barang</td><td>ID Transaksi</td></tr><br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo "<div style='text-align:center'><tr><td> " . $row["id_barang"]. " </td><td>" . $row["nama_barang"]. "</td><td>" . $row["id_trnsksi"]. "</td></tr><br></div>";
		
	}
} else {
    echo "gagal";
}
echo "</table>";
mysqli_close($con);
?>
</header>
<body>
<input type="submit" value="Home" class="tombol" onclick="location.href='index.php'">
</body>
</html>