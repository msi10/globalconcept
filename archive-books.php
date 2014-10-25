<?php
/**
 * Template name: Books Archive
 */


?>
<?php get_header(); ?>
	<section id="two-third" class="books-content">
    
    <?php $books = new WP_Query('post_type=books&posts_per_page=10&paged='.$paged); ?>
    <?php if ( $books->have_posts() ) : ?>
		<?php while ( $books->have_posts() ) : $books->the_post(); 
		
		$even_odd = (++$j % 2 == 0) ? 'even' : 'odd';

		?>
		
		<div id="book-<?php echo $post->ID; ?>" class="book-container <?php echo $even_odd; ?>">
			<div class="book-image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'books-thumbs'); ?></a></div>
			<div class="book-info">
				<!--test-->
                <div class="book-title">
                <span class="book-detailinfo">
                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                <br /><?php echo get_post_meta($post->ID, 'wpcf-author', true); ?>
                </span>
                
                </div>
 </div>
		</div>
		
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

  <aside id="one-third">
  
		<div class="sidebox sidemenu"><h4><?php _e('Literature:', 'globalconcept'); ?></h4>
			<ul><?php wp_list_categories( $args_lit ); ?></ul>
		</div>
	</aside>
  
<?php get_footer(); ?>




