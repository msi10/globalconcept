<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

 /* Make theme available for translation */
load_theme_textdomain( 'globalconcept', TEMPLATEPATH . '/languages' );
get_header(); ?>

		<section id="two-third" class="books-content">
			<!-- <div id="content" role="main"> -->

			<?php if ( have_posts() ) : ?>

				<!-- <header class="page-header">
					<h1 class="page-title">
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: %s', 'globalconcept' ), '<span>' . get_the_date() . '</span>' ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: %s', 'globalconcept' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'globalconcept' ) ) . '</span>' ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: %s', 'globalconcept' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'globalconcept' ) ) . '</span>' ); ?>
						<?php else : ?>
							<?php _e( 'Books Archives', 'globalconcept' ); ?>
						<?php endif; ?>
					</h1>
				</header>
			 -->
				<?php globalconcept_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php $even_odd = (++$j % 2 == 0) ? 'even' : 'odd'; ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						
						//get_template_part( 'content-books', get_post_format() );
					?>

						<div id="book-<?php echo $post->ID; ?>" class="book-container <?php echo $even_odd; ?>">
                        
                        
							<div class="book-image"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'books-thumbs'); ?></a></div>
							<div class="book-info">
                                
                                
                                <div class="book-title">
                     <span class="book-detailinfo">
						 <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a><br />
                       <?php echo get_post_meta($post->ID, 'wpcf-author', true); ?>
                        </span>
					</div>
<!--								<div class="book-author"></div>
-->							
                            </div>
						</div>
	
				<?php endwhile; ?>

				<?php globalconcept_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'globalconcept' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'globalconcept' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			<!--</div> #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>

  <aside id="one-third">
		<div class="sidebox sidemenu"><h4><?php _e('Literature:', 'globalconcept'); ?></h4>
			<ul><?php wp_list_categories( $args_lit ); ?></ul>
		</div>
	</aside>
<?php get_footer(); ?>