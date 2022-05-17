<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
	<title>Home</title>
</head>
<body>
	

	<!-- bagian navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container">
			<a class="navbar-brand" href="#">e-point of sale</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produk.php">Produk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profil.php">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="testimoni.php">Testimoni</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- akhir bagian navbar -->

	<!-- bagian jumbotron -->

	<div class="jumbotron pt-5 pb-5">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-md-5">
					<div class="text">
						<h1 class="display-4">looking for shoes? at the <span>SHOESHOP</span> the solution.</h1>
						<p class="lead mt-4 mb-4">SHEOSHOP is a website selling cheap quality shoes</p>
						<a class="btn btn-lg" href="loginPage.php" role="button">Shop Now</a>
					</div>
				</div>
				<div class="col-md-5">
					<div class="jumbotron-img">
						<img src="assets/images/bg-people.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- akhir bagian jumbotron -->

	<!-- bagian produk -->

	<div class="produk d-flex align-items-center justify-content-center">
		<div class="container">
			<h1 class="mb-4">Trending Produk</h1>
			<div class="sub_about justify-content-center">
				<div class="card_1">
					<h3>title</h3>
					<div class="item-1-img">
						<img src="assets/images/1.png" class="img-fluid" />
					</div>
					<a class="btn" href="pemesanan.php">Shop Now</a>
				</div>
				<div class="card_2">
					<h3>title</h3>
					<div class="item-2-img">
						<img src="assets/images/2.png" class="img-fluid" />
					</div>
					<a class="btn" href="pemesanan.php">Shop Now</a>

				</div>
				<div class="card_3">
					<h3>title</h3>
					<div class="item-3-img">
						<img src="assets/images/3.png" class="img-fluid" />
					</div>
					<a class="btn" href="pemesanan.php">Shop Now</a>
				</div>
				<div class="card_4">
					<h3>title</h3>
					<div class="item-4-img">
						<img src="assets/images/4.png" class="img-fluid" />
					</div>
					<a class="btn" href="pemesanan.php">Shop Now</a>
				</div>
				<div class="card_5">
					<h3>title</h3>
					<div class="item-5-img">
						<img src="assets/images/5.png" class="img-fluid" />
					</div>
					<a class="btn" href="pemesanan.php">Shop Now</a>
				</div>
			</div>
		</div>
	</div>

	<!-- akhir bagian produk -->

	<!-- bagian footer -->

	<footer id="contact">
		<div class="main-content">
			<div class="sec abtus">
				<h2>SHOESHOP</h2>
				<p>
					Halo teman semua, apa kabar anda hari ini? Semoga selalu sehat dan dalam perlindungan-Nya. Pertama kali kami ucapkan selamat datang kepada para netizen yang budiman. kami buat sengaja untuk menyediakan tempat belanja khususnya
					Pakaian.</p>
					<ul class="sei">
						<li>
							<a href="https://www.facebook.com/Brillian-Baru-232308697597628"><i class="bi bi-facebook"></i></a>
						</li>
						<li>
							<a href="https://www.instagram.com/brillian.baru/"><i class="bi bi-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="bi bi-instagram"></i></a>
						</li>
					</ul>
				</div>
				<div class="sec sosial">
					<h2>Sosial</h2>
					<p>youtube</p>
					<p>instagram</p>
					<p>facebook</p>
					<p>twitter</p>
				</div>
				<div class="sec subscribe">
					<h2>Subscribe Newsletter</h2>
					<input type="text" class="form-control"  name="subscribe">
					<button class="mt-2" type="submit">subscribe</button>
				</div>
			</div>
		</footer>
		<!-- akhir bagian footer -->




		<script src="assets/js/script.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>