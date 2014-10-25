<?php
/**
 * Template name: News
 */
?>
<?php get_header(); ?>
<section id="two-third" class="blog-content">
	<?php $news = new WP_Query('post_type=post&posts_per_page=10&paged='.$paged); ?>
	<?php if ( $news->have_posts() ) : ?>
	<?php while ( $news->have_posts() ) : $news->the_post(); ?>
	<article>
		<div class="blog-title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></div>
		<footer>
			<time datetime="<?php the_time('Y-m-d'); ?>" pubdate>
				<em><?php the_time('d'); ?> </em><br>
				<span><?php the_time('M'); ?> <?php the_time('Y'); ?></span>
			</time>
		</footer>
		
		<a href="<?php the_permalink(); ?>" class="title"><?php if(has_post_thumbnail()) { the_post_thumbnail('medium'); } ?></a>
		
		<?php the_excerpt(); ?>

		<div class="metainfo-for-article">
			<span class="category"><?php the_category(', '); ?> </span>
			<time>
				<?php the_time('d.m.Y'); ?>
			</time>
			<?php the_tags('<span class="tag">', ', ', '</span>'); ?>
			<a class="btn" href="<?php the_permalink(); ?>" style="float: right;">Read
				more</a> <br class="clr">
		</div>
	</article>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else: ?>
	<article>
		<h1>Nothing Found!</h1>
		<p>Sorry, no posts matched your criteria.</p>
	</article>
	<?php endif; ?>
</section>
<?php //get_sidebar(); ?>

<aside id="one-third">
	<?php display_search_box(DISPLAY_RESULTS_AS_POP_UP); ?>
	<div class="sidebox sidemenu"><h4><?php _e('Categories:', 'globalconcept'); ?></h4>
		<ul><?php wp_list_cats(); ?></ul>
	</div>
</aside>

<?php get_footer(); ?>
