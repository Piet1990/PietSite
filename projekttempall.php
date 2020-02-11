<!DOCTYPE HTML>
<html>
	<head>
		<title>Piet Feinbube </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
	<?php 
        $projekt = $_GET["projekt"];
        $projekttext = $_GET["projekttext"];
        $piet = $_GET["piet"];
        $bild = $_GET["bild"];
        ?>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo"></a><?php echo $projekt ?></h1>
								<hr />
								<p><?php echo $projekttext ?></p>
							</header>
						</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Main</a></li>
							</ul>
						</nav>

				</div>
</div>
			<!-- Main -->
				<div class="wrapper style2">
					<article id="main" class="container special">
						<a href="#" class="image featured"><?php echo "<img src= $bild />"?></a>
						<header>
							<h2><a href="#">Mein Aktuelles</a></h2>
						</header>
						<p>
							<?php echo $piet ?>
						</p>
					</article>
				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
						</div>
						<hr />
						<div class="row">
							<div class="col-12">
								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Hier geht es zu meinen Profilen</h3>
										</header>
										<p>Am besten bin ich über meine E-Mail zu ereichen bei fragen.</p>
										<ul class="icons">
											<li><a href="https://www.linkedin.com/in/piet-feinbube-3b252a187/" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
											<li><a href="https://github.com/Piet1990" class="icon brands fa-linkedin-in"><span class="label">GitHub</span></a></li>
										</ul>
									</section>
							</div>
							
						</div>
					</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>