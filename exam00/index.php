<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/181c94503b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/general.css">
	<title>Community Science - Home</title>

	<meta name="description" content="Come join us at the Community Science Museum where we’re committed to making science accessible to all. Over the course of human history, science has developed from our early understanding of fire, wind, water, and earth to exploring everything from galaxies far away to the very building blocks of life itself.">
	<meta name="robots" content="follow"/>
</head>
<body>
	<?php include("assets/modules/header.php"); ?>
	<script>$("nav ul li").eq(0).addClass("nav_button_active");</script>
	<main id="home_main">
		
		<h3>
			Explore together
		</h3>
		<iframe src="assets/modules/SolarSystem/index.html" frameborder="0"></iframe>
		
		<p>
			Come join us at the Community Science Museum where we’re committed to making science accessible to all.
			Over the course of human history, science has developed from our early understanding of fire, wind, water, and earth to exploring everything from galaxies far away to the very building blocks of life itself.
			The aim of our museum is to create a space where everyone can experience the wonders of our discoveries and perhaps even ignite a lifelong passion to continue the exploration of the world around us.
			We believe science should not be confined to the textbook, but brought to live through exhibits. This is why we have over 1000 different exhibits on the many varied subjects of science to explore. Many of these exhibits are designed for you to interact with and play around to see science come to life (apart from the dinosaur exhibits – they only come to life at night when everyone’s gone home).
		</p>
		<div id="slideshow_container" onclick="update_slideshow(1)">
			<img src="assets/img/astronaut-11080_1920.jpg" alt="astronaut in space">
			<img src="assets/img/artificial-intelligence-2167835_1920.jpg" alt="artificial intelligence">
			<img src="assets/img/astronaut-568620_1920.jpg" alt="Astronaute shaking hand with robot">
			<img src="assets/img/abstract-1278077_1920.jpg" alt="Artificial intelligence binary information">
		</div>
	</main>
	<?php include("assets/modules/footer.php"); ?>
</body>
</html>

<script>
	let index = 0;
	let timer = setTimeout(update_slideshow, 1, 1);

	function update_slideshow(diff)
	{
		clearTimeout(timer);
		$("#slideshow_container img").eq(index).hide();
		index += diff;
		if (index < 0)
			index = $("#slideshow_container img").length - 1;
		if (index >= $("#slideshow_container img").length)
			index = 0;
		$("#slideshow_container img").eq(index).css("display", "block");
		$("#slideshow_container img").eq(index).trigger('mouseenter');
		$("#slideshow_container img").eq(index).trigger('hover');
		$("#slideshow_container img").eq(index).trigger('mouseover');
		timer = setTimeout(update_slideshow, 3000, 1);
	}
</script>