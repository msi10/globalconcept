<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/jquery.allofthelights.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.allofthelights.js"></script>	
<section id="three-third" class="media-content book-detail">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	    <div class="media-container">
		    <iframe id="video" width="920" height="520" src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'wpcf-youtube-embed', true); ?>" frameborder="0" allowfullscreen></iframe>
	    </div><br />
	    <div class="media-container-links">
             <a id="switch"><span>Light On/Off</span></a>
		    <?php if (get_post_meta($post->ID, 'wpcf-enter-summary-or-text-url-here', true)){ ?>
		        <a href="<?php echo get_post_meta($post->ID, 'wpcf-enter-summary-or-text-url-here', true); ?>"><span>Download Text</span></a>
		    <?php } ?>
		    <?php if (get_post_meta($post->ID, 'wpcf-download_audio', true)){ ?>
			    <a href="<?php echo get_post_meta($post->ID, 'wpcf-download_audio', true); ?>"><span>Download Audio</span></a>
		    <?php } ?>
		    <?php if (get_post_meta($post->ID, 'wpcf-enter-video-link-here', true)){ ?>
			    <a href="<?php echo get_post_meta($post->ID, 'wpcf-enter-video-link-here', true); ?>"><span>Download Video</span></a>
		    <?php } ?>
	    </div>
	    <br /><br />
	    <article>
		    <h1><?php the_title(); ?></h1>
		    <div class="book-detail-author">
			    <h3><?php _e('Sermon delivered by', 'globalconcept'); ?> <?php echo get_post_meta($post->ID, 'wpcf-delivered_by', true); ?> <?php _e('on', 'globalconcept'); ?> <?php the_time('F j, Y'); ?>.</h3>
		    </div>
		    <h3><?php _e('Summary:', 'globalconcept'); ?></h3>
		    <?php if (get_post_meta($post->ID, 'wpcf-summary', true)){ ?>
			    <?php $txt = get_post_meta($post->ID, 'wpcf-summary', true); ?>
                <?php echo apply_filters('the_content', $txt); ?>
		    <?php } ?>
		    <?php //the_content(__('"Read More &raquo;"', 'globalconcept')); ?>
	    </article>
	<?php endwhile; ?>
<?php else: ?>
    <article>
		<h1><?php _e('Not Found!', 'globalconcept'); ?></h1>
		<p><?php _e('Sorry, no page matched your criteria.', 'globalconcept'); ?></p>
	</article>
<?php endif; ?>
</section>
<script type="text/javascript">
	/*Code for Allofthelights*/
	$(document).ready(function() {
	    $("#video").allofthelights();
	});
	/*Code for Allofthelights*/
</script>
    
<?php get_footer(); ?>
