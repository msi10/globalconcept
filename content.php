<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
				<?php the_time('F j, Y'); ?>
			</time>
			<?php //the_tags('<span class="tag">', ', ', '</span>'); ?>
			<a class="btn" href="<?php the_permalink(); ?>" style="float: right;">Read
				more</a> <br class="clr">
		</div>
		
	</article>