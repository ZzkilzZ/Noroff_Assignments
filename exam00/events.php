<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/181c94503b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/general.css">
	<title>Community Museum - Events</title>

	<meta name="description" content="The Community Science museum has lost of exhibitions and events to checkout, including: Cosmology, Evolution, Biology, Medicine, Robotics, AI and Ecology! Click on the events for more information.">
	<meta name="robots" content="follow"/>
</head>

<body>
	<?php
	$title = "Science for everyone";
	$subtitle = "Here at the Community Science Museum, we believe knowledge is for everyone, young and old...";
	include("assets/modules/header.php");
	?>
	<script>
		$("nav ul li").eq(2).addClass("nav_button_active");
		$("#header_background").css("background-image", "url('assets/img/813363-PUTX9P-746.jpg')");
	</script>
	<main>
		<div id="event_pop-up">
			<p>

			</p>
		</div>
		<div class="event_grid_container">
			<div id="event_grid_item_cosmology" class="event_grid_item">
				<h4>
					Cosmology
				</h4>
				<p>
					Explore the wonders of our cosmos...
				</p>
				<input type="hidden" name="cosmos" value="Explore the wonders of our cosmos. Our fantastic exhibition, ‘The Sky Above Us’, explores the night sky and what we can see and know about the universe around us. We’ll locate the various constellations and galaxies that can be seen and learn a bit about the early navigators who used the stars to travel by.
Follow the journey of our solar exploration: from early Arab traders, to Galileo’s telescope, to the latest exploration of the planets in our solar system.">
			</div>
			<div id="event_grid_item_evolution" class="event_grid_item">
				<h4>
					Evolution
				</h4>
				<p>
					For centuries, philosophers and scientists have wrestled with the question of our origins...
				</p>
				<input type="hidden" name="evolution" value="For centuries, philosophers and scientists have wrestled with the question of our origins. Where do we come from and how did we get here? Since Darwin proposed his theory of evolution we have had a framework for exploring and understanding our place in this world.
Discover the origins of life on this planet and how the species we know today have evolved our time. You can also take some time to meet a few of the creatures who didn’t survive, including our Woolly Mammoth, the Dodos, and a number of dinosaurs too.">
			</div>
			<div id="event_grid_item_biology" class="event_grid_item">
				<h4>
					Biology and Medicine
				</h4>
				<p>
					From micro-organisms to the human body, major breakthroughs in biology...
				</p>
				<input type="hidden" name="biology" value="From micro-organisms to the human body, major breakthroughs in biology are offering us unique insights into the great wonders of the tiny world. 
For many people their life expectancy is much longer and their quality of life much improved, thanks to the growth of our understanding of medicine. Over a series of exhibits we explore the history of medicine and take a look at some major breakthroughs including the discovery of penicillin and the first heart transplant. 
Many of our great medicinal discoveries have come not only from the lab, but also from observing animals in the wild. Often our fellow creatures have beat us to it.">
			</div>
			<div class="event_grid_item">
				<h4>
					Coming soon!
				</h4>
				<input type="hidden" name="biology" value="Coming Soon!">
			</div>
			<div id="event_grid_item_robotics" class="event_grid_item">
				<h4>
					Robotics and AI
				</h4>
				<p>
					The information revolution is here...
				</p>
				<input type="hidden" name="robotics" value="The information revolution is here and robotics and artificial intelligence are the science of the future. From useful home applications of AI to industrial uses of robotics, the future is here. You can even say hello and shake the hand of Rob the Robot.">
			</div>

			<div id="event_grid_item_ecology" class="event_grid_item">
				<h4>
					Ecology
				</h4>
				<p>
					As we learn more and more of the impact humans are having on the planet...
				</p>
				<input type="hidden" name="ecology" value="As we learn more and more of the impact humans are having on the planet, the more important it becomes that scientists explore how to create a sustainable future not just for humans but for the whole planet.
In our ecology section of the museum, we unpack the dangers we currently face including global warming, extinction of species, and pollution. But we also focus on the positive ways we can all contribute to a brighter future.">
			</div>

		</div>
	</main>
	<?php include("assets/modules/footer.php"); ?>
</body>

</html>

<script>
	let isVisible = false;
	var flag = 0;

	$(".event_grid_item").click(function() {
		$("#event_pop-up > p").html($(this).children("input").eq(0).val());
		flag = 1;
	});

	$("body").click(function() {
		if (flag)
			isVisible = true;
		else
			isVisible = false;
		flag = 0;
		show_event_info();
	});

	$(document).scroll(function (){
		isVisible = false;
		show_event_info();
	})

	function show_event_info() {
		if (isVisible)
			$("#event_pop-up").show();
		else
			$("#event_pop-up").hide();
	}
</script>