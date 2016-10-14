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
						<li><a href="elements.php">About Me</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>


		<!-- Banner -->
			<section id="banner">
				<h2>New York City Citi Bike:</h2>
				<p>Choose your analysis</p>
		<ul class="actions"> 
			<li><a href="#user" class="button">User demographic</a></li>	
			<li class="trip"><a href="#trip" class="button">Trip statistics</a></li>
			<li class="revenue"><a href="#revenue" class="button">Revenue</a></li>
			<li class="station"><a href="#station" class="button">Station popularity</a></li>
			<li class="route"><a href="#route" class="button">Route popularity</a></li>
			<li class="predict"><a href="#predict" class="button">Predicted popularity</a></li>
			<li class="subscribe"><a href="#subscribe" class="button">Predicted subscriptions</a></li>
				</ul>

				<ul class="actions data">
					<li><a href="#data" class="button special small">About the data</a></li>
				</ul>
			</section>



			<link
    href="https://cdn.pydata.org/bokeh/release/bokeh-0.12.1.min.css"
    rel="stylesheet" type="text/css">
			<link
    href="https://cdn.pydata.org/bokeh/release/bokeh-widgets-0.12.1.min.css"
    rel="stylesheet" type="text/css">

	<script src="https://cdn.pydata.org/bokeh/release/bokeh-0.12.1.min.js"></script>
	<script src="https://cdn.pydata.org/bokeh/release/bokeh-widgets-0.12.1.min.js"></script>


		<!-- Main -->
			<section id="user" class="wrapper style1 special">
				<div class="container">

					<header class="major">
						<h2>User Demographic I</h2>
						<p>Majority of users men; seasonal change in use; 
						increase in journeys over time</p>
					</header>
		
	
					<!--<a href="#" class="image fit"><img src="images/journeysperqtr.png" alt="" /></a>-->
			<a href="#" class="image fit"><img src="images/journeysperqtr.png" alt="" /></a>



					<p>This graph illustrates the number of journeys made on the network, per quarter, since its introduction. The total number of journeys is divided by gender - male, female, and those that did not identify.</p>

					<p>These data demonstrate that the majority of users are male; they account for ~75% of all journeys made. This suggests that Citi bike marketing may wish to focus advertising and incentives on women to join the scheme, to maximize the program's growth and revenue.</p>

					<p>These data also illustrate the cyclical nature of use, with more journeys in the summer (Q3) compared to the winter (Q1). This suggests that the scheme may want to tailor bike availbility for the season. For example, have less bikes in operation during the winter.</p>

					<header  class="major">
						<h2>User Demographic II</h2>
						<p>25-35s largest network users; 15-20s increase use during autumn</p>
					</header>

					

								<div id="user2" class="bk-root">
    			<div class="plotdiv" id="6967b531-ba0b-4716-8624-9f7c47dafe31"></div>
								</div>



					<p>This interactive graph illustrates the number of journeys made on the network by age group, per quarter. Age groups can be (de)selected by clicking on the groups to the left of the graph.</p>
					<p>These data demonstrate that 25-35 year olds are the main users of the network.</p>
					<p>As with the graph above, the cyclical nature of the network's use is seen. Interestingly, unlike the majority of age groups, use of the network during autumn (Q4) increases on the previous quarter for the 15-20 age group. This may well be due to the start of the academic year, with more students present.</p> 
					<p>Note that users can choose to give their birth year. Birth years are not available for all users. Due to the relatively small number of users with given ages greater than 80 (less than 1% of total users), these users were omitted.</p>


					<ul class="actions">
							<li class="more"><a href="#trip" class="button alt small">More</a></li>
						</ul>
				</div>
			</section>



	<section id="trip" class="wrapper style2 special">
				<div class="container">

					<header class="major special">
						<h2>Trip statistics</h2>
						<p>Customer journeys longer than subscribers; average journey time for June 2016 exceeded the 30 minute fee journey threshold</p>
					</header>

					<a href="#" class="image fit"><img src="images/avgtriptime.png" alt="" /></a>
					<p>This graph illustrates the average trip time (in minutes) for customers and subscribers for July 2013, June 2014, June 2015, and June 2016. Customers are defined as users who rent a bike for one or three days; subscribers have paid a yearly fee. Note that the average trip time for customers is ~2-3x greater than that for subscribers. The average trip time for customers has increased annually (up almost 40% from 2013 to 2016), while average trip time for subscribers decreased through 2015, increasing to approximately 2013 numbers in 2016. Finally, the average trip time for customers in June 2016 exceeded the 30 minute no additional charge threshold. Customers are charged an additional $4 for each additional 15 minute period beyond 30 minutes. Consequently, the scheme, on average,  received $4 more per trip in June 2016 compared to the previous years.</p>

					<ul class="actions">
						<li class="more"><a href="#revenue" class="button alt small">More</a></li>
					</ul>
				</div>

			</section>

		<section id="revenue" class="wrapper style1 special">
				<div class="container">

					<header class="major special">
						<h2>Revenue</h2>
						<p>Over $10 million made from customer journeys exceeding 30 minutes</p>
					</header>

					<a href="#" class="image fit"><img src="images/revenuebyqtr.png" alt="" /></a>
					<p>This graph illustrates the amount of revenue made, each quarter, from customers who exceed the 30 minute no-charge threshold. Customers are charged an additional $4 for each additional 15 minute period beyond 30 minutes. For each year, the summer (Q3) has produced the most revenue from journeys over 30 minutes.</p>
				</div>


		<ul class="actions">
				<li class="more"><a href="#station" class="button alt small">More</a></li>
				</ul>
			</section>

		<section id="station" class="wrapper style2 special">
				<div class="container">

					<header class="major special">
						<h2>Station Popularity</h2>
						<p>Most popular station, Pershing Sq. North, located next to Grand Central Station</p>
					</header>

					<iframe width="100%" height="520" frameborder="0" src="https://rwkpotter.carto.com/viz/d473213c-7953-11e6-b63d-0ef24382571b/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
					<p>This interactive map can be used to view the location of each bike station and their popularity, represented by the number of journeys started at each station. <em>Click on the visible layers tab to get started</em>. The datasets available are for four quarters: the first quarter of the scheme's operation (Q3-2013: q3_2013); and then Q2 for the years 2014, 2015, and 2016 (q2_2014; q2_215; q2_2016, respectively). Note that the scale changes for each dataset on the map. More information about each station can be viewed by hovering or clicking on the icon. The most accessed stations for each of the quarters were: 2013 - W 20 St &amp; 11 Ave (station 459: 40.74674 lat, -74.00776 long; 2014 - E 42 St &amp; Vanderbilt Ave (station 519: 40.752416 lat, -73.97837); 2015 and 2016 - Pershing Square North (station 519: 40.75187 lat, -73.97771 long).</p>
				</div>

				<ul class="actions">
						<li class="more"><a href="#route" class="button alt small">More</a></li>
				</ul>
			</section>

	<section id="route" class="wrapper style1 special">
				<div class="container">

					<header class="major special">
						<h2>Route Popularity</h2>
						<p>20% of the most popular routes start and end at the same station</p>
					</header>

					<iframe width="100%" height="520" frameborder="0" src="https://rwkpotter.carto.com/viz/39cfbb6e-7ec5-11e6-ba51-0e05a8b3e3d7/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
					<p>This interactive map can be used to view the most popular routes on the network. Popularity is defined here by routes which account for more than 15% of journeys from a given station. <em>Click on the visible layers tab to get started</em>. The dataset is for the second quarter of 2016 (routesq22016_start, routesq2015_end, route connector). Almost 20% of these routes start and end at the same station. This includes the most popular route - a round trip from the Yankee Ferry Terminal, which accounts for 51% of all journeys made from the terminal. The most popular route, in terms of frequency, was a round trip from Central Park South &amp; 6th Avenue (with 3576 journeys).</p>

					<p>Starting stations with less than 20 starting journeys were omitted. The distribution of all bike stations for Q2 2016 (q2_2016) is already selected. The distrbution for Q2 2015 can also be viewed by clicking on the visible layers tab and making the appropriate selection (q2_2015). This highlights the expansion of the network further into Brooklyn, Manhattan and into Queens.</p>
				</div>

				<ul class="actions">
						<li class="more"><a href="#predict" class="button alt small">More</a></li>
				</ul>

		</section>



		<section id="predict" class="wrapper style2 special">
				<div class="container">

					<header class="major special">
						<h2>Predicted Popularity</h2>
						<p>New Manhattan and Jersey City stations predicted to be most popular</p>
					</header>



				<div class="bk-root">
    		<div class="plotdiv" id="561b7733-3fc0-458a-b6bc-5cd19e375119"></div>
				</div>



		<p>This graph shows the total number of bikes (in red) and stations (in blue) on the network, illustrating the first expansion of the network between Q2 and Q3 of 2015. The number of stations increased by ~40%, the number of bikes increased by ~35%. As of Q2 2016, there were 484 stations and ~8400 bikes. Further expansion is underway in 2016.</p>




					<iframe width="100%" height="520" frameborder="0" src="https://rwkpotter.carto.com/viz/f8f503ef-c92f-4ea2-a7fc-5e0c7a95566d/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
					<p>This interactive map can be used to view the existing, planned and newly installed stations on the network (expansion_2016), and the predicted popularity (number of starting journeys) of those planned (predictplannedq2) and newly installed (predictedinstalledq2). Popularity was predicted using a K nearest neighbours machine learning algorithm. Data from Q2 2016 (q2_2016) was used to train the algorithm. Due to the seasonal use of the bike scheme, the predicted use is, therefore, for Q2 2017. <em>Click on the visible layers tab to get started</em>.</p>

					<p>The predicted popularity for the installed and planned stations is on the same scale as that for Q2 2016. Of the newer stations, the Manhattan stations on the Upper West Side (west of Central Park) and the stations in Jersey City are predicted to be the most used (~11000-15000 journeys for Q2 2017). Stations in Brooklyn are predicted to have ~3000-4000 journeys.</p>
				</div>

				<ul class="actions">
						<li class="more"><a href="#data" class="button alt small">More</a></li>
				</ul>

		</section>


