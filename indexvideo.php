<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->



<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><b>The Publishing Company</b></a>


									<?php
$servername = "35.242.161.44";
$username = "cillian1";
$password = "cillianadam1";
$dbname = "customer_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Customer1";
$result = $conn->query($sql);
//var_dump($result);die;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
    <h1> Name: <?php echo $row["customer_name"] ?></h1>

    <?php
    // echo  " - Name: " . $row["customer_name"]. " EMail" . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Welcome to 'The Publishing Company'&nbsp;</h1>
<p>What we Provide</p>
										</header>
										<p>'The Publishing Company' Provides a range of journals from different scientific backgrounds. Each Journal is based on Open Source articles from Academic Authors worldwide who share the vision of open source science as well as earning passive income for their hardwork.&nbsp; &nbsp; &nbsp; &nbsp;</p>
										<ul class="actions">
										  <li><a href="aboutus.html" class="button big">Learn More</a></li>
										</ul>
									</div>
								</section>
							<hr/>

							<video width="1200" controls>
								<source src="videos/warframe.mp4" type="video/mp4">
							</video>


						  <!-- Section -->
								<section>
									<header class="major">
										<h2>Advantages</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>Open Source</h3>
												<p>'The Publishing Company' provides open source articles which anybody can access.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>Article Summaries&nbsp;</h3>
												<p>The majority of articles have a video summary by the academic authors involved so you know that the summary is valid and verified.&nbsp; &nbsp; &nbsp;&nbsp;</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>Academic Royalties</h3>
												<p>For each public video summary, the academic authors make royalties to fund cutting-edge research.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Double Blind Peer-Reviewed</h3>
												<p>Each journal is peer-reviewed to ensure strigent scientific rigour.&nbsp; &nbsp; &nbsp; &nbsp;</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Popular Articles</h2>
									</header>
									<div class="posts">
										<article>
											<a href="samplepaper.html" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Do religious ministers influence the sexual attitude and moral behaviour amongst their adherence?</h3>
											<p>This article looks at whether religous ministers can impact their congregations sexual and moral behaviours through their speeches in religious institutions. The article has 2 parts.&nbsp; &nbsp; &nbsp; &nbsp;</p>
											<ul class="actions">
												<li><a href="samplepaper.html" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
										  <h3>Modelling process optimisation parameters to evaluate commercial viability of lipases from various genera in production of biofuels</h3>
											<p>This article looks at the study of lipases for biofuel production.&nbsp;</p>
											<ul class="actions">
												<li><a href="samplepaperbio.html" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
										  <h3>Article C</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
										  <h3>Article D</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
										  <h3>Article E</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Article F</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="aboutus.html">About us&nbsp;</a></li>
										<li><a href="journals.html">Journals&nbsp;</a></li>
										<li><a href="howtopublish.html">publishing with us</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="index.php">PHP Test</a></li>
										<li><a href="#">Adipiscing</a></li>
										<li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Maximus Erat</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Adverts below&nbsp;</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">AdamDeen@thepublishingcompany.tld</a></li>
										<li class="icon solid fa-phone">(+44) 737589417&nbsp;</li>
										<li class="icon solid fa-home">1234 Somewhere Road NG7 5RW</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
