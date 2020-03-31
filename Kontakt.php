<!DOCTYPE HTML>
<html>
	<head>
	<?php include("phpHashing.php");
								    
        $zumachen = new Zumachen();
    ?>
		<title>Piet Feinbube </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
			<!-- Main -->
			<div class="wrapper style2">
					<article id="main" class="container special">
						<a href="#" class="image featured"></a>
						<header>
						
						<p>
							<a>Danke für Ihre Daten ich werde mich schnellstmöglich bei Ihnen melden.</a>
						</p>
						
						</header>
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
										<ul class="icons">
											<li><a href="https://www.linkedin.com/in/piet-feinbube-3b252a187/" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
											<li><a href="https://github.com/Piet1990" ><span class="label">GitHub</span></a></li>
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

   <?php 

    $ordner = "Anfragendaten/anfrage.txt";

    if($_GET["email"] <> "")
    {
        date_default_timezone_set("Europe/Berlin");
        $timestamp = time();
        
        $datum = date("d.m.Y", $timestamp);
        $time = date("H:i", $timestamp);
        
        $handle = fopen ($ordner, "a");
        
        fwrite ($handle, $_GET["email"]);
        fwrite ($handle, " ");
        fwrite ($handle, $_GET["name"]);
        fwrite ($handle, " ");
        fwrite ($handle, $datum);
        fwrite ($handle, " ");
        fwrite ($handle, $time);
        fwrite ($handle, "/");
        fwrite($handle,"\r\n");
            
        fclose ($handle);

        exit;
    }
?>