<section id="subscribe" class="wrapper style1 special">
				<div class="container">

					<header class="major special">
						<h2>Subscriber predictions</h2>
						<p>XX% increase in annual subsribers per quarter</p>
					</header>

					<a href="#" class="image fit"><img src="images/revenuebyqtr.png" alt="" /></a>
					<p>This graph shows the total annual number of subscribers to the network since the network's opening (in red). Using this data, a linear regression model was used to predict the total number of subscribers through 2017 and 2018 (blue dots). Though subscriber uptake may be lower during the winter months, the prediction suggests the total number of subscribers will increase XX% per quarter on average.</p>

					
				</div>

				<ul class="actions">
						<li class="more"><a href="#predict" class="button alt small">More</a></li>
				</ul>

		</section>



			<section id="data" class="wrapper style2 special">
				<div class="container">

					<header class="major special">
						<h2>About the data</h2>
					
					</header>

				<p>Data for journeys made on the scheme can be accessed from <a href="https://s3.amazonaws.com/tripdata/index.html">Amazon web services</a>.
				Data is available for each month from July 2013. Each datafile contains information on: trip duration (including timestamps for trip start and end); start/end station (including station ID); bike ID; user type (i.e., annual subscriber or customer); gender; and year of birth. Learn more about Citi Bike by visiting its <a href="https://www.citibikenyc.com/">website</a>.</p>
				<p>Quarters in the above analyses are defined as: Q1 - January to March; Q2 - April to June; Q3 - July to September; Q4 - October to December. These are treated as analogies to winter, spring, summer and autumn, respectively.</p>
				<p>Analyses were carried out primarily using the programming language R.</p>
				</div>

		<ul class="actions buttonmove">
	<li><a href="recommendations.php" class="button special big">What does it all mean?</a></li>
	<li><a href="analysis.php" class="button big">Back to top</a></li>
		</ul>

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
			var section=$("#user");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	
	$(".morerevenue .button").on("click", function(e){
			e.preventDefault();
			var section=$("#revenue");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	</script>
			      	
<script type="text/javascript">
    Bokeh.$(function() {
    var docs_json = {"5fd06352-ab80-4a26-bc20-704af9f9fd1e":{"roots":{"references":[{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"8f789a4d-f2c9-4196-90c5-a870c246cfda","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"831c7f01-6885-44a4-b506-266e329dee17","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[16390,14562,9871,19562,21172,14907,9083,22552,26368,25565,21469,33626]}},"id":"ea662026-4cb5-4d9f-9a4e-67b6302a4f63","type":"ColumnDataSource"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[211603,189384,92729,203917,221837,155740,87173,215117,266714,255544,192243,308023]}},"id":"a9da37df-4d41-4de1-91d5-2f72b6dc7b46","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"8dbd8ded-d185-4600-aa60-75a485f4e5d2","type":"ColumnDataSource"},"glyph":{"id":"e46bd028-d1b2-4196-966f-17022e278c24","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"10476e35-e5e3-41ed-b0b3-bcd7d0819a3e","type":"Line"},"selection_glyph":null},"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"554d527c-1455-49d2-ac33-e86f67cbb31f","type":"ColumnDataSource"},"glyph":{"id":"c8da6e5e-8075-4d93-9573-5989d177693e","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"831c7f01-6885-44a4-b506-266e329dee17","type":"Line"},"selection_glyph":null},"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"red"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"25f001a0-d080-4c9d-9a8b-413b8fa663d2","type":"Line"},{"attributes":{"plot":null,"text":"NUMBER OF JOURNEYS MADE BY AGE GROUP"},"id":"c636cb44-84af-407e-8ab7-b13ffdf2151b","type":"Title"},{"attributes":{"data_source":{"id":"d75b8570-e0fd-476d-97e9-d7452c613330","type":"ColumnDataSource"},"glyph":{"id":"b9a2e5fe-804e-4653-a3c7-28b158fd674b","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"e35b4099-4868-431a-b077-e081242eac19","type":"Line"},"selection_glyph":null},"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"c1eb10c9-34f2-432c-bac6-eceb7d407d60","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[5424,4879,2915,6640,7120,5885,4006,9129,10581,10572,8404,12770]}},"id":"554d527c-1455-49d2-ac33-e86f67cbb31f","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"39f5256d-6550-424f-9ad6-e7547c2a94a2","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[332872,258389,126810,298476,340802,214245,108252,292642,384794,339207,243878,417071]}},"id":"a2cc2b16-83db-4d62-88b9-d64117285fa9","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"navy"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e540017a-6093-4163-8fa6-7e45addaa49f","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"6d6e5a3d-f48f-4dec-8bd3-c78e9919ead6","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[152404,140341,74402,160867,181942,129854,73869,179758,218826,214674,157535,248089]}},"id":"ba1960b1-a824-4b84-adf1-99eccd89bd1c","type":"ColumnDataSource"},{"attributes":{},"id":"fa63133c-18f4-48b7-836e-3ad8546eac78","type":"CategoricalTickFormatter"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"f4a61197-9efd-453e-9982-048b3bde1778","type":"BoxAnnotation"},{"attributes":{"data_source":{"id":"ba1960b1-a824-4b84-adf1-99eccd89bd1c","type":"ColumnDataSource"},"glyph":{"id":"e540017a-6093-4163-8fa6-7e45addaa49f","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"186d28fe-e54d-4103-8d67-9e8b0f6a0d60","type":"Line"},"selection_glyph":null},"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"7c54071c-febd-436d-a37d-31c0d19d2979","type":"PanTool"},{"attributes":{"below":[{"id":"d828432c-d56c-4a05-8759-d988180d41b8","type":"CategoricalAxis"}],"left":[{"id":"6204627e-851e-4b15-a433-11d341d70d9c","type":"LinearAxis"}],"renderers":[{"id":"d828432c-d56c-4a05-8759-d988180d41b8","type":"CategoricalAxis"},{"id":"a89d1645-3a30-420a-af46-ea69907f658c","type":"Grid"},{"id":"6204627e-851e-4b15-a433-11d341d70d9c","type":"LinearAxis"},{"id":"09dfbe30-96fd-42dc-852a-676dac3e810c","type":"Grid"},{"id":"f4a61197-9efd-453e-9982-048b3bde1778","type":"BoxAnnotation"},{"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"},{"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"},{"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"},{"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"},{"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"},{"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"},{"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"},{"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"},{"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"},{"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"},{"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"},{"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"},{"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"},{"id":"62b71f6f-ac71-4d29-87a2-34934d20cbc2","type":"Legend"}],"right":[{"id":"62b71f6f-ac71-4d29-87a2-34934d20cbc2","type":"Legend"}],"title":{"id":"c636cb44-84af-407e-8ab7-b13ffdf2151b","type":"Title"},"tool_events":{"id":"07b35e95-6536-43c3-a440-28bdc6a5fc03","type":"ToolEvents"},"toolbar":{"id":"aebb7405-ebfd-4845-9605-8c9029f74e7e","type":"Toolbar"},"toolbar_location":"below","toolbar_sticky":false,"x_range":{"id":"2777d8f0-4cc7-4d3e-b74f-e3aaaff897ce","type":"FactorRange"},"y_range":{"id":"da97c12f-ac01-4499-9583-7f365a74a684","type":"DataRange1d"}},"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[97369,91124,49130,102207,113276,82390,48159,116961,143450,141546,114922,172161]}},"id":"3911bd34-2582-4e83-b00d-0078981c99d9","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"a9da37df-4d41-4de1-91d5-2f72b6dc7b46","type":"ColumnDataSource"},"glyph":{"id":"90ed38f7-e498-4cea-8e32-aaf0b5f6b175","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"700cb973-635c-4875-9b50-d980823d8072","type":"Line"},"selection_glyph":null},"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"},{"attributes":{"overlay":{"id":"f4a61197-9efd-453e-9982-048b3bde1778","type":"BoxAnnotation"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"cf437f65-f1da-482d-ab0a-3da6b9a66c51","type":"BoxZoomTool"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"1cca979b-1c18-4bd9-bc68-a46ba1b4bc54","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"700cb973-635c-4875-9b50-d980823d8072","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[230271,223712,75864,203388,267029,178601,60108,184699,293900,273024,135605,272284]}},"id":"582c935e-481d-482e-8f19-2f0910b2203c","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"skyblue"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"90ed38f7-e498-4cea-8e32-aaf0b5f6b175","type":"Line"},{"attributes":{"axis_label":"Yearly Quarters","formatter":{"id":"fa63133c-18f4-48b7-836e-3ad8546eac78","type":"CategoricalTickFormatter"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"3e59dbe8-9de2-482d-b916-7cd8110e5af9","type":"CategoricalTicker"}},"id":"d828432c-d56c-4a05-8759-d988180d41b8","type":"CategoricalAxis"},{"attributes":{"data_source":{"id":"582c935e-481d-482e-8f19-2f0910b2203c","type":"ColumnDataSource"},"glyph":{"id":"95cc0934-849e-431b-a82c-e0fb1188dbf4","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"39f5256d-6550-424f-9ad6-e7547c2a94a2","type":"Line"},"selection_glyph":null},"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"},{"attributes":{"dimension":1,"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"0220d6f1-fa66-4be9-9bbd-37ca89d89f85","type":"BasicTicker"}},"id":"09dfbe30-96fd-42dc-852a-676dac3e810c","type":"Grid"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"green"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"6b388b46-6d3d-4805-a637-7d6cbf4fa3e3","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"lightgreen"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"95cc0934-849e-431b-a82c-e0fb1188dbf4","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[476388,360195,171830,414823,482496,283089,138500,410081,563867,485283,341626,607277]}},"id":"c1872606-ea58-46ec-9fe4-e360dc5d5478","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"32deb42f-d39d-455b-8289-700c40a79103","type":"ColumnDataSource"},"glyph":{"id":"6b388b46-6d3d-4805-a637-7d6cbf4fa3e3","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"fbb244cc-a580-4129-bfce-a3f6e9f9be5b","type":"Line"},"selection_glyph":null},"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"purple"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"22f97881-7ff1-45c9-a2b3-2d17b990604c","type":"Line"},{"attributes":{"active":[0,1,2,3,4,5,6,7,8,9,10,11,12],"callback":{"id":"c9aa5d78-0edb-4335-886d-b543a15d820d","type":"CustomJS"},"labels":["15-20","20-25","25-30","30-35","35-40","40-45","45-50","50-55","55-60","60-65","65-70","70-75","75-80"],"width":100},"id":"8a874135-d35f-41fe-b137-65a849d643c8","type":"CheckboxGroup"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"dd593407-2a6a-4795-9ee8-d74050a14470","type":"WheelZoomTool"},{"attributes":{"data_source":{"id":"4a38f067-1745-4b9e-986b-b2a7fc56ff56","type":"ColumnDataSource"},"glyph":{"id":"22f97881-7ff1-45c9-a2b3-2d17b990604c","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"8f789a4d-f2c9-4196-90c5-a870c246cfda","type":"Line"},"selection_glyph":null},"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"3911bd34-2582-4e83-b00d-0078981c99d9","type":"ColumnDataSource"},"glyph":{"id":"4acf6b7c-86ed-46d6-ad0e-d988d1fcd69e","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"d8d74d56-d012-42f3-a192-61f94b2f7977","type":"Line"},"selection_glyph":null},"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[46749,40970,24521,51437,56745,40303,26774,64483,78871,73830,63113,94295]}},"id":"4a38f067-1745-4b9e-986b-b2a7fc56ff56","type":"ColumnDataSource"},{"attributes":{"band_fill_alpha":{"value":0.1},"band_fill_color":{"value":"navy"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"3e59dbe8-9de2-482d-b916-7cd8110e5af9","type":"CategoricalTicker"}},"id":"a89d1645-3a30-420a-af46-ea69907f658c","type":"Grid"},{"attributes":{"format":"%4.1e"},"id":"cf7272ee-c609-4f5b-8c8f-64dc656e99c6","type":"PrintfTickFormatter"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"cc7ef190-5f62-4c74-8e88-ffccf886d7bc","type":"Line"},{"attributes":{"args":{"checkbox":{"id":"8a874135-d35f-41fe-b137-65a849d643c8","type":"CheckboxGroup"},"g0":{"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"},"g1":{"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"},"g10":{"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"},"g11":{"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"},"g12":{"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"},"g2":{"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"},"g3":{"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"},"g4":{"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"},"g5":{"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"},"g6":{"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"},"g7":{"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"},"g8":{"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"},"g9":{"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"}},"code":"\n    if (checkbox.active.includes(0)) {\n        g0.visible = true\n    } else {\n        g0.visible = false\n    }\n    if (checkbox.active.includes(1)) {\n        g1.visible = true\n    } else {\n        g1.visible = false\n    }\n    if (checkbox.active.includes(2)) {\n        g2.visible = true\n    } else {\n        g2.visible = false\n    }\n    if (checkbox.active.includes(3)) {\n        g3.visible = true\n    } else {\n        g3.visible = false\n    }\n    if (checkbox.active.includes(4)) {\n        g4.visible = true\n    } else {\n        g4.visible = false\n    }\n    if (checkbox.active.includes(5)) {\n        g5.visible = true\n    } else {\n        g5.visible = false\n    }\n       if (checkbox.active.includes(6)) {\n        g6.visible = true\n    } else {\n        g6.visible = false\n    }\n    if (checkbox.active.includes(7)) {\n        g7.visible = true\n    } else {\n        g7.visible = false\n    }\n    if (checkbox.active.includes(8)) {\n        g8.visible = true\n    } else {\n        g8.visible = false\n    }\n       if (checkbox.active.includes(9)) {\n        g9.visible = true\n    } else {\n        g9.visible = false\n    }\n    if (checkbox.active.includes(10)) {\n        g10.visible = true\n    } else {\n        g10.visible = false\n    }\n    if (checkbox.active.includes(11)) {\n        g11.visible = true\n    } else {\n        g11.visible = false\n    }\n    if (checkbox.active.includes(12)) {\n        g12.visible = true\n    } else {\n        g12.visible = false\n    }\n    \n\n"},"id":"c9aa5d78-0edb-4335-886d-b543a15d820d","type":"CustomJS"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[24696,36087,9449,21814,32928,32724,8531,21178,35301,45700,19337,36216]}},"id":"d75b8570-e0fd-476d-97e9-d7452c613330","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"d8d74d56-d012-42f3-a192-61f94b2f7977","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"grey"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"c8da6e5e-8075-4d93-9573-5989d177693e","type":"Line"},{"attributes":{"children":[{"id":"8a874135-d35f-41fe-b137-65a849d643c8","type":"CheckboxGroup"}],"width":100},"id":"ef9e0f25-3a3e-423a-88ad-a4a179de992e","type":"WidgetBox"},{"attributes":{"data_source":{"id":"c1872606-ea58-46ec-9fe4-e360dc5d5478","type":"ColumnDataSource"},"glyph":{"id":"ca7640ca-ddd3-4648-b146-7e9f0a0dc327","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"6d6e5a3d-f48f-4dec-8bd3-c78e9919ead6","type":"Line"},"selection_glyph":null},"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"a2cc2b16-83db-4d62-88b9-d64117285fa9","type":"ColumnDataSource"},"glyph":{"id":"1626e0b7-19e1-4ca0-8db0-cc6d83faa013","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"cc7ef190-5f62-4c74-8e88-ffccf886d7bc","type":"Line"},"selection_glyph":null},"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"pink"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"1626e0b7-19e1-4ca0-8db0-cc6d83faa013","type":"Line"},{"attributes":{},"id":"07b35e95-6536-43c3-a440-28bdc6a5fc03","type":"ToolEvents"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"violet"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"4acf6b7c-86ed-46d6-ad0e-d988d1fcd69e","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"orange"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"ca7640ca-ddd3-4648-b146-7e9f0a0dc327","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"186d28fe-e54d-4103-8d67-9e8b0f6a0d60","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"10476e35-e5e3-41ed-b0b3-bcd7d0819a3e","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e46bd028-d1b2-4196-966f-17022e278c24","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[499815,398431,174314,444539,521910,312695,136043,419381,596231,510995,333223,639104]}},"id":"32deb42f-d39d-455b-8289-700c40a79103","type":"ColumnDataSource"},{"attributes":{},"id":"3e59dbe8-9de2-482d-b916-7cd8110e5af9","type":"CategoricalTicker"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"yellow"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"b9a2e5fe-804e-4653-a3c7-28b158fd674b","type":"Line"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"1f0a9392-e835-42e9-bcaa-eec2ee58aea1","type":"SaveTool"},{"attributes":{"axis_label":"Number of Journeys","formatter":{"id":"cf7272ee-c609-4f5b-8c8f-64dc656e99c6","type":"PrintfTickFormatter"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"0220d6f1-fa66-4be9-9bbd-37ca89d89f85","type":"BasicTicker"}},"id":"6204627e-851e-4b15-a433-11d341d70d9c","type":"LinearAxis"},{"attributes":{"active_drag":"auto","active_scroll":"auto","active_tap":"auto","tools":[{"id":"7c54071c-febd-436d-a37d-31c0d19d2979","type":"PanTool"},{"id":"dd593407-2a6a-4795-9ee8-d74050a14470","type":"WheelZoomTool"},{"id":"cf437f65-f1da-482d-ab0a-3da6b9a66c51","type":"BoxZoomTool"},{"id":"1f0a9392-e835-42e9-bcaa-eec2ee58aea1","type":"SaveTool"},{"id":"308ac64b-8499-4c49-8b25-49a5cc450f22","type":"ResetTool"},{"id":"49cb85c8-35eb-4b8a-8908-5e9b1c6978ee","type":"HelpTool"}]},"id":"aebb7405-ebfd-4845-9605-8c9029f74e7e","type":"Toolbar"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"fbb244cc-a580-4129-bfce-a3f6e9f9be5b","type":"Line"},{"attributes":{"callback":null,"factors":["Q3-13","Q4-13","Q1-14","Q2-14","Q3-14","Q4-14","Q1-15","Q2-15","Q3-15","Q4-15","Q1-16","Q2-16"]},"id":"2777d8f0-4cc7-4d3e-b74f-e3aaaff897ce","type":"FactorRange"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"308ac64b-8499-4c49-8b25-49a5cc450f22","type":"ResetTool"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[276981,236405,114211,254391,281794,190953,101961,253081,320963,309649,208265,337964]}},"id":"1a5b2f34-00cc-4a12-8c27-c2079be14835","type":"ColumnDataSource"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"49cb85c8-35eb-4b8a-8908-5e9b1c6978ee","type":"HelpTool"},{"attributes":{},"id":"0220d6f1-fa66-4be9-9bbd-37ca89d89f85","type":"BasicTicker"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[1130,1017,686,1255,1378,1085,546,1228,1641,1769,2087,2827]}},"id":"8dbd8ded-d185-4600-aa60-75a485f4e5d2","type":"ColumnDataSource"},{"attributes":{"children":[{"id":"ef9e0f25-3a3e-423a-88ad-a4a179de992e","type":"WidgetBox"},{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}]},"id":"1b60116c-78c7-4ec6-afcb-a0291be590bb","type":"Row"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"brown"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"521fb15b-e15b-4340-8a89-b85f2d0c57cf","type":"Line"},{"attributes":{"data_source":{"id":"1a5b2f34-00cc-4a12-8c27-c2079be14835","type":"ColumnDataSource"},"glyph":{"id":"25f001a0-d080-4c9d-9a8b-413b8fa663d2","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"1cca979b-1c18-4bd9-bc68-a46ba1b4bc54","type":"Line"},"selection_glyph":null},"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e35b4099-4868-431a-b077-e081242eac19","type":"Line"},{"attributes":{"legends":[["15-20",[{"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"}]],["20-25",[{"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"}]],["25-30",[{"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"}]],["30-35",[{"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"}]],["35-40",[{"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"}]],["40-45",[{"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"}]],["45-50",[{"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"}]],["50-55",[{"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"}]],["55-60",[{"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"}]],["60-65",[{"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"}]],["65-70",[{"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"}]],["70-75",[{"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"}]],["75-80",[{"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"}]]],"location":[0,-30],"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"62b71f6f-ac71-4d29-87a2-34934d20cbc2","type":"Legend"},{"attributes":{"callback":null},"id":"da97c12f-ac01-4499-9583-7f365a74a684","type":"DataRange1d"},{"attributes":{"data_source":{"id":"ea662026-4cb5-4d9f-9a4e-67b6302a4f63","type":"ColumnDataSource"},"glyph":{"id":"521fb15b-e15b-4340-8a89-b85f2d0c57cf","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"c1eb10c9-34f2-432c-bac6-eceb7d407d60","type":"Line"},"selection_glyph":null},"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"}],"root_ids":["1b60116c-78c7-4ec6-afcb-a0291be590bb"]},"title":"Bokeh Application","version":"0.12.1"}};
    var render_items = [{"docid":"5fd06352-ab80-4a26-bc20-704af9f9fd1e","elementid":"6967b531-ba0b-4716-8624-9f7c47dafe31","modelid":"1b60116c-78c7-4ec6-afcb-a0291be590bb"}];
    
    Bokeh.embed.embed_items(docs_json, render_items);
});
</script>

