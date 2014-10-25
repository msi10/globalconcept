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
			<h1><?php the_title(); ?></h1>
            <footer>
				<time datetime="<?php the_time('Y-m-d'); ?>" pubdate><em><?php the_time('d'); ?></em><span><?php the_time('M'); ?><br><?php the_time('Y'); ?></span></time>
			</footer>
            <?php if(has_post_thumbnail()) {
				the_post_thumbnail('medium');
			} ?>
			<?php the_excerpt(); ?>
			
			<div class="metainfo-for-article">			
				<span class="category"><?php the_category(', '); ?></span> <time><?php the_time('F j, Y'); ?></time> <?php the_tags('<span class="tag">', ', ', '</span>'); ?>
				<a class="btn" href="<?php the_permalink(); ?>" style="float: right;">Read more</a>
                <br class="clr">
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
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
