<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'section/header.php'; ?>

</head>
<body>
    <!-- navigasi bar -->
    <?php include 'section/navbar.php'; ?>

    <main>
        <div class="container">
            <div class="cover">
                <h1>Selamat Datang<br>Beyourself Fruit</h1>
            </div>
        </div>
        <!-- product section -->
        <div class="product" id="produk">
            <h2>Pilihan Produk Buah Segar</h2>
            <div class="item">
                <div class="gb">
                    <img src="fotoProduk/gb1.png" alt="Apel" title="Apel">
                    <br>
                    <p>Apel</p>
                    <br>
                    <p class="harga">IDR 10.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_apel.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb2.png" alt="Anggur" title="Anggur">
                    <br>
                    <p>Anggur</p>
                    <br>
                    <p class="harga">IDR 30.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_anggur.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb3.png" alt="Pisang" title="Pisang">
                    <br>
                    <p>Pisang</p>
                    <br>
                    <p class="harga">IDR 25.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_pisang.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                 <div class="gb">
                    <img src="fotoProduk/gb4.png" alt="Alpukat" title="Alpukat">
                    <br>
                    <p>Alpukat</p>
                    <br>
                    <p class="harga">IDR 10.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_alpukat.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb5.png" alt="Jeruk" title="Jeruk">
                    <br>
                    <p>Jeruk</p>
                    <br>
                    <p class="harga">IDR 30.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_jeruk.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb6.png" alt="Mangga" title="Mangga">
                    <br>
                    <p>Mangga</p>
                    <br>
                    <p class="harga">IDR 25.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_mangga.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb7.png" alt="Melon" title="Melon">
                    <br>
                    <p>Melon</p>
                    <br>
                    <p class="harga">IDR 10.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_melon.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb8.png" alt="Semangka" title="Semangka">
                    <br>
                    <p>Semangka</p>
                    <br>
                    <p class="harga">IDR 30.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_semangka.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
                </div>
                <div class="gb">
                    <img src="fotoProduk/gb9.png" alt="Strawberry" title="Strawberry">
                    <br>
                    <p>Strawberry</p>
                    <br>
                    <p class="harga">IDR 25.000/Kg</p>
                    <br>
                    <div class="btn">
                        <a href="checkout/checkout_strawberry.php">Masuk Keranjang</a>
                        <i class="fas fa-shopping-cart fa-xs"></i>
                    </div>
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