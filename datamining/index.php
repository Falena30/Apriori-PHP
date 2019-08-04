<html>
<head>
	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"text="text/css">
		<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<?php
		include_once ("koneksi.php");
		$sql = "SELECT id_barang, nama_barang FROM daftar_barang";
			$result = $con->query($sql);
		?>
</head>
<body style="background-color:#FFFFFF">
<title>Assosication Rule Familly Collection</title>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Family Collection</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="tambah.php">Tambah Barang</a></li>
      <li><a href="transakasi.php">Tambah Transaksi</a></li>
      <li><a href="rule.php">Rule</a></li>
    </ul>
	</div></nav>
  <div class="container">
		<div class="row">
  	  <div class="col-sm-4" style="background-color:#FFFFFF">
		<h4>Daftar Barang</h4>
		<div>
		<table class="table" border="2">
		<tr><td> ID</td><td> Nama Barang</td></tr><br>
		<?php
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<div><tr><td> " . $row["id_barang"]. " </td><td>" . $row["nama_barang"]. "</td></tr></div>";
				}
			}
		?></table>
		</div>
	  </div>
	  <div class="col-sm-5" style="background-color:#FFFFFF">
		<h4>Daftar Transaksi</h4>
		<div>
		
		<table class="table" border="2">
		<tr><td>Item Set</td></tr>
		<?php
			if ($result = $con->query("select group_concat(daftar_barang.nama_barang separator ',')
    from transaksi left join daftar_barang 
	 on (transaksi.id_barang = daftar_barang.id_barang)
	 group by transaksi.id_trnsksi", MYSQLI_USE_RESULT)) {
	//$belian = $result->fetch_all();
	
	while ($b = $result->fetch_row()) {
		$belian[] = $b[0];
		echo"<tr><td>$b[0]</td></tr>";
	}
	
    $result->close();
}
		?>
		</table>
		</div>
	  </div>
	  </div>
	  </div>

<?php
mysqli_close($con);
?>
</body>
</html>