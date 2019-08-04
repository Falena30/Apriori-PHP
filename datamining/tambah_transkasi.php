
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"text="text/css">
		<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<?php
include_once("koneksi.php");
?>
</head>
<body>
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
    </ul></nav>
	 <div class="container">
		<div class="row">
	<div class="col-sm-4" style="background-color:#FFFFFF">
		<form action="simpan_transaksi.php" method="post">
		<table class="table" border="2">
			<tr>	
			<td><div>
				<?php
				$i = 0;
				$batas = $_POST['jumlah_inputan'];
				
				$sql = "SELECT * FROM daftar_barang";

				while($i<$batas)
				{
					$result = $con->query($sql);
					echo "<select name ='nama_barang[]'><br>";
					
				while($row = mysqli_fetch_array($result)){
					echo "<option value='".$row['id_barang']."'>".$row['nama_barang']."</option>";
					
				}
				$i++;
				echo "<select name ='nama_barang'><br>";
				}
?>
			</div></td>
			<td><div>
				<label>ID</label>
				<input type='number' name='id' size='20'>
			</div></td>				
			</tr>
			</table>
			<div>
				<input type="submit" value="Tambah" class="tombol">
			</div>
		</form>
		</div>
		</div>
		</div>
</body>
</html>