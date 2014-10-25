<?php get_header(); ?>
	<section id="two-third">
    <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(__('"Read More &raquo;"', 'globalconcept')); ?>
		</article>
		<?php endwhile; ?>
	<?php else: ?>
    	<article>
			<h1>Not Found!</h1>
			<p>Sorry, no page matched your criteria.</p>
		</article>
    <?php endif; ?>
	</section>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
