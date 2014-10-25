<?php
/**
 * Template name: GoogleResults
 */
?>
<?php get_header(); ?>
<section id="two-third" class="blog-content">
	
	<?php display_search_box(DISPLAY_RESULTS_CUSTOM ); ?>
	<?php display_gsc_results(); ?>
</section>
<?php //get_sidebar(); ?>

<aside id="one-third">
	<div class="sidebox sidemenu"><h4><?php _e('Categories:', 'globalconcept'); ?></h4>
		<ul><?php wp_list_cats(); ?></ul>
	</div>
</aside>

<?php get_footer(); ?>
