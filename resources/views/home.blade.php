
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<!--[if gte IE 9] <style type="text/css"> .gradient {filter: none;}</style><![endif]-->
<!--[if !IE]><html lang="en"><![endif]-->
<html lang="en-US" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- Required meta tags for responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- Favicon and touch icons -->
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png" />
		<meta name="misapplication-TileColor" content="#ffffff" />
		<meta name="theme-color" content="#ffffff" />
		<!-- Twitter Card data -->
		<meta name="twitter:card" content="" />
		<meta name="twitter:site" content="@twitter_username" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image" content="" />
		<!-- Open Graph data -->
		<meta property="og:title" content="" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
		<meta property="og:description" content="" />
		<meta property="og:site_name" content="R" />
		<meta property="fb:admins" content="Facebook numeric ID" />
		<!-- gmail verification -->
		<meta name="google-site-verification" content="" />
		<!-- Website title -->
		<title>Home</title>
		<link rel="stylesheet" href="css/bootstrap-icons.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<!-- jQuery (necessary for jQuery plugins) -->
		<script src="js/jquery-3.6.0.min.js"></script>
	</head>

	<body>
		<!-- Main Coding Start Here -->

		<!-- markup for header -->
		<header class="header py-4">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#nav-toggle"
						aria-controls="nav-toggle"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse justify-content-center navbar-collapse" id="nav-toggle">
						<ul class="navbar-nav mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link mx-2" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link mx-2" href="{{route('menu-card',$data->id)}}">Menu Card</a>
							</li>
							<li class="nav-item">
								<a class="nav-link mx-2" href="#">Payment</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link mx-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profile </a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">My Account</a></li>
									<li><a class="dropdown-item" href="#">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- markup for header -->


		<!-- markup for slider -->
		<section class="slider pb-5">
			<h1 class="display-4 text-center mb-5">Business Name</h1>
			<div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="..." />
					</div>
					<div class="carousel-item">
						<img src="https://images.unsplash.com/photo-1488992783499-418eb1f62d08?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1289&q=80" class="d-block w-100" alt="..." />
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>
        <!--/ markup for slider -->



		<!-- Main Coding End -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- Script JS -->
		<script src="js/script.js"></script>
	</body>
</html>
