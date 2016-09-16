<?php get_header(); ?>

<section id="content" role="main">
<div class="intro_container">
<p class="intro">I am a young <span>front-end web developer</span> from Essex, England.<br>I have a passion for creating innovative sites that grab users' attention.</p>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="work_container">

	<a href="http://ashtongrp.co.uk/" target="_blank"><div class="work wider">
		<div class="info">
			<div class="info_text">
				<h3>Ashton Group</h3>
				<h5>Web Design & Development</h5>
			</div>
		</div>
		<div class="image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/ashtongrp_imac.png);"></div>
	</div></a>

	<a href="http://www.360-fitness.co.uk/" target="_blank"><div class="work">
		<div class="info">
			<div class="info_text">
				<h3>360 Fitness</h3>
				<h5>Web Design & Development</h5>
			</div>
		</div>
		<div class="image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/360fitness_mobile.png);"></div>
	</div></a>

	<a href="http://www.shelfordheating.co.uk/" target="_blank"><div class="work">
		<div class="info">
			<div class="info_text">
				<h3>Shelford Heating</h3>
				<h5>Web Development</h5>
			</div>
		</div>
		<div class="image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/shelfordheating_macbook.png);"></div>
	</div></a>

	<a href="work/panadoor"><div class="work wider">
		<div class="info">
			<div class="info_text">
				<h3>Panadoor</h3>
				<h5>Web Design & Development</h5>
			</div>
		</div>
		<div class="image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/pdoor_ipad.png);"></div>
	</div></a>


	<a href="http://avocet-cleaning.co.uk/" target="_blank"><div class="work wider">
		<div class="info">
			<div class="info_text">
				<h3>Avocet Cleaning</h3>
				<h5>Web Development</h5>
			</div>
		</div>
		<div class="image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/avocet_imac.png);"></div>
	</div></a>

	<a href="http://taproot.org.uk/" target="_blank">
	<div class="work">
		<div class="info">
			<div class="info_text">
				<h3>Taproot</h3>
				<h5>Web Design & Development</h5>
			</div>
		</div>
		<div class="image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/taproot_mobile.png);"></div>
	</div>
	</a>
	
</div>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>