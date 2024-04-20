<?php  
	$namaPembeli = htmlspecialchars($_POST['nama']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$noTelp = htmlspecialchars($_POST['no_tlp']);
	$jumlah = htmlspecialchars($_POST['jml']);

	if ($_GET['produk'] == "apel") {
		$hrgPerKg = 10000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "anggur") {
		$hrgPerKg = 30000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "pisang") {
		$hrgPerKg = 25000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "alpukat") {
		$hrgPerKg = 10000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "jeruk") {
		$hrgPerKg = 30000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "mangga") {
		$hrgPerKg = 25000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "melon") {
		$hrgPerKg = 10000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "semangka") {
		$hrgPerKg = 30000;
		$total = $jumlah * $hrgPerKg;
	} else if ($_GET['produk'] == "strawbery") {
		$hrgPerKg = 25000;
		$total = $jumlah * $hrgPerKg;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'section/header.php'; ?>

</head>
<body>
	<!-- navigasi bar -->
    <?php include 'section/navbar_rinci.php'; ?>

	<!-- checkout section -->
	<main>
		<div class="rincian-checkout">
			<div class="wrapper">
				<h1>Checkout</h1>
				<div class="rincian">
					<h2>Rincian Pembayaran (Invoice)</h2>
					<table>
						<tbody>
							<tr>
								<td>Nama Pembeli</td>
								<td><?= $namaPembeli; ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><?= $alamat; ?></td>
							</tr>
							<tr>
								<td>No. telp</td>
								<td><?= $noTelp; ?></td>
							</tr>
							<tr>
								<td>Berat buah (Kg)</td>
								<td><?= $jumlah; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="total">
					<h3>Jumlah Total</h3>
					<p>Rp. <?= number_format($total, 0); ?></p>
				</div>
				<div class="cara-pembayaran">
					<ul type="square">
		    			<li>Metode Pembayaran Melalui Transfer</li>
		    			<li>No. Rek 12111888</li>
		    			<li>Bank BRI</li>
		    			<li>Atas nama Beyourself Fruit mitra Kota Bekasi</li>
		    		</ul>
				</div>
				<div class="cetak-pembayaran">
					<button type="button" onclick="print();">Cetak Pembayaran</button>
				</div>	
			</div>
		</div>
	</main>
	
    <?php  
        include 'section/footer.php';
    ?>

	<script>
		// nav bar mobile
		let iconHamb = document.getElementById('icon');
		iconHamb.onclick = function() {
			// memanggil list nav mobile
			let navbar = document.getElementsByClassName('nav-list-mobile')[0];

			if(navbar.style.display === "none") {
		    	navbar.style.display = "block";
		    } 

		    else {
		        navbar.style.display = "none";
		    }
		}

	</script>
	</body>
</html>