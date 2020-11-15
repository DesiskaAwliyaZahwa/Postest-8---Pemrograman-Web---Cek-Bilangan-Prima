<!DOCTYPE html>
<html>
<head>
	<title>Jenenge tatang</title>
	<link rel="stylesheet" type="text/css" href="gaskan.css">
</head>
<body>
	
	<div class="header">
	<h1>POSTEST PRAKTIKUM 8 DASAR-DASAR PHP</h1>
</div>
<div class="content">
	<h2>INPUTAN BILANGAN</h2>
	<form action="" method="GET">

Masukkan Bilangan : <input type="text" name="bilangan"><br><br>

<div class="kirim">
	<input type="submit" name="hitung"><br>
	</div>
	<br>
<div align="center">
	<?php
	if(isset($_GET['hitung'])){
		$angka = $_GET['bilangan'];
		if ($angka <=1) {
			echo "Bilangan " . $angka . " Bukan merupakan bilangan prima";
			# code...
		}else{
			if ($angka == 2) {
				echo "Bilangan " .$angka . "  merupakan Bilangan prima";
				# code...
			}else{
				for ($nilai=2; $nilai <$angka ; $nilai++) { 
					if ($angka%$nilai == 0) {
					$stat = 0;
					break;
					# code...
				}else{
					$stat =1;
					# code...
				}
				}

				if ($stat == 0) {
					echo "Bilangan " .$angka . " adalah Bukan Prima";
					# code...
				}else{
					echo "Bilangan " .$angka . " adalah Prima";
				}
			}
		}
	}
	?>
<?php if (isset($_GET['hitung'])) : ?>	
 <br>
 <br>
 <div class="winky">
 <a href="prima.php">Cek lagi ?</a>
<?php endif; ?>
</div>
</form>
</div>
</body>
</html>


