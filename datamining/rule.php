<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"text="text/css">
		<script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
<?php
include_once("koneksi.php");
?>
     <div class="container">
	 <div class="row">
  	 <div class="col-sm-4">
<?php
echo "<pre><br><h2>Daftar Item </h2>";
echo "<table class=table border=\2\>";
echo " <tr><td>Daftar Item</td></tr>";
if ($result = $con->query("select nama_barang from daftar_barang", MYSQLI_USE_RESULT)) {
	//$item = $result->fetch_all();
	
	while ($i = $result->fetch_row()) {
		$item[] = $i[0];
		
		echo " <tr><td> ". $i[0] ."</td></tr>";
		
	}
    $result->close();
}

echo"</table>";
echo"</pre>";
?>
   </div>
   
   
<div class="col-sm-5">
<?php
echo"<pre><br><h2>Transaksi</h2>";
echo "<table class=table border=\2\>";
echo " <tr><td>Item Set</td></tr>";
if ($result = $con->query("select group_concat(daftar_barang.nama_barang separator ',')
    from transaksi left join daftar_barang 
	 on (transaksi.id_barang = daftar_barang.id_barang)
	 group by transaksi.id_trnsksi", MYSQLI_USE_RESULT)) {
	//$belian = $result->fetch_all();
	$z = 0;
	while ($b = $result->fetch_row()) {
		$belian[] = $b[0];
			
		echo " <tr><td> ". $b[0] ."</td></tr>";
		$z++;
	}
	
	
    $result->close();
}
echo"</table>";
echo"</pre>";
?>
</div>
</div>
</div>

     <div class="container">
	 <div class="row">
  	 <div class="col-sm-5">
<?php
$con->close();

    //$item = file('item.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
    //$belian = file('belian.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );

    $item1 = count($item) - 1; // minus 1 from count
    $item2 = count($item);
    $item3 = count($item);
	echo "<pre>";
    echo "\r\n<h3>Step 1: Gabungan 1 Item</h3>\r\n";
    // MENDAPATKAN JUMLAH BARANG
	echo "<table class=table border=\2\>";
	echo " <tr> <td>Nama Barang</td><td> Support Count</td><td>Support</td></tr>";
    foreach ($item as $value) {
        $total_per_item[$value] = 0; 
		$support[$value] = 0; 
        foreach($belian as $item_belian) {            
            if(strpos($item_belian, $value) !== false) {
                $total_per_item[$value]++;
				$support[$value]++;
            }
        }
		$spr[$value] = round($support[$value] / $z * 100,2);
		echo " <tr> <td>$value </td><td> ". $total_per_item[$value] ."</td><td> ". $spr[$value] ."%</td></tr>";
    }
	echo"</table>";
?>
</div>
  	 <div class="col-sm-7">
<?php
    // MENDAPAT JUMLAH GABUNGAN
	echo "<pre>";
	 echo "\r\n<h3>Step 2: Gabungan 2 Item</h3>\r\n";
	echo"<table class=table border=\2\>";
	echo"<tr> <td>Item Set</td><td> Support Count</td><td>Support</td></tr>";
    for($i = 0; $i < $item1; $i++) {
        for($j = $i+1; $j < $item2; $j++) {
            $item_pair = $item[$i].'|'.$item[$j]; 
            $item_array[$item_pair] = 0;
			$sprt[$item_pair] = 0;
            foreach($belian as $item_belian) {
                if((strpos($item_belian, $item[$i]) !== false) && (strpos($item_belian, $item[$j]) !== false)) {
                    $item_array[$item_pair]++;
					$sprt[$item_pair]++;
					
                }
				$spr[$item_pair] = round($sprt[$item_pair] / $z * 100, 2);
            }	
				if($item_array[$item_pair]>0)
				{
				echo " <tr> <td>$item_pair </td><td> ". $item_array[$item_pair] ."</td><td> ". $spr[$item_pair] ."%</td></tr>";
				}
        }
    }
	echo"</table>";
?>
</div>
<div>
  <?php
    // MENDAPAT JUMLAH GABUNGAN
  echo "<pre>";
   echo "\r\n<h3>Step 3: Jumlah Gabungan 3 Item</h3>\r\n";
  echo"<table class=table border=\2\>";
  echo"<tr> <td>Item Set</td><td> Support Count</td><td>Support</td></tr>";
    for($i = 0; $i < $item1; $i++) {
        for($j = $i+1; $j < $item2; $j++) {
          for($k = $j+1; $k < $item3; $k++) {
            $item_pair33 = $item[$i].'|'.$item[$j].'|'.$item[$k];
            $item_array33[$item_pair33] = 0;
            $sprt33[$item_pair33] = 0;

            foreach($belian as $item_belian33) {
                if((strpos($item_belian33, $item[$i]) !== false) && (strpos($item_belian33, $item[$j]) !== false) && (strpos($item_belian33, $item[$k]) !== false)){
                    $item_array33[$item_pair33]++;
                    $sprt33[$item_pair33]++;
                }

                $spr33[$item_pair33] = round($sprt33[$item_pair33] / $z * 100, 2);
            } 
          
          if($item_array33[$item_pair33]>0)
          {
          echo " <tr> <td>$item_pair33 </td><td> ". $item_array33[$item_pair33] ."</td><td> ". $spr33[$item_pair33] ."%</td></tr>";
          }
        }
      }
    }
  echo"</table>";
?>
</div>
</div>
</div>

<?php
	echo"<pre>";
    echo "\r\n<h1 style=text-align:center>Step 4: Association Rule 2 Item</h1>\r\n";
    // MENDAPATKAN KIRAAN UNTUK ASSOCIATION RULES
	echo"<br>Hasil untuk Confidence > 50%";
	echo "<table class=table border=\2\>";
	echo "<tr><td>Item Set</td><td>Confidence</td><td>Lift Ratio</td></tr>";
    foreach ($item_array as $ia_key => $ia_value) {
        $theitems = explode('|',$ia_key);
        for($x = 0; $x < count($theitems); $x++) {
            $item_name = $theitems[$x];
            $item_total = $total_per_item[$item_name];
			
			if($item_total>0){
            $in_float = $ia_value / $item_total;
            $in_percent = round($in_float * 100, 2);
            $alt_item = $theitems[ ($x + 1) % count($theitems)];
			$benc_marc = round(($total_per_item[$theitems[0]]+$total_per_item[$theitems[1]])/$z*100,2);
			$lift_ratio = round($in_percent/$spr[$theitems[0]], 2);
      if($lift_ratio<5&&$in_percent>50&&$in_percent!=100){
            echo "<tr><td>$ia_key($ia_value) --> $item_name($item_total)</td> <td> ". $in_percent ."%</td> <td>".$lift_ratio."</td></tr>";
          }
            
		}
        }
    }
	echo"</table>";
    echo "</pre>";
?>

<?php
  echo"<pre>";
    echo "\r\n<h1 style=text-align:center>Step 5: Association Rule 3 Item</h1>\r\n";
    // MENDAPATKAN KIRAAN UNTUK ASSOCIATION RULES
  echo"<br>Hasil untuk Confidence > 50%";
  echo "<table class=table border=\2\>";
  echo "<tr><td>Item Set</td><td>Confidence</td><td>Lift Ratio</td></tr>";
    foreach ($item_array33 as $ia_key33 => $ia_value33) {
        $theitems33 = explode('|',$ia_key33);
        for($x = 0; $x < count($theitems33); $x++) {
            $item_name33 = $theitems33[$x];
            $item_total33 = $total_per_item[$item_name33];
      
      if($item_total33>0){
            $in_float33 = $ia_value33 / $item_total33;
            $in_percent33 = round($in_float33 * 100, 2);
            $alt_item33 = $theitems33[ ($x + 1) % count($theitems33)];
      $benc_marc33 = round(($total_per_item[$theitems33[0]]+$total_per_item[$theitems33[1]]+$total_per_item[$theitems33[2]])/$z*100,2);
      
      $lift_ratio33 = round($in_percent33/$spr[$theitems33[0]], 2);
      if($lift_ratio33<5&&$in_percent33>50&&$in_percent33!=100){
            echo "<tr><td>$ia_key33($ia_value33) --> $item_name33($item_total33)</td> <td> ". $in_percent33 ."%</td> <td>".$lift_ratio33."</td></tr>";
          }
     }
        }
    }
  echo"</table>";
    echo "</pre>";
?>


</body>
</html>