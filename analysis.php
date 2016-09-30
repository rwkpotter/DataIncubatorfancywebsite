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
				</ul>

				<ul class="actions data">
					<li><a href="#data" class="button special small">About the data</a></li>
				</ul>
			</section>


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
    <div class="plotdiv" id="b68acbff-2db9-46e5-b702-2136d746cb5f"></div>
</div>
	<link
		    href="https://cdn.pydata.org/bokeh/release/bokeh-0.12.1.min.css"
		    rel="stylesheet" type="text/css">
		<link
		    href="https://cdn.pydata.org/bokeh/release/bokeh-widgets-0.12.1.min.css"
		    rel="stylesheet" type="text/css">

		<script src="https://cdn.pydata.org/bokeh/release/bokeh-0.12.1.min.js"></script>
		<script src="https://cdn.pydata.org/bokeh/release/bokeh-widgets-0.12.1.min.js"></script>

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
						<p>Most popular station, Pershing Sq. North, located next to near Grand Central Station</p>
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
						<li class="more"><a href="#data" class="button alt small">More</a></li>
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
			      	
		       


        <!-- COPY/PASTE SCRIPT HERE -->
        <script type="text/javascript">
    Bokeh.$(function() {
    var docs_json = {"138cafae-6ebb-4426-af30-ee892fc21232":{"roots":{"references":[{"attributes":{"active_drag":"auto","active_scroll":"auto","active_tap":"auto","tools":[{"id":"d1772563-108f-494a-8cea-672b8e5bda4d","type":"PanTool"},{"id":"8f6500f2-9de8-4cc3-80ee-8d17dabdbc8f","type":"WheelZoomTool"},{"id":"938f51b5-29c3-479c-aba9-c302ee60db19","type":"BoxZoomTool"},{"id":"aeda06d6-7952-491d-a409-72086a5c4fb9","type":"SaveTool"},{"id":"718447d1-0021-4d29-86d4-d232e00ed28f","type":"ResetTool"},{"id":"63c1d131-9b79-4b28-b829-5fe748925713","type":"HelpTool"}]},"id":"75335c3a-4a11-432b-bd9e-ee160137924b","type":"Toolbar"},{"attributes":{},"id":"ee8a9aa7-c80a-4295-9ce4-599ac5fbef1e","type":"CategoricalTicker"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[276981,236405,114211,254391,281794,190953,101961,253081,320963,309649,208265,337964]}},"id":"27575ab2-f9a1-4421-aed7-0833d2e0847a","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"1f203560-56c4-4f47-bfd2-85280eba65f3","type":"Line"},{"attributes":{"data_source":{"id":"cf8cbfb4-fe1c-4b5f-8d4a-ac57c41037df","type":"ColumnDataSource"},"glyph":{"id":"34db8656-4e48-4eab-83ce-86d0f2fff500","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"d45be2fa-6f08-42be-8def-5876f36526f7","type":"Line"},"selection_glyph":null},"id":"ed030d32-b3ba-4cf7-a0c3-a53fc38f40ee","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"13a312d9-437f-456e-969f-2b529d64aa0c","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"navy"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"59455ef0-c41d-4a67-94f7-7d706f85e64d","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"d45be2fa-6f08-42be-8def-5876f36526f7","type":"Line"},{"attributes":{"overlay":{"id":"db7c9212-2be9-4ae2-b744-f71575abbb5a","type":"BoxAnnotation"},"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"938f51b5-29c3-479c-aba9-c302ee60db19","type":"BoxZoomTool"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"8b7e55ec-c9ad-46b3-a283-22adfdd7ab81","type":"Line"},{"attributes":{"data_source":{"id":"e52e34ee-6a26-4119-bbaa-ffe3b5b8158e","type":"ColumnDataSource"},"glyph":{"id":"b86ed3ff-404b-4b04-a1d0-a113acbe98cd","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"bab26463-fc14-4614-86ff-8a8a53b84e35","type":"Line"},"selection_glyph":null},"id":"c5aff5b7-4fea-41e8-9a80-b5fcb9605f42","type":"GlyphRenderer"},{"attributes":{"axis_label":"Yearly Quarters","formatter":{"id":"858d13e2-76ac-4490-9748-50566a8c23db","type":"CategoricalTickFormatter"},"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"},"ticker":{"id":"ee8a9aa7-c80a-4295-9ce4-599ac5fbef1e","type":"CategoricalTicker"}},"id":"aee16c48-7d1b-4fa1-88c4-3c3b798c2a5d","type":"CategoricalAxis"},{"attributes":{"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"aeda06d6-7952-491d-a409-72086a5c4fb9","type":"SaveTool"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"yellow"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"87fd44a7-9aa7-43d0-babc-81d8b2634990","type":"Line"},{"attributes":{"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"8f6500f2-9de8-4cc3-80ee-8d17dabdbc8f","type":"WheelZoomTool"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"db7c9212-2be9-4ae2-b744-f71575abbb5a","type":"BoxAnnotation"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[332872,258389,126810,298476,340802,214245,108252,292642,384794,339207,243878,417071]}},"id":"462355bc-1082-42c7-87ff-ba8f13fb1536","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"a9e099e3-0783-49e7-b362-7eb816d37160","type":"Line"},{"attributes":{"data_source":{"id":"27575ab2-f9a1-4421-aed7-0833d2e0847a","type":"ColumnDataSource"},"glyph":{"id":"e4d610da-e082-4a3f-92b8-28e32b61bff8","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"798d754c-a2c1-44a6-9048-ff366cbd27ec","type":"Line"},"selection_glyph":null},"id":"ce06987d-8ed5-40ef-8556-969048f80ee0","type":"GlyphRenderer"},{"attributes":{"legends":[["15-20",[{"id":"6ace6d92-15cb-4eeb-9183-56e0c08f29de","type":"GlyphRenderer"}]],["20-25",[{"id":"b747f8ea-4de5-4363-9aef-117827f774a7","type":"GlyphRenderer"}]],["25-30",[{"id":"e256d2b0-93c1-4908-bfb9-64ea6993ed85","type":"GlyphRenderer"}]],["30-35",[{"id":"c5aff5b7-4fea-41e8-9a80-b5fcb9605f42","type":"GlyphRenderer"}]],["35-40",[{"id":"9929834e-4079-4a51-86bb-4d41efa1b85f","type":"GlyphRenderer"}]],["40-45",[{"id":"ce06987d-8ed5-40ef-8556-969048f80ee0","type":"GlyphRenderer"}]],["45-50",[{"id":"5cd4c006-ef75-4d7c-9cb1-a75f0dfdaaf4","type":"GlyphRenderer"}]],["50-55",[{"id":"d1a75e34-595d-4fdd-b5d1-1bbd1dcba227","type":"GlyphRenderer"}]],["55-60",[{"id":"ed030d32-b3ba-4cf7-a0c3-a53fc38f40ee","type":"GlyphRenderer"}]],["60-65",[{"id":"3328bed5-c9bd-48ce-9e55-416115a42954","type":"GlyphRenderer"}]],["65-70",[{"id":"a0178c82-e73d-4cd5-884b-e2726e79c1e5","type":"GlyphRenderer"}]],["70-75",[{"id":"2d67b960-96ff-4dd5-b84f-4fb596415bd9","type":"GlyphRenderer"}]],["75-80",[{"id":"b25f98a8-9839-43ff-88e1-2b4bcf00d381","type":"GlyphRenderer"}]]],"location":[0,-30],"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"98edecd6-4730-489e-b933-92e85d6c78ad","type":"Legend"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"798d754c-a2c1-44a6-9048-ff366cbd27ec","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[1130,1017,686,1255,1378,1085,546,1228,1641,1769,2087,2827]}},"id":"5702857e-05c8-468d-88d8-f25294222b21","type":"ColumnDataSource"},{"attributes":{"args":{"checkbox":{"id":"19eb0c66-80c5-410d-9f4e-d3aba22c1794","type":"CheckboxGroup"},"g0":{"id":"6ace6d92-15cb-4eeb-9183-56e0c08f29de","type":"GlyphRenderer"},"g1":{"id":"b747f8ea-4de5-4363-9aef-117827f774a7","type":"GlyphRenderer"},"g10":{"id":"a0178c82-e73d-4cd5-884b-e2726e79c1e5","type":"GlyphRenderer"},"g11":{"id":"2d67b960-96ff-4dd5-b84f-4fb596415bd9","type":"GlyphRenderer"},"g12":{"id":"b25f98a8-9839-43ff-88e1-2b4bcf00d381","type":"GlyphRenderer"},"g2":{"id":"e256d2b0-93c1-4908-bfb9-64ea6993ed85","type":"GlyphRenderer"},"g3":{"id":"c5aff5b7-4fea-41e8-9a80-b5fcb9605f42","type":"GlyphRenderer"},"g4":{"id":"9929834e-4079-4a51-86bb-4d41efa1b85f","type":"GlyphRenderer"},"g5":{"id":"ce06987d-8ed5-40ef-8556-969048f80ee0","type":"GlyphRenderer"},"g6":{"id":"5cd4c006-ef75-4d7c-9cb1-a75f0dfdaaf4","type":"GlyphRenderer"},"g7":{"id":"d1a75e34-595d-4fdd-b5d1-1bbd1dcba227","type":"GlyphRenderer"},"g8":{"id":"ed030d32-b3ba-4cf7-a0c3-a53fc38f40ee","type":"GlyphRenderer"},"g9":{"id":"3328bed5-c9bd-48ce-9e55-416115a42954","type":"GlyphRenderer"}},"code":"\n    if (checkbox.active.includes(0)) {\n        g0.visible = true\n    } else {\n        g0.visible = false\n    }\n    if (checkbox.active.includes(1)) {\n        g1.visible = true\n    } else {\n        g1.visible = false\n    }\n    if (checkbox.active.includes(2)) {\n        g2.visible = true\n    } else {\n        g2.visible = false\n    }\n    if (checkbox.active.includes(3)) {\n        g3.visible = true\n    } else {\n        g3.visible = false\n    }\n    if (checkbox.active.includes(4)) {\n        g4.visible = true\n    } else {\n        g4.visible = false\n    }\n    if (checkbox.active.includes(5)) {\n        g5.visible = true\n    } else {\n        g5.visible = false\n    }\n       if (checkbox.active.includes(6)) {\n        g6.visible = true\n    } else {\n        g6.visible = false\n    }\n    if (checkbox.active.includes(7)) {\n        g7.visible = true\n    } else {\n        g7.visible = false\n    }\n    if (checkbox.active.includes(8)) {\n        g8.visible = true\n    } else {\n        g8.visible = false\n    }\n       if (checkbox.active.includes(9)) {\n        g9.visible = true\n    } else {\n        g9.visible = false\n    }\n    if (checkbox.active.includes(10)) {\n        g10.visible = true\n    } else {\n        g10.visible = false\n    }\n    if (checkbox.active.includes(11)) {\n        g11.visible = true\n    } else {\n        g11.visible = false\n    }\n    if (checkbox.active.includes(12)) {\n        g12.visible = true\n    } else {\n        g12.visible = false\n    }\n    \n\n"},"id":"f09d7cbb-aab6-41d1-b997-9dc8fcf69aa9","type":"CustomJS"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"purple"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"8088d3e4-e3ec-49c7-a208-2e3401a6709d","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"green"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"a0a7e299-b0db-43f6-8933-118ece82d3b1","type":"Line"},{"attributes":{"active":[0,1,2,3,4,5,6,7,8,9,10,11,12],"callback":{"id":"f09d7cbb-aab6-41d1-b997-9dc8fcf69aa9","type":"CustomJS"},"labels":["15-20","20-25","25-30","30-35","35-40","40-45","45-50","50-55","55-60","60-65","65-70","70-75","75-80"],"width":100},"id":"19eb0c66-80c5-410d-9f4e-d3aba22c1794","type":"CheckboxGroup"},{"attributes":{},"id":"897ef1ec-9156-4e73-963c-ada4cb64e3de","type":"ToolEvents"},{"attributes":{"data_source":{"id":"3e6162bb-05d9-49a9-8798-46cf9fce088f","type":"ColumnDataSource"},"glyph":{"id":"a2b37bf1-52f3-43d4-8ec2-9c3d1eb0de3d","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"101067b1-b207-4455-885b-a5e3bf0559e9","type":"Line"},"selection_glyph":null},"id":"b747f8ea-4de5-4363-9aef-117827f774a7","type":"GlyphRenderer"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[499815,398431,174314,444539,521910,312695,136043,419381,596231,510995,333223,639104]}},"id":"f47b2058-c371-4f1e-b5db-3a48c4ece737","type":"ColumnDataSource"},{"attributes":{"below":[{"id":"aee16c48-7d1b-4fa1-88c4-3c3b798c2a5d","type":"CategoricalAxis"}],"left":[{"id":"db8598a9-517a-4ff3-b79e-3c37287bcc87","type":"LinearAxis"}],"renderers":[{"id":"aee16c48-7d1b-4fa1-88c4-3c3b798c2a5d","type":"CategoricalAxis"},{"id":"a365de54-c052-4445-9ede-21d69a26bcfc","type":"Grid"},{"id":"db8598a9-517a-4ff3-b79e-3c37287bcc87","type":"LinearAxis"},{"id":"a7262829-3c44-47c4-9b2a-e1aeb7f2c555","type":"Grid"},{"id":"db7c9212-2be9-4ae2-b744-f71575abbb5a","type":"BoxAnnotation"},{"id":"6ace6d92-15cb-4eeb-9183-56e0c08f29de","type":"GlyphRenderer"},{"id":"b747f8ea-4de5-4363-9aef-117827f774a7","type":"GlyphRenderer"},{"id":"e256d2b0-93c1-4908-bfb9-64ea6993ed85","type":"GlyphRenderer"},{"id":"c5aff5b7-4fea-41e8-9a80-b5fcb9605f42","type":"GlyphRenderer"},{"id":"9929834e-4079-4a51-86bb-4d41efa1b85f","type":"GlyphRenderer"},{"id":"ce06987d-8ed5-40ef-8556-969048f80ee0","type":"GlyphRenderer"},{"id":"5cd4c006-ef75-4d7c-9cb1-a75f0dfdaaf4","type":"GlyphRenderer"},{"id":"d1a75e34-595d-4fdd-b5d1-1bbd1dcba227","type":"GlyphRenderer"},{"id":"ed030d32-b3ba-4cf7-a0c3-a53fc38f40ee","type":"GlyphRenderer"},{"id":"3328bed5-c9bd-48ce-9e55-416115a42954","type":"GlyphRenderer"},{"id":"a0178c82-e73d-4cd5-884b-e2726e79c1e5","type":"GlyphRenderer"},{"id":"2d67b960-96ff-4dd5-b84f-4fb596415bd9","type":"GlyphRenderer"},{"id":"b25f98a8-9839-43ff-88e1-2b4bcf00d381","type":"GlyphRenderer"},{"id":"98edecd6-4730-489e-b933-92e85d6c78ad","type":"Legend"}],"right":[{"id":"98edecd6-4730-489e-b933-92e85d6c78ad","type":"Legend"}],"title":{"id":"e1af9b2b-74b5-4854-89b6-c6fac93c826c","type":"Title"},"tool_events":{"id":"897ef1ec-9156-4e73-963c-ada4cb64e3de","type":"ToolEvents"},"toolbar":{"id":"75335c3a-4a11-432b-bd9e-ee160137924b","type":"Toolbar"},"toolbar_location":"below","toolbar_sticky":false,"x_range":{"id":"d6b6a7be-64a9-4f15-a363-40c84bea9990","type":"FactorRange"},"y_range":{"id":"af801548-8ab2-4aca-9f61-d1e6f780780b","type":"DataRange1d"}},"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"},{"attributes":{},"id":"858d13e2-76ac-4490-9748-50566a8c23db","type":"CategoricalTickFormatter"},{"attributes":{"callback":null},"id":"af801548-8ab2-4aca-9f61-d1e6f780780b","type":"DataRange1d"},{"attributes":{"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"718447d1-0021-4d29-86d4-d232e00ed28f","type":"ResetTool"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"8d291756-d582-487f-bc1a-f5304b4fa42f","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[476388,360195,171830,414823,482496,283089,138500,410081,563867,485283,341626,607277]}},"id":"e52e34ee-6a26-4119-bbaa-ffe3b5b8158e","type":"ColumnDataSource"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[230271,223712,75864,203388,267029,178601,60108,184699,293900,273024,135605,272284]}},"id":"3e6162bb-05d9-49a9-8798-46cf9fce088f","type":"ColumnDataSource"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[46749,40970,24521,51437,56745,40303,26774,64483,78871,73830,63113,94295]}},"id":"60332d1b-c9fa-4f9a-b58c-6b4c6357caaf","type":"ColumnDataSource"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[24696,36087,9449,21814,32928,32724,8531,21178,35301,45700,19337,36216]}},"id":"c852f2be-880d-4397-a495-845b01a4baa8","type":"ColumnDataSource"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[16390,14562,9871,19562,21172,14907,9083,22552,26368,25565,21469,33626]}},"id":"eba9ca38-fcb5-482c-9ddd-0057291b2336","type":"ColumnDataSource"},{"attributes":{"dimension":1,"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"},"ticker":{"id":"b2dfd327-5561-4b72-89ac-5e512ba9b360","type":"BasicTicker"}},"id":"a7262829-3c44-47c4-9b2a-e1aeb7f2c555","type":"Grid"},{"attributes":{"data_source":{"id":"5702857e-05c8-468d-88d8-f25294222b21","type":"ColumnDataSource"},"glyph":{"id":"e9459d5c-67ed-41f5-94cb-cf7af1cea27f","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"13a312d9-437f-456e-969f-2b529d64aa0c","type":"Line"},"selection_glyph":null},"id":"b25f98a8-9839-43ff-88e1-2b4bcf00d381","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"462355bc-1082-42c7-87ff-ba8f13fb1536","type":"ColumnDataSource"},"glyph":{"id":"2d8cec4a-c533-4546-812c-4ee591558287","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"abf6d077-dbd5-4d6d-8172-0b1488cb3014","type":"Line"},"selection_glyph":null},"id":"9929834e-4079-4a51-86bb-4d41efa1b85f","type":"GlyphRenderer"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[211603,189384,92729,203917,221837,155740,87173,215117,266714,255544,192243,308023]}},"id":"88445ce2-1ab5-4cdf-979b-08300ea7b048","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"red"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e4d610da-e082-4a3f-92b8-28e32b61bff8","type":"Line"},{"attributes":{"data_source":{"id":"c0fc1051-f80c-43e4-a314-d6d954ca0204","type":"ColumnDataSource"},"glyph":{"id":"59455ef0-c41d-4a67-94f7-7d706f85e64d","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"d08de97e-28cd-4648-ba75-95454c45c778","type":"Line"},"selection_glyph":null},"id":"d1a75e34-595d-4fdd-b5d1-1bbd1dcba227","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"88445ce2-1ab5-4cdf-979b-08300ea7b048","type":"ColumnDataSource"},"glyph":{"id":"9bf7eec1-817d-4d1d-80fa-6302b830d224","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"1f203560-56c4-4f47-bfd2-85280eba65f3","type":"Line"},"selection_glyph":null},"id":"5cd4c006-ef75-4d7c-9cb1-a75f0dfdaaf4","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"pink"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"2d8cec4a-c533-4546-812c-4ee591558287","type":"Line"},{"attributes":{"plot":null,"text":"NUMBER OF JOURNEYS MADE BY AGE GROUP"},"id":"e1af9b2b-74b5-4854-89b6-c6fac93c826c","type":"Title"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"101067b1-b207-4455-885b-a5e3bf0559e9","type":"Line"},{"attributes":{"data_source":{"id":"eba9ca38-fcb5-482c-9ddd-0057291b2336","type":"ColumnDataSource"},"glyph":{"id":"470e1d72-bb96-46fd-b99a-758e4c384926","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"8b7e55ec-c9ad-46b3-a283-22adfdd7ab81","type":"Line"},"selection_glyph":null},"id":"a0178c82-e73d-4cd5-884b-e2726e79c1e5","type":"GlyphRenderer"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[152404,140341,74402,160867,181942,129854,73869,179758,218826,214674,157535,248089]}},"id":"c0fc1051-f80c-43e4-a314-d6d954ca0204","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"c852f2be-880d-4397-a495-845b01a4baa8","type":"ColumnDataSource"},"glyph":{"id":"87fd44a7-9aa7-43d0-babc-81d8b2634990","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"62677827-22ea-4f63-bfd4-5ece2dab3d46","type":"Line"},"selection_glyph":null},"id":"6ace6d92-15cb-4eeb-9183-56e0c08f29de","type":"GlyphRenderer"},{"attributes":{"children":[{"id":"19eb0c66-80c5-410d-9f4e-d3aba22c1794","type":"CheckboxGroup"}]},"id":"d4d1da6e-e07e-4c9d-a3c3-f5f701613674","type":"WidgetBox"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[97369,91124,49130,102207,113276,82390,48159,116961,143450,141546,114922,172161]}},"id":"cf8cbfb4-fe1c-4b5f-8d4a-ac57c41037df","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"60332d1b-c9fa-4f9a-b58c-6b4c6357caaf","type":"ColumnDataSource"},"glyph":{"id":"8088d3e4-e3ec-49c7-a208-2e3401a6709d","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"8d291756-d582-487f-bc1a-f5304b4fa42f","type":"Line"},"selection_glyph":null},"id":"3328bed5-c9bd-48ce-9e55-416115a42954","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"f47b2058-c371-4f1e-b5db-3a48c4ece737","type":"ColumnDataSource"},"glyph":{"id":"a0a7e299-b0db-43f6-8933-118ece82d3b1","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"a9e099e3-0783-49e7-b362-7eb816d37160","type":"Line"},"selection_glyph":null},"id":"e256d2b0-93c1-4908-bfb9-64ea6993ed85","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"d08de97e-28cd-4648-ba75-95454c45c778","type":"Line"},{"attributes":{"band_fill_alpha":{"value":0.1},"band_fill_color":{"value":"navy"},"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"},"ticker":{"id":"ee8a9aa7-c80a-4295-9ce4-599ac5fbef1e","type":"CategoricalTicker"}},"id":"a365de54-c052-4445-9ede-21d69a26bcfc","type":"Grid"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"grey"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"a8d40658-5931-464e-9f69-37f8b42b2934","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"37514fb7-2052-4ce0-b62e-b92204803afa","type":"Line"},{"attributes":{"children":[{"id":"d4d1da6e-e07e-4c9d-a3c3-f5f701613674","type":"WidgetBox"},{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}]},"id":"f0db2442-d0c1-4175-8bc9-6c6a6cd8a9f3","type":"Row"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"bab26463-fc14-4614-86ff-8a8a53b84e35","type":"Line"},{"attributes":{},"id":"b2dfd327-5561-4b72-89ac-5e512ba9b360","type":"BasicTicker"},{"attributes":{"callback":null,"factors":["Q3-13","Q4-13","Q1-14","Q2-14","Q3-14","Q4-14","Q1-15","Q2-15","Q3-15","Q4-15","Q1-16","Q2-16"]},"id":"d6b6a7be-64a9-4f15-a363-40c84bea9990","type":"FactorRange"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"lightgreen"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"a2b37bf1-52f3-43d4-8ec2-9c3d1eb0de3d","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"brown"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"470e1d72-bb96-46fd-b99a-758e4c384926","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"orange"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"b86ed3ff-404b-4b04-a1d0-a113acbe98cd","type":"Line"},{"attributes":{"axis_label":"Number of Journeys","formatter":{"id":"198e023e-b8a8-45b5-a7c5-9f463ace3991","type":"PrintfTickFormatter"},"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"},"ticker":{"id":"b2dfd327-5561-4b72-89ac-5e512ba9b360","type":"BasicTicker"}},"id":"db8598a9-517a-4ff3-b79e-3c37287bcc87","type":"LinearAxis"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"62677827-22ea-4f63-bfd4-5ece2dab3d46","type":"Line"},{"attributes":{"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"63c1d131-9b79-4b28-b829-5fe748925713","type":"HelpTool"},{"attributes":{"data_source":{"id":"8b3aca85-4ab7-444f-bd08-bf2e825f1093","type":"ColumnDataSource"},"glyph":{"id":"a8d40658-5931-464e-9f69-37f8b42b2934","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"37514fb7-2052-4ce0-b62e-b92204803afa","type":"Line"},"selection_glyph":null},"id":"2d67b960-96ff-4dd5-b84f-4fb596415bd9","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e9459d5c-67ed-41f5-94cb-cf7af1cea27f","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[5424,4879,2915,6640,7120,5885,4006,9129,10581,10572,8404,12770]}},"id":"8b3aca85-4ab7-444f-bd08-bf2e825f1093","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"violet"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"34db8656-4e48-4eab-83ce-86d0f2fff500","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"skyblue"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"9bf7eec1-817d-4d1d-80fa-6302b830d224","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"abf6d077-dbd5-4d6d-8172-0b1488cb3014","type":"Line"},{"attributes":{"plot":{"id":"ae783dfa-0c4c-46a3-98ee-fa1cf6bda79b","subtype":"Figure","type":"Plot"}},"id":"d1772563-108f-494a-8cea-672b8e5bda4d","type":"PanTool"},{"attributes":{"format":"%4.1e"},"id":"198e023e-b8a8-45b5-a7c5-9f463ace3991","type":"PrintfTickFormatter"}],"root_ids":["f0db2442-d0c1-4175-8bc9-6c6a6cd8a9f3"]},"title":"Bokeh Application","version":"0.12.1"}};
    var render_items = [{"docid":"138cafae-6ebb-4426-af30-ee892fc21232","elementid":"b68acbff-2db9-46e5-b702-2136d746cb5f","modelid":"f0db2442-d0c1-4175-8bc9-6c6a6cd8a9f3"}];
    
    Bokeh.embed.embed_items(docs_json, render_items);
});
</script>



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