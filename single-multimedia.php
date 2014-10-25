<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/jquery.allofthelights.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.allofthelights.js"></script>	
	<section id="three-third" class="media-content book-detail">
    <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="media-container">
			<iframe id="video" width="920" height="520" src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'wpcf-youtube-embed', true); ?>?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>		
		<br />
		<div class="media-container-links">
			 <!--<div id="switch"></div>-->
             <a id="switch"><span>Light On/Off</span></a>
         </div>	<br /><br />
		<article>
			<h1><?php the_title(); ?></h1>			
			<h3><?php _e('Video Description:', 'globalconcept'); ?></h3>
			<?php if (get_post_meta($post->ID, 'wpcf-write-a-short-description', true)){ ?>
				<p><?php // echo get_post_meta($post->ID, 'wpcf-write-a-short-description', true);
				 $paragraph = get_post_meta($post->ID, 'wpcf-write-a-short-description', true);
				echo wpautop( $paragraph );
				?></p>
			<?php } ?>
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
