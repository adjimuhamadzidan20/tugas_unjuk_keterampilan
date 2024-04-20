<!DOCTYPE html>
<html lang="en">
<head>

	<?php include '../section/header.php'; ?>

</head>
<body>
	<!-- navigasi bar -->
	<?php include '../section/navbar_checkout.php'; ?>

	<!-- checkout section -->
	<main>
		<div class="checkout">
			<div class="wrapper">
				<div class="img-product">
					<img src="../fotoProduk/gb5.png" alt="Jeruk" title="Jeruk">
					<h1>Jeruk</h1>
					<p>IDR 30.000/Kg</p>
				</div>
				<div class="form-check">
					<h2>Checkout</h2>
					<form action="../rincian_checkout.php?produk=jeruk" method="post">
						<label for="nama">Nama</label>
						<br>
						<input type="text" id="nama" name="nama" placeholder="Nama Pembeli" required>
						<br>
						<label for="alamat">Alamat</label>
						<br>
						<textarea name="alamat" rows="5" placeholder="Alamat" required></textarea>
						<br>
						<label for="no_tlp">No Telp</label>
						<br>
						<input type="text" id="no_tlp" name="no_tlp" placeholder="No.Telp" required>
						<br>
						<label for="jml">Berat Jeruk</label>
						<br>
						<input type="text" id="jml" name="jml" placeholder="Jumlah Berat" required>
						<br>
						<button type="submit" onclick="return confirm('Yakin ingin memesannya?');">Pesan</button>
					</form>
				</div>
			</div>
		</div>
	</main>
	<br><br><br><br><br><br><br><br>
	
    <?php  
        include '../section/footer.php';
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