<!-- BOKE AND STATION PLOT-########-->
<script type="text/javascript">
    Bokeh.$(function() {
    var docs_json = {"6b053777-ec5c-4c62-86a1-5fbb623ebaa2":{"roots":{"references":[{"attributes":{"axis_label":"bikes","axis_label_text_color":{"value":"red"},"formatter":{"id":"afbc45b1-9b2e-4492-b918-3bc2f8134d39","type":"BasicTickFormatter"},"major_label_text_color":{"value":"red"},"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"ticker":{"id":"110bb844-e2f3-4109-9aa7-4a98c5ce8854","type":"BasicTicker"},"y_range_name":"NumStations"},"id":"9295296a-9fb2-433e-9272-4be6cb436f0b","type":"LinearAxis"},{"attributes":{"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"}},"id":"87a935dd-1ca9-40de-89fc-d4cba329a98a","type":"ResetTool"},{"attributes":{"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"text":"Bikes","x":3.15,"y":380},"id":"888cf4b4-4987-4c60-903a-6f46391fb393","type":"Label"},{"attributes":{"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"text":"Stations","x":3,"y":280},"id":"afcd3a75-6300-48d6-8f29-ec24047e6e4c","type":"Label"},{"attributes":{"plot":null,"text":"NUMBER OF BIKES AND STATIONS"},"id":"dc0af807-ead7-4050-b420-e370fc6cc52a","type":"Title"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"7df823c5-db87-4de6-aae2-1985656eced7","type":"Circle"},{"attributes":{"callback":null,"factors":["Q3-13","Q4-13","Q1-14","Q2-14","Q3-14","Q4-14","Q1-15","Q2-15","Q3-15","Q4-15","Q1-16","Q2-16"]},"id":"036de8a1-b72a-4c30-870c-99affd7ed31c","type":"FactorRange"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"b6565719-7029-40ed-b142-4d17def3983b","type":"BoxAnnotation"},{"attributes":{"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"}},"id":"102bbb4f-90da-4e54-930a-f516b8490424","type":"PanTool"},{"attributes":{"callback":null,"column_names":["x","y"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[5807,6415,6733,6668,6385,5966,5756,6057,8172,8002,7771,8398]}},"id":"5fbdb0d6-f671-4ac5-98e4-2dfbe964e7f6","type":"ColumnDataSource"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#1f77b4"},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"e012d707-8965-4db2-b95a-f20192a30aa2","type":"Circle"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"434ceb93-4a02-4e3a-a8b8-f0cb6469e284","type":"Line"},{"attributes":{"data_source":{"id":"94b66f79-c7ba-4eb5-a039-6ed078ac6d4d","type":"ColumnDataSource"},"glyph":{"id":"742a49ad-70fc-477a-97b1-13e376a721d0","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"434ceb93-4a02-4e3a-a8b8-f0cb6469e284","type":"Line"},"selection_glyph":null,"y_range_name":"NumStations"},"id":"267c7317-d954-4732-a0b2-54f6f23dec02","type":"GlyphRenderer"},{"attributes":{},"id":"3d4bad22-3ebd-4a70-b7bd-b03346e7e840","type":"CategoricalTicker"},{"attributes":{"fill_color":{"value":"red"},"line_color":{"value":"red"},"x":{"field":"x"},"y":{"field":"y"}},"id":"8e6a9c8c-319a-4565-acf5-9c1afb958b6d","type":"Circle"},{"attributes":{"callback":null,"end":500},"id":"b197b4c6-609e-48b3-8bc1-6a4c43d61899","type":"Range1d"},{"attributes":{"callback":null,"overlay":{"id":"b6565719-7029-40ed-b142-4d17def3983b","type":"BoxAnnotation"},"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"renderers":[{"id":"53e25a70-e72b-41f6-90e1-70d225404f80","type":"GlyphRenderer"},{"id":"4dceb867-a701-41c4-8fa2-8be7a1840f97","type":"GlyphRenderer"},{"id":"9bc0ac85-0b96-4e86-8e2d-0cfac659dfd9","type":"GlyphRenderer"},{"id":"267c7317-d954-4732-a0b2-54f6f23dec02","type":"GlyphRenderer"}]},"id":"4cdb6f7a-a846-4377-a157-4f10d165e9c3","type":"BoxSelectTool"},{"attributes":{"callback":null,"line_policy":"nearest","plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"tooltips":[["Quarter","$x"],["Number","@y"]]},"id":"cf576d11-098a-46e1-8e05-28ef36d09f81","type":"HoverTool"},{"attributes":{"data_source":{"id":"5fbdb0d6-f671-4ac5-98e4-2dfbe964e7f6","type":"ColumnDataSource"},"glyph":{"id":"8e6a9c8c-319a-4565-acf5-9c1afb958b6d","type":"Circle"},"hover_glyph":null,"nonselection_glyph":{"id":"7df823c5-db87-4de6-aae2-1985656eced7","type":"Circle"},"selection_glyph":null,"y_range_name":"NumStations"},"id":"9bc0ac85-0b96-4e86-8e2d-0cfac659dfd9","type":"GlyphRenderer"},{"attributes":{"dimension":1,"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"ticker":{"id":"0e7bc0d5-dec0-42ea-897f-62233e61d095","type":"BasicTicker"}},"id":"f9f1d6f0-4af4-4827-a021-6151ff51a142","type":"Grid"},{"attributes":{"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"ticker":{"id":"3d4bad22-3ebd-4a70-b7bd-b03346e7e840","type":"CategoricalTicker"}},"id":"8a2fc1e4-65a3-4cae-b0fc-9ad52f1b2e88","type":"Grid"},{"attributes":{"data_source":{"id":"aa08bc6a-c3e6-4455-89a6-3b5aed3f0208","type":"ColumnDataSource"},"glyph":{"id":"44e9af4e-6d79-4677-adde-24a0696c7138","type":"Circle"},"hover_glyph":null,"nonselection_glyph":{"id":"e012d707-8965-4db2-b95a-f20192a30aa2","type":"Circle"},"selection_glyph":null},"id":"53e25a70-e72b-41f6-90e1-70d225404f80","type":"GlyphRenderer"},{"attributes":{"line_color":{"value":"red"},"x":{"field":"x"},"y":{"field":"y"}},"id":"742a49ad-70fc-477a-97b1-13e376a721d0","type":"Line"},{"attributes":{"callback":null,"end":9000},"id":"9e4a77a9-41e1-4f64-ae29-6b76bd15dfc9","type":"Range1d"},{"attributes":{"fill_color":{"value":"blue"},"line_color":{"value":"blue"},"x":{"field":"x"},"y":{"field":"y"}},"id":"44e9af4e-6d79-4677-adde-24a0696c7138","type":"Circle"},{"attributes":{"line_color":{"value":"blue"},"x":{"field":"x"},"y":{"field":"y"}},"id":"7fd0da9f-5c1c-4612-b295-51313970d13a","type":"Line"},{"attributes":{},"id":"a48a2c6f-f6dd-4403-b861-c492d7585b19","type":"BasicTickFormatter"},{"attributes":{"active_drag":"auto","active_scroll":"auto","active_tap":"auto","tools":[{"id":"102bbb4f-90da-4e54-930a-f516b8490424","type":"PanTool"},{"id":"d16a90f7-99e1-4c9b-9feb-c0017be723f4","type":"BoxZoomTool"},{"id":"4cdb6f7a-a846-4377-a157-4f10d165e9c3","type":"BoxSelectTool"},{"id":"547652d0-a770-44ab-8828-bddad1d847ab","type":"ResizeTool"},{"id":"87a935dd-1ca9-40de-89fc-d4cba329a98a","type":"ResetTool"},{"id":"cf576d11-098a-46e1-8e05-28ef36d09f81","type":"HoverTool"}]},"id":"f7b1e2ee-c71a-428a-8b5d-c47c45a3b775","type":"Toolbar"},{"attributes":{"axis_label":"Number of Stations","axis_label_text_color":{"value":"blue"},"formatter":{"id":"a48a2c6f-f6dd-4403-b861-c492d7585b19","type":"BasicTickFormatter"},"major_label_text_color":{"value":"blue"},"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"ticker":{"id":"0e7bc0d5-dec0-42ea-897f-62233e61d095","type":"BasicTicker"}},"id":"cd1b56f2-900d-4d27-be8e-6a3fd6ddbd37","type":"LinearAxis"},{"attributes":{"overlay":{"id":"4e58d162-9666-45d7-bd58-bb775de26bc0","type":"BoxAnnotation"},"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"}},"id":"d16a90f7-99e1-4c9b-9feb-c0017be723f4","type":"BoxZoomTool"},{"attributes":{"callback":null,"column_names":["x","y"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[5807,6415,6733,6668,6385,5966,5756,6057,8172,8002,7771,8398]}},"id":"94b66f79-c7ba-4eb5-a039-6ed078ac6d4d","type":"ColumnDataSource"},{"attributes":{},"id":"9500d7f0-7a25-491c-8ca5-8bec81183bfa","type":"ToolEvents"},{"attributes":{"axis_label":"Yearly Quarters","formatter":{"id":"71626ab2-ce8a-4499-8de8-fdf0cf603a5c","type":"CategoricalTickFormatter"},"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"},"ticker":{"id":"3d4bad22-3ebd-4a70-b7bd-b03346e7e840","type":"CategoricalTicker"}},"id":"aab73fc7-007b-468c-8f1b-7343e8b51c45","type":"CategoricalAxis"},{"attributes":{},"id":"afbc45b1-9b2e-4492-b918-3bc2f8134d39","type":"BasicTickFormatter"},{"attributes":{"callback":null,"column_names":["x","y"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[330,330,331,331,330,331,331,330,460,475,477,484]}},"id":"5e9aa1db-5abe-48b7-8b75-707a84ec83ac","type":"ColumnDataSource"},{"attributes":{},"id":"110bb844-e2f3-4109-9aa7-4a98c5ce8854","type":"BasicTicker"},{"attributes":{},"id":"71626ab2-ce8a-4499-8de8-fdf0cf603a5c","type":"CategoricalTickFormatter"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"4e58d162-9666-45d7-bd58-bb775de26bc0","type":"BoxAnnotation"},{"attributes":{"callback":null,"column_names":["x","y"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[330,330,331,331,330,331,331,330,460,475,477,484]}},"id":"aa08bc6a-c3e6-4455-89a6-3b5aed3f0208","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"x":{"field":"x"},"y":{"field":"y"}},"id":"f9f11398-4a68-4737-84b9-05a921a535a7","type":"Line"},{"attributes":{"plot":{"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"}},"id":"547652d0-a770-44ab-8828-bddad1d847ab","type":"ResizeTool"},{"attributes":{"data_source":{"id":"5e9aa1db-5abe-48b7-8b75-707a84ec83ac","type":"ColumnDataSource"},"glyph":{"id":"7fd0da9f-5c1c-4612-b295-51313970d13a","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"f9f11398-4a68-4737-84b9-05a921a535a7","type":"Line"},"selection_glyph":null},"id":"4dceb867-a701-41c4-8fa2-8be7a1840f97","type":"GlyphRenderer"},{"attributes":{},"id":"0e7bc0d5-dec0-42ea-897f-62233e61d095","type":"BasicTicker"},{"attributes":{"below":[{"id":"aab73fc7-007b-468c-8f1b-7343e8b51c45","type":"CategoricalAxis"}],"extra_y_ranges":{"NumStations":{"id":"9e4a77a9-41e1-4f64-ae29-6b76bd15dfc9","type":"Range1d"}},"left":[{"id":"cd1b56f2-900d-4d27-be8e-6a3fd6ddbd37","type":"LinearAxis"}],"plot_height":400,"plot_width":800,"renderers":[{"id":"aab73fc7-007b-468c-8f1b-7343e8b51c45","type":"CategoricalAxis"},{"id":"8a2fc1e4-65a3-4cae-b0fc-9ad52f1b2e88","type":"Grid"},{"id":"cd1b56f2-900d-4d27-be8e-6a3fd6ddbd37","type":"LinearAxis"},{"id":"f9f1d6f0-4af4-4827-a021-6151ff51a142","type":"Grid"},{"id":"4e58d162-9666-45d7-bd58-bb775de26bc0","type":"BoxAnnotation"},{"id":"b6565719-7029-40ed-b142-4d17def3983b","type":"BoxAnnotation"},{"id":"53e25a70-e72b-41f6-90e1-70d225404f80","type":"GlyphRenderer"},{"id":"4dceb867-a701-41c4-8fa2-8be7a1840f97","type":"GlyphRenderer"},{"id":"9295296a-9fb2-433e-9272-4be6cb436f0b","type":"LinearAxis"},{"id":"9bc0ac85-0b96-4e86-8e2d-0cfac659dfd9","type":"GlyphRenderer"},{"id":"267c7317-d954-4732-a0b2-54f6f23dec02","type":"GlyphRenderer"},{"id":"afcd3a75-6300-48d6-8f29-ec24047e6e4c","type":"Label"},{"id":"888cf4b4-4987-4c60-903a-6f46391fb393","type":"Label"}],"right":[{"id":"9295296a-9fb2-433e-9272-4be6cb436f0b","type":"LinearAxis"}],"title":{"id":"dc0af807-ead7-4050-b420-e370fc6cc52a","type":"Title"},"tool_events":{"id":"9500d7f0-7a25-491c-8ca5-8bec81183bfa","type":"ToolEvents"},"toolbar":{"id":"f7b1e2ee-c71a-428a-8b5d-c47c45a3b775","type":"Toolbar"},"toolbar_location":"below","toolbar_sticky":false,"x_range":{"id":"036de8a1-b72a-4c30-870c-99affd7ed31c","type":"FactorRange"},"y_range":{"id":"b197b4c6-609e-48b3-8bc1-6a4c43d61899","type":"Range1d"}},"id":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c","subtype":"Figure","type":"Plot"}],"root_ids":["4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c"]},"title":"Bokeh Application","version":"0.12.1"}};
    var render_items = [{"docid":"6b053777-ec5c-4c62-86a1-5fbb623ebaa2","elementid":"561b7733-3fc0-458a-b6bc-5cd19e375119","modelid":"4f6432fe-1e3c-4095-b6d2-f5c6cfa9131c"}];
    
    Bokeh.embed.embed_items(docs_json, render_items);
});
</script>		       


<!-- USERS BY AGE GROUP -->


<!-- BIKE AND STATION NUMBERS-->


</html>


<!--$(".trip .button").on("click", function(e){
			e.preventDefault();
			var section=$("#trip");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	$(".station .button").on("click", function(e){
			e.preventDefault();
			var section=$("#station");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	$(".revenue .button").on("click", function(e){
			e.preventDefault();
			var section=$("#revenue");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});
	$(".route .button").on("click", function(e){
			e.preventDefault();
			var section=$("#route");
			$("html,body").animate({
				scrollTop:section.offset().top
			},"slow");
		});-->