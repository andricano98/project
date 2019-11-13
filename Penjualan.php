<!DOCTYPE html> 
<html> 
<head> 
<title>Penjualan</title> 
</head> 
<body> 
<h2>Form Penjualan</h2> 

	<table> 
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
			<tr> 
				<td>Nama Pembeli</td><td><input type="text" name="nama" size="30"></td> 
			</tr> 
			<tr> 
				<td>Nama Barang</td>
				<td><input type="text" name="nmBarang" size="30"></td> 
			</tr> 
			<tr>
				<td>Jumlah</td> 
				<td> 
				<input type="text" name="jumlah" size="30"></td>
			</tr> 
			<tr>
				<td>Harga Barang</td> 
				<td> 
				<input type="text" name="harga" size="30"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>	
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr> 
		</form> 
	</table> 
	
	<?php
	if(isset($_POST['submit'])){
		$nmPembeli = $_POST['nama'];
		$nmBarang = $_POST['nmBarang'];
		$jmlBarang = $_POST['jumlah'];
		$hrgBarang = $_POST['harga'];
		$diskon = 0;
		
		$jmlHarga = $jmlBarang * $hrgBarang;
		if($jmlBarang>12){
			$diskon = (10/100) * $hrgBarang;
		}elseif($jmlBarang>60){
			$diskon =(25/100) * $hrgBarang;
		}else{
			$diskon = 0;
		}
		$totalDiskon = $jmlBarang * $diskon;
		$totalBayar = $jmlHarga - $totalDiskon;
		$hasil_rupiah = "Rp " . number_format($totalBayar,2,',','.');
		 
		echo "<table border='1'><tr><td>";
		echo "<table border='0'>";
		echo "<tr><td>Nama Pembeli</td><td><input type='text' name='Diskon' size='30' value='$nmPembeli'></td></tr>";
		echo "<tr><td>Nama Barang</td><td><input type='text' name='Diskon' size='30' value='$nmBarang'></td></tr>";
		echo "<tr><td>Jumlah Barang</td><td><input type='text' name='Diskon' size='30' value='$jmlBarang'></td></tr>";
		echo "<tr><td>Harga Barang</td><td><input type='text' name='Diskon' size='30' value='$hrgBarang'></td></tr>";
		echo "<tr><td>Jumlah Harga</td><td><input type='text' name='Diskon' size='30' value='$jmlHarga'></td></tr>";
		echo "<tr><td>Diskon</td><td> <input type='text' name='Diskon' size='30' value='$diskon'><br></td></tr>";
		echo "<tr><td>Total Diskon </td><td><input type='text' name='totalDiskon' size='30' value='$totalDiskon'><br></td></tr>";
		
		echo "<tr><td colspan='2'>Total Bayar : $hasil_rupiah </td></tr>";
		echo "</table></td></tr></table>";
		}
	?>
</body> 
</html> 