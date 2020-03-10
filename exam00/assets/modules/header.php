
<?php
	if (!isset($title) || $title == "")
		$title = "Explore together";
	if (!isset($subtitle) || $subtitle == "")
		$subtitle = "Come join us at the Community Science Museum where we’re committed to making science accessible to all.";
?>

<header>
	<div id="header_background">
		<div id="header_top_bar">
			<div id="header_logo_title">
				<a href="index.php">
					<h1>
						COMMUNITY <p>SCIENCE</p>
					</h1>
				</a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="explore.php">EXPLORE</a></li>
					<li><a href="events.php">EVENTS & EXHIBITIONS</a></li>
					<li><a href="visit.php">VISITS</a></li>
					<li><a href="involved.php">GET INVOLVED</a></li>
				</ul>
				<center>
					<i class="fa fa-bars fa-3x" aria-hidden="true" onclick="toggle_menu()"></i>
				</center>
			</nav>
		</div>
		
		<div id="header_section">
			<h2><?php echo $title; ?></h2>
			<span><?php echo $subtitle; ?></span>
			<a onclick="scroll_down()">DISCOVER MORE</a>
		</div>
	</div>
	<center>
		<i class="fas fa-angle-double-down fa-3x" onclick="scroll_down()"></i>
	</center>
</header>

<script>
	var menu_active = true;
	function toggle_menu()
	{
		if (menu_active)
			$("nav ul").show();
		else
			$("nav ul").hide();
		menu_active = !menu_active;
	}

	function viewport()
	{
		var e = window
		, a = 'inner';
		if ( !( 'innerWidth' in window ) )
		{
			a = 'client';
			e = document.documentElement || document.body;
		}
		return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
	}

	function scroll_down()
	{
		scrollTo({
		top: viewport().height,
		left: 0,
		behavior: 'smooth'
		});
	}

	window.onscroll = function() {myFunction()};

	var header = document.getElementById("header_top_bar");
	function myFunction() {
		if (window.pageYOffset > viewport().height - 1) {
			header.classList.add("header_top_bar_active");
			$("#header_section").hide();
		} else {
			header.classList.remove("header_top_bar_active");
			$("#header_section").show();
		}
	}
</script>