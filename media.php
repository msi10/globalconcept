<?php
/**
 * Template name: Media Overview
 */
?>
<?php get_header(); ?>
	<section id="two-third" class="media-overview">
		<h1><?php _e('Welcome to our Media Library Overview Page (Media)', 'globalconcept') ?></h1>
    <?php 
		 //$wp_query = new WP_Query();
     //$wp_query->query('post_type=friday_sermon&posts_per_page=2&paged='.$paged); ?>
    <?php 

			/*$args = array(
					'post_type' => array('friday_sermon','multimedia'),
			);
			$fs = new WP_Query($args);*/
		?>
    
    <?php 
			//flush_rewrite_rules();
			add_action( 'parse_query','changept' );
function changept() {
	if( is_category() && !is_admin() )
		set_query_var( 'post_type', array( 'friday_sermon', 'multimedia' ) );
		
	return;
}
			$args=array(
			 'post_type' => array( 'friday_sermon', 'multimedia' ),
			 'post_status' => 'publish',
			 'paged' => $paged,
			 'posts_per_page' => 5,
			 'ignore_sticky_posts'=> 1
			);
			$temp = $wp_query;  
			$wp_query = null;
			$wp_query = new WP_Query($args); 
		?>
    
    <?php if ( $wp_query->have_posts() ) : ?>
		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		
		<div id="media-<?php echo $post->ID; ?>" class="media-overview-container">
			<div class="media-image"><a href="<?php the_permalink(); ?>"><?php //echo get_the_post_thumbnail( $post->ID, 'media-thumb'); ?><?php if( ( $video_thumbnail = get_video_thumbnail($post->ID) ) != null ) { echo "<img src='" . $video_thumbnail . "' />"; } ?></a></div>
			<div class="media-info">
				<div class="media-title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></div>
				<div class="media-more">
					<?php if ( 'friday_sermon' == get_post_type()  ) : ?>
						<?php _e('Sermon delivered by', 'globalconcept'); ?> 
						<?php echo get_post_meta($post->ID, 'wpcf-delivered_by', true); ?> 
						<?php _e('on', 'globalconcept'); ?> 
						<time><?php the_time('F j, Y'); ?></time>.
					<?php endif; ?>
					<?php if ( 'multimedia' == get_post_type()  ) : ?>
						<?php echo substr(get_post_meta($post->ID, 'wpcf-write-a-short-description', true),0,300). "..."; ?>
					<?php endif; ?>	
				</div>
				
				<div id="metainfo-for-article" class="metainfo-for-article">			
					<span class="category"><?php echo get_the_term_list( $post->ID, 'archive', '', ', ', '' ); ?><?php echo get_the_term_list( $post->ID, 'video-category', '', ', ', '' ); ?>
					<?php //the_category(', '); ?></span> 
			
					<time><?php the_time('F j, Y'); ?></time> 
					<span class="tag"><?php the_tags(); ?></span>
				</div>
			</div>
	  </div>
		
		<?php endwhile; ?>
   	<?php //wp_reset_postdata(); ?>
		<div class="navigation">
	   <div class="alignleft"><?php next_posts_link('« Older Entries') ?></div>
	   <div class="alignright"><?php previous_posts_link('Newer Entries »') ?></div>
	  </div>
    <?php endif; ?>
    
	</section>

	
    <?php get_sidebar(); ?>
    
  <aside id="one-third">
    <?php display_search_box(DISPLAY_RESULTS_AS_POP_UP); ?>
		<div class="sidebox sidemenu"><h4><?php _e('Friday Sermons:', 'globalconcept'); ?></h4>
			<ul><?php wp_list_categories( $args_arc ); ?></ul>
		</div>
		
	  <div class="sidebox sidemenu"><h4><?php _e('Video Categories:', 'globalconcept'); ?></h4>
			<ul><?php wp_list_categories( $args_video ); ?></ul>
		</div>
	</aside>
<?php get_footer(); ?>