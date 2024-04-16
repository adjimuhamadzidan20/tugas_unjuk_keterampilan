<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'section/header.php'; ?>

</head>
<body>
	<!-- navigasi bar -->
	<?php include 'section/navbar_tentang.php'; ?>

  <main>
    <div class="container">
      <div class="cover">
      	<h1>Selamat Datang<br>Beyourself Fruit</h1>
      </div>
    </div>
    <!-- about section -->
    <section class="about" id="about">
      <div class="content">
        <h2>Tentang</h2>
        <p class="p1">Halo sahabat yang luar biasa, pada kesempatan kali ini izinkan kami dari <strong>Beyourself Fruit</strong>
        untuk memperkenalkan diri. Mudah-mudahan dengan adanya perkenalan ini sahabat-sahabat sekalian akan lebih 
        senang berbelanja di toko online ini. Sungguh terhormat bagi kami, jika Anda datang ke toko ini dan bisa 
        memperoleh banyak hal yang bermanfaat.
        <strong>Beyourself Fruit</strong> adalah sebuah toko online yang menyediakan buah buahan
        segar. Seiring dengan Semakin berkembangnya teknologi, maka kami mencoba berinovasi dalam berbisnis. 
        Salah satu bentuk inovasinya adalah dengan menyediakan berbagai layanan toko online kami melalui media internet, 
        dan toko online ini adalah salah satu bentuk pelayanan kami kepada Anda. <strong>Beyourself Fruit</strong> didirikan 
        oleh bagian dari fresh toko.</p>    
      </div>
    </section> 
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