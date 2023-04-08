<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Pelayanan Pengaduan Masyarakat</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/login.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('css/text-anim.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('laporan') ?>">Laporan Selesai</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('daftar') ?>">Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active"  href="<?= base_url('masuk') ?>">Masuk</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				<h3 class="animate-charcter">Web Pelayanan Pengaduan Masyarakat</h3>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<div class="login-container">
                    <form action="<?= base_url('log')?>" method="POST">
                        <h2>Halaman Masuk</h2>
                        <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                        </div>
                        <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                    </div>
				</div>
			</div>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Pasifik</div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>