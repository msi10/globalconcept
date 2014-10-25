<?php
/**
 * The default template for displaying books archive content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
		
	<div id="book-<?php echo $post->ID; ?>" class="book-container <?php echo $even_odd; ?>">
		<div class="book-image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'books-thumbs'); ?></a></div>
		<div class="book-info">
			<div class="book-title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></div>
			<div class="book-author"><?php echo get_post_meta($post->ID, 'wpcf-author', true); ?></div>
		</div>
	</div>
