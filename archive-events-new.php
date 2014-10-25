<?php
/**
 * Template name: Events
 */
?>
<?php get_header(); ?>
<section id="two-third" class="blog-content">
	<?php $news = new WP_Query('post_type=events&posts_per_page=10&paged='.$paged.'&order=ASC&post_status=future,publish'); ?>
	<?php if ( $news->have_posts() ) : ?>
	<?php while ( $news->have_posts() ) : $news->the_post(); 
			if(strtotime($post->post_date) < time())
            	continue;
	?>
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
			<!--<span class="category"><?php // the_category(', '); ?> </span>-->
            <span class="category">
						 <?php  
								$terms = wp_get_post_terms( $post->ID, 'event-category');
								foreach ($terms as $term) {
								echo '<a href="'.get_term_link($term->slug, 'event-category').'">'.$term->name.'</a></li>';
								}
						?>
                        </span> 
			<time>
				<?php the_time('F j, Y'); ?>
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
	<div class="sidebox sidemenu"><h4><?php _e('Categories:', 'globalconcept'); ?></h4>
		<ul><?php wp_list_categories( $args_evevnts ); ?></ul>
	</div>
</aside>

<?php get_footer(); ?>
