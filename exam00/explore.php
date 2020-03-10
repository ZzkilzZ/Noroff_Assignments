<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/181c94503b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/general.css">
	<title>Community Museum - Explore</title>

	<meta name="description" content="Explore the museum. Offers for kids, teachers and researchers. From young to old, our doors are open for you to discover everything from newtonian physics to mammoths!">
	<meta name="robots" content="follow"/>
</head>
<body>
	<?php
		$title = "Science for everyone";
		$subtitle = "Are you a young person looking to learn more about science? Come on down to our museum, there’s plenty to see and do...";
		include("assets/modules/header.php");
	?>
	<script>$("nav ul li").eq(1).addClass("nav_button_active"); $("#header_background").css("background-image", "url('assets/img/813352-PUTX8S-654.jpg')");</script>
	<main id="explore_main">
		<section>
			<img src="assets/img/technology-4739545_1920.jpg" alt="computer central processing unit fan" class="explore_scientist_image">
			<div>
				<h3>
					Explore
				</h3>
				<h4>
					For kids
				</h4>
				<p>
					Are you a young person looking to learn more about science? Come on down to our museum, there’s plenty to see and do.
					You can learn about Newtonian physics from our bumper swing, or why not travel back in time and meet our resident Woolly Mammoth? Our exhibits are designed to be accessible for interested minds, so make sure you come ready to learn and explore.
					We also have the Young Stars club which meets once a week on a Saturday between 10:00 and 13:00 where you’ll get to explore and experiment with our team of experts.
					During the school holidays we run special holiday clubs where you can join other children your age to go on a journey of discovery. Each holiday we pick a new theme to explore. To find out more about the holiday club and how you can join, send us a message.
				</p>
			</div>
		</section>
		<section>
			<div>
				<h4>
					For teachers
				</h4>
				<p>
					As a community-driven museum, we want to work with schools to create places of learning and exploring. Our team are on hand to give your students guided tours of the museum, teach them in our learning laboratory, and provide great video presentations that will excite and inspire them.
					Please get in touch with us here to find out more about our facilities and to arrange a time to bring your students through for a visit.
				</p>
			</div>
			<img src="assets/img/technology-4739544_1920.jpg" alt="central procesing unit heat sink">
		</section>
		<section>
			<img src="assets/img/technology-4739537_1920.jpg" alt="computer motherboard" class="explore_scientist_image">
			<div>
				<h4>
					Researchers
				</h4>
				<p>
					Are you looking to get involved with our team of researchers and academics? Our museum offers various ways for you to use our resources and contribute towards them. We have online records, laboratory space, and a working relationship with a number of universities around the country.
				</p>
			</div>
		</section>
	</main>
	<?php include("assets/modules/footer.php"); ?>
</body>
</html>