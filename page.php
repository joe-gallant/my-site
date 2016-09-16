<?php get_header(); ?>

<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section class="entry-content inside_content">

	<a href="<?php echo CFS()->get('design_image'); ?>">
		<?php the_post_thumbnail(); ?>
	</a>

	<?php the_content(); ?>

	<?php if(!CFS()->get('design_image') == '') : ?>
	<a href="<?php echo CFS()->get('design_image'); ?>">
		<img class="concept" src="<?php echo CFS()->get('design_image'); ?>" alt="Concept" />
	</a>
<?php endif; ?>

</section>

</article>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>