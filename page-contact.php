<?php get_header(); ?>

<script>
$(document).ready(function(){

	$('input, textarea').focus(function(){
		if ($(this).is(":focus")) {
		  $(this).closest('.half, .full').addClass('active');
		};
	});

	$('form').submit(function(){
		$('.half, .full').removeClass('active');
	})

});
</script>

<section id="content" role="main" class="contact">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section class="entry-content">

<?php echo do_shortcode('[contact-form-7 id="18" title="Contact form 1"]'); ?>

</section>

</article>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>