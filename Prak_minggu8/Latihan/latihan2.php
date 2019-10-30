<!DOCTYPE html>
<html>
<head>
	<title>Total Harga</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>:</td>
				<td>
					<select name="warna">
						<option value="Merah">--Pilih Warna--</option>
						<option value="Kuning">Kuning</option>
						<option value="Hijau">Hijau</option>
						<option value="Biru">Biru</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	<h2>Hasil :</h2>
        <!--CODE PHP HERE-->
        <?php
		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$warna = $_POST['warna'];
			$total;

			if (strlen($nama)>=1 && strlen($nama)<=10) {
				$total = strlen($nama) * 300;
			}else if (strlen($nama)>=11 && strlen($nama)<=20) {
				$total = strlen($nama) * 500;
			} else {
				$total = strlen($nama) * 700;
			}
			

			echo "
				<table border='1'>
					<tr>
						<th>Nama</th>
						<th>Warna</th>
						<th>Total Harga</th>
					</tr>
					<tr>
						<td>$nama</td>
						<td>$warna</td>
						<td>$total</td>
					</tr>
				</table>
			";
		}
?>
</body>
</html>