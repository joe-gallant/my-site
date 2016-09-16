<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time(); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?php wp_head(); ?>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
$(document).ready(function(){

	$('body').addClass('loaded');

	$(window).bind('scroll', function(e){
		parallaxScroll();
	});
	function parallaxScroll(){
		var scrolledY = $(window).scrollTop();
		$('.intro').css('top','-' + ((scrolledY*0.3)) + 'px');
		$('.intro').css('opacity','1' - (scrolledY*0.006));
	}

	$('#burger_menu').click(function(){
		$('body').toggleClass('burger_open');
	});

});
</script>
</head>
<body <?php body_class(); ?>>
<nav id="burgermenu" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
<div id="site_container">
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<div class="wrapper">
		<h1 class="name"><a href="<?php echo site_url(); ?>">Joe Gallant</a></h1>
		<nav id="menu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<div id="burger_menu"><span></span></div>
	</div>
</header>
<div id="container">