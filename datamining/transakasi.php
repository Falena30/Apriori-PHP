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
    </ul></nav>
		<form action="tambah_transkasi.php" method="post">
		<table class="table" border="2">
			<tr>	
			<td><div>
				<label>Jumlah Inputan</label>
				<input type='number' name='jumlah_inputan' size='20'>
			</div></td>			
			</tr>
			</table>
			<div>
				<input type="submit" value="Tambah" class="tombol">
			</div>
		</form>
</body>
</html>