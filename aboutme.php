<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<!--<html>
	<head>
		<title>Generic - Spatial by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>-->

<html>
	<head>
		<title>Data Incubator Ross Potter</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1>A DataIncubator Capstone Project</h1>
				<p>by Ross Potter</p>
				<nav id="nav">
					<ul>
						<li><a href="home.php">Overview</a></li>
						<li><a href="analysis.php">Analysis</a></li>
						<li><a href="recommendations.php">Recommendations</a></li>
						<li><a href="aboutme.php">About Me</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>New York City Citi Bike:</h2>
				<p></p>

			<ul class="actions intro">
					<li><a href="#one" class="button special big">About me</a></li>
				</ul>
			</section>


		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>About me</h2>
						<p>Ross Potter</p>
					</header>
				<!--<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Cycling in the cities</h2>
									<p>Background</p>
								</header>
							</div>-->
							<div class="pic"><span class="image fit"><img src="images/RossPotter_headshots_08-16-2016_staceydoyle-8_crop_2x3.jpg" alt="" /></span></div>
							<div class="6u$ 12u$(medium) rightalign">
								<p><strong>Seeking to leverage my academic and analytical skill sets, and increase my industry experience and business acumen, by obtaining a position in data science or management consulting</strong>.</p>
								<p>Educated at <a href="http://www.imperial.ac.uk/ese" target="_blank">Imperial College London</a>, where I obtained a MSci degree in Geophysics with a Year Abroad (<a href="http://epss.ucla.edu" target="_blank">University of California Los Angeles</a>) and a PhD in Planetary Science.</p>
								<p>NASA internships at the <a href="http://www.lpi.usra.edu/lunar_intern/" target="_blank">Lunar and Planetary Institute</a>, Houston, TX and the <a href="https://pscischool.jpl.nasa.gov/" target="_blank">Jet Propulsion Laboratory</a>, Pasadena, CA.</p>
								<p>Postdoctoral Fellow at the <a href="http://www.lpi.usra.edu/" target="_blank">Lunar and Planetary Institute</a> working for the NASA Lunar Science Institute.</p>
								<p>Currently a Postdoctoral Research Associate within the Department of Earth, Environmental and Planetary Sciences at <a href="https://www.brown.edu/academics/earth-environmental-planetary-sciences/" target="_blank">Brown University</a>, working for the NASA <a href="http://sservi.nasa.gov/" target="_blank">Solar System Exploration Virtual Institute</a>.</p>
								<p>Participating in <a href=https://www.thedataincubator.com/ target="_blank">The Data Incubator</a>.</p>
								<p>Find me on <a href="https://www.linkedin.com/in/ross-potter-825390ab" target="_blank">LinkedIn</a>.</p>
							

							</div>

							<ul class="actions">
							<li class="more"><a href="#two" class="button alt small">More</a></li>
						</ul>
						</div>
					
				</section>

				<!-- two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Academic research</h2>
						<p>Scientific pursuits</p>
					</header>
				
							<div class="clear">
								<div class="picr"><span class="image fit"><img src="images/FullMoon2010.jpg" alt="" /></span></div>
								<div class="6u$ 12u$(medium) rightalign">
									<p>Space is teeming with millions of asteroidal objects just waiting for a planet to cross their path. My academic research has focused on understanding what happens when asteroids and planets align. Specifically, the formation and structure of asteroid impact craters.</p>
									<p>Due to its promixity and geological history, the Moon offers an excellent opportunity to study asteroid impact cratering. I have, therefore, focused on understanding these processes on the Moon. Particularly the very largest impact structures, basins, which are up to 2500 km across!</p>
									<p>My research involves running computer simulations of the impact events, analysing these models, and comparing them to observations from NASA, as well as other countries, remote data. Look at my <a href="https://scholar.google.com/citations?user=p8gG5LUAAAAJ&amp;hl=en" target="_blank">Google Scholar page</a> and my <a href="http://rosspotter.com" target="_blank">personal website</a> for more information.</p>
								</div>
							</div>

							<ul class="actions buttonmove">
							<li><a href="home.php" class="button special big">Back to home page</a></li>
							<li><a href="aboutme.php" class="button big">Back to top</a></li>
						</ul>
							
					</div>
				
				</section>

<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
<li><a href="https://www.linkedin.com/in/ross-potter-825390ab" class="icon fa-linkedin"></a></li>
<li><a href="https://github.com/rwkpotter" class="icon fa-github"></a></li>
<li><a href="mailto:rwkpotter@gmail.com" class="icon fa-google"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Ross Potter</li>
					<li>Based on a <a href="http://templated.co">TEMPLATED</a> design</li>

						<li>Images: <a href="http://http://www.publicdomainpictures.net/">Public Domain Pictures</a></li>
					</ul>
				</div>
			</footer>
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
	<script>
	$(".intro .button").on("click", function(e){
			e.preventDefault();
			var section=$("#one");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	$(".more .button").on("click", function(e){
			e.preventDefault();
			var section=$("#two");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	</script>
</html>