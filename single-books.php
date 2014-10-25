<?php get_header(); ?>
 <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
<section id="three-third" class="media-content book-detail">
	<div class="book-detail-container">
			<?php echo do_shortcode(get_post_meta($post->ID, 'wpcf-paste-file-link-here', true)); ?>
		</div>
		
</section>
<section id="two-third" class="book-detail">
    
   
		
	<article>
		<h1><?php the_title(); ?></h1>
		<div class="book-detail-author">
			<h3><?php _e('Author:', 'globalconcept'); ?>&nbsp;<?php echo get_post_meta($post->ID, 'wpcf-author', true); ?></h3>
		</div>

		<h3><?php _e('Description:', 'globalconcept'); ?></h3>
		<p><?php // echo get_post_meta($post->ID, 'wpcf-write-a-short-description', true); 
		 $paragraph = get_post_meta($post->ID, 'wpcf-write-a-short-description', true);
		echo wpautop( $paragraph );
		?></p>
		
	
		<h2><?php _e('More books', 'globalconcept');?>:</h2>
		
		<?php 
		// getting more for this category
		$cat_ID=array();
		$categories = get_the_category();
		foreach($categories as $category) {
			array_push($cat_ID,$category->cat_ID);
		}
		$args = array(
				'orderby' => 'date',
				'order' => 'DESC',
				'post_type' => 'books',
				'numberposts' => 2,
				'post__not_in' => array($post->ID),	// we do not need to display current post
				'category__in' => $cat_ID
		);
		$cat_posts = get_posts($args);
		?>
		
		<div class="books-content">
		<?php 
		foreach($cat_posts as $cat_post) {
		$even_odd = (++$j % 2 == 0) ? 'even' : 'odd';
		?>
		
			<div id="book-1" class="book-container <?php echo $even_odd; ?>">
				<div class="book-image">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $cat_post->ID, 'books-thumbs'); ?></a>
				</div>
				<div class="book-info">
					<div class="book-title">
                     <span class="book-detailinfo">
						<a href="<?php echo get_permalink($cat_post->ID); ?>" class="title"><?php echo wptexturize($cat_post->post_title); ?></a><br />
                        <?php echo get_post_meta($cat_post->ID, 'wpcf-author', true); 
               
?>
                        </span>
					</div>
<!--					<div class="book-author"></div>
-->				</div>
			</div>

		<?php } ?>
		</div>
		
	</article>
</section>
<aside id="one-third" class="one-third-book-info">

	<div class="book-detail-info">
		<div class="book-info-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'books-single-thumb'); ?>
		</div>
		
		
	</div>

</aside>

		<?php endwhile; ?>
	<?php else: ?>
    	<article>
			<h1><?php _e('Not Found!', 'globalconcept') ?></h1>
			<p><?php _e('Sorry, no page matched your criteria.', 'globalconcept') ?></p>
		</article>
    <?php endif; ?>
	</section>
<?php get_footer(); ?>