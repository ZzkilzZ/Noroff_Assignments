<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/181c94503b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/general.css">
	<title>Community Museum - Visit</title>

	<meta name="description" content="The museum is openalmost everyday at 97 Rue Pelleport in Paris. Click here for more information about admission, accessibility, food and shops!">
	<meta name="robots" content="follow"/>
</head>
<body>
	<?php
		$title = "It all starts here";
		$subtitle = "Come visit the museum, the displays are full and the knowledge awaits...";
		include("assets/modules/header.php");
	?>
	<script>$("nav ul li").eq(3).addClass("nav_button_active"); $("#header_background").css("background-image", "url('assets/img/813373-PUTXAJ-413.jpg')");</script>
	<main id="visit_main">
		<map name="museum_location">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1312.1922519406762!2d2.399143533269756!3d48.86994619089044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d90d41ec9eb%3A0xd6f127cd561a84bc!2s97%20Rue%20Pelleport%2C%2075020%20Paris!5e0!3m2!1sfr!2sfr!4v1582470169073!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</map>
		<section class="visit_information">
				<h3>
					Come and visit!
				</h3>
				<h4>
					Location
				</h4>
				<p>The museum is located at 97 Rue Pelleport - 75020 Paris, France</p>
				<h4>
					Hours
				</h4>
				<p id="visit_hours">
					Monday: Closed <br>
					Tuesday: 10:00 – 16:00 <br>
					Wednesday: 10:00 – 16:00 <br>
					Thursday: 10:00 – 16:00 <br>
					Friday: 10:00 – 19:00 <br>
					Saturday: 9:00 – 16:00 <br>
					Sunday: 9:00 – 13:00
				</p>
			</section>
			<br>
			<section class="visit_sub_information">
				<h4>
					Admission
				</h4>
				<p>
					The entrance is free for all. 
					There are guided tours of the museum that leave every hour. These tours are 7 EUR per person and include a handy printed guide of the museum. 
					If you would like to organise a guided tour for your group of 6 or more people, please contact us to arrange the tour.
				</p>
				<h4>
					Accessibility
				</h4>
				<p>
					The museum has wheelchair accessibility ramps. It also has audio guides and braille display signs for the visually impaired.
				</p>
				<h4>
					Food and drinks
				</h4>
				<p>
					The museum has wheelchair accessibility ramps. It also has audio guides and braille display signs for the visually impaired.
				</p>
				<h4>
					Shop
				</h4>
				<p>
					Our shop offers a range of memorabilia from the museum as well as great gifts and activity packs that allow you to continue to explore science even after you’ve left the museum.
				</p>
			</section>
	</main>
	<?php include("assets/modules/footer.php"); ?>
</body>
</html>