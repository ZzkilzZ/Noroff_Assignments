<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/181c94503b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/general.css">
	<title>Community Museum - Involved</title>

	<meta name="description" content="Get involved with the community museum though donations, support and even internships for the most pationate! We have many different offers available. Get in touch for more information!">
	<meta name="robots" content="follow"/>
</head>
<body>
	<?php
		$title = "Science for everyone";
		$subtitle = "Here at the Community Science Museum, we believe knowledge is for everyone, young and old...";
		include("assets/modules/header.php");
	?>
	<script>$("nav ul li").eq(4).addClass("nav_button_active");</script>
	<main id="involved_main">
		
		<section>
			<img src="assets/img/venus-11022_1920.jpg" alt="planet venus" class="involved_scientist_image">
			<div>
				<h3>
					Get Involved
				</h3>
				<h4>
					Support
				</h4>
				<p>
					There are various ways you can support the museum. Donations are very welcome and are an important way we keep this museum open and accessible to the whole community. 
					You can also support us by donating items of interest to the museum’s collections. If you have some item or collection that you think others would enjoy, please let us know by contacting our Collections Department and they will be able to assist you.			
				</p>
			</div>
		</section>
		<section>
			<div>
				<h4>
					Volunteer
				</h4>
				<p>
					A number of people volunteer their time and effort to keep the displays in good order and ready for visitors to come and enjoy. Volunteering has its perks including getting to see behind the scenes of a working museum, access to staff-only lectures, and a monthly lunch where all staff and volunteers come together to discuss ideas for future exhibits and strategies for the museum.
					You can help volunteer in a number of different spheres. Please contact us if you’d like to find out more about how you can get involved.
				</p>
			</div>
			<img src="assets/img/earth-11008_1920.jpg" alt="planet earth from space" class="involved_scientist_image">
		</section>
		<section>
			<img src="assets/img/uranus-11625.jpg" alt="planet uranus">
			<div>
				<h4>
					Internships
				</h4>
				<p>
					Are you interested in working in a museum? Do you enjoy the fun and excitement of sharing the wonders of nature with people? Well you could be just the right person to enjoy an internship at the museum.
					You’ll be learning from a number of different academics and people who are passionate about science and sharing it with the wider community.	
				</p>
			</div>
		</section>
	</main>
	<?php include("assets/modules/footer.php"); ?>
</body>
</html>