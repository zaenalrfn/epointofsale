<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
	<title>Testimoni</title>
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
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
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

	<!-- bagian testimoni -->

	<div class="testimoni">
		<div class="container">
			<div class="row text-center">
				<h1 class="text-center mt-5 mb-5">Testimoni</h1>
				<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="10000">
							<img src="assets/images/customer.png" class="rounded-circle" alt="1" width="100">
							<h3 class="mt-3 mb-3">Abi</h3>
							<p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Aut, facere eaque, et asperiores nesciunt quia cupiditate officiis ab quod, laudantium eligendi minima atque nulla earum sed amet, in ullam nisi.</p>
						</div>
						<div class="carousel-item" data-bs-interval="2000">
							<img src="assets/images/customer_2.png" class="rounded-circle" alt="2" width="100">
							<h3 class="mt-3 mb-3">Ivan</h3>
							<p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis iste, quasi tempora tenetur veniam, natus nam non quisquam autem praesentium quam corrupti pariatur vero, aspernatur labore eaque nulla iure? Praesentium?</p>
						</div>
						<div class="carousel-item">
							<img src="assets/images/customer_3.png" class="rounded-circle" alt="3" width="100">
							<h3 class="mt-3 mb-3">Jalal</h3>
							<p class="lead">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Fuga mollitia dolorem, debitis illo consequuntur, obcaecati beatae aliquam laboriosam fugiat, itaque expedita aut reprehenderit nobis. Facere temporibus explicabo minima harum labore?</p>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- akhir bagian testimoni -->

	<!-- bagian footer -->

	<footer id="contact">
		<div class="main-content">
			<div class="sec abtus">
				<h2>SHOESHOP</h2>
				<p>
					Halo teman semua, apa kabar anda hari ini? Semoga selalu sehat dan dalam perlindungan-Nya. Pertama kali kami ucapkan selamat datang kepada para netizen yang budiman. kami buat sengaja untuk menyediakan tempat belanja khususnya
					Pakaian.
				</p>
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
		</div>
	</footer>
	<!-- akhir bagian footer -->


		<script src="assets/js/script.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>