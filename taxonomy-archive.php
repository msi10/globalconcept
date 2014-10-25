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

get_header(); ?>
<div class="container_12">
    <div class="content">
        <div class="grid_12">
            <div class="heading-new"><h2><?php _e('The Friday Sermon Archive', 'globalconcept'); ?></h2>
                <p><?php _e("The Jumu'ah (Friday) prayer is one form of congregational worship in Islam. It takes place every Friday. Regular attendance at the Jumu'ah prayer is enjoined on the believer. According to a Saying of Muhammadsa this congregational prayer is twenty-five times more blessed than worship performed alone. (Bukhari)", 'globalconcept'); ?></p>
            </div>
        </div>
        <?php $taxid = get_queried_object_id(); ?>
        <?php $archives = get_terms('archive'); ?>
        <?php if($archives): $c=1; ?>
            <div class="for-settelment">
                <div class="grid_8">
                    <div class="new-bar">
                        <h3><?php _e('Select Sermon Archive by Year', 'globalconcept'); ?></h3>
                        <ul>
                            <?php foreach($archives as $archvie){ ?>
                                <li<?php if($taxid == $archvie->term_id)echo ' class="active"'; ?>><a href="<?php echo get_term_link($archvie, 'archive');?>"><?php echo $archvie->name; ?> </a></li>
                                <?php if($c != count($archives)): ?><li>|</li><?php endif; ?>
                            <?php $c++; } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- end .grid_9 -->
        <div class="clear"></div>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); $id = $post->ID; ?>
                <div class="post">
                    <?php if( ( $video_thumbnail = get_video_thumbnail($post->ID) ) != null || has_post_thumbnail()): ?>
                        <div class="grid_4">
                            <div class="boxes-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if( ( $video_thumbnail = get_video_thumbnail($id) ) != null ) { echo "<img src='" . $video_thumbnail . "' width='299' height='225' />"; }else{echo get_the_post_thumbnail( $id, 'friday-sermon-thumb');} ?>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- end .grid_4 -->
                    <div class="grid_8">
                        <div class="boxes-text">
                            <div class="new-section">
                                <span class="caps"><?php _e('Friday Sermon', 'globalconcept'); ?> <?php the_time('d.m.Y'); ?> | <?php echo get_post_meta($post->ID, 'wpcf-delivered_by', true); ?></span>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php $video = get_post_meta($id, 'wpcf-enter-video-link-here', true); ?>
                                <?php $audio = get_post_meta($id, 'wpcf-download_audio', true); ?>
                                <?php $summary = get_post_meta($id, 'wpcf-enter-summary-or-text-url-here', true); ?>
                                <?php if($video || $audio || $summary): ?>
                                    <strong><?php if($video): ?><a href="<?php echo $video; ?>">Video</a> 
                                        <?php if($audio || $summary)echo ' | '; ?><?php endif; ?> 
                                        <?php if($audio): ?><a href="<?php echo $audio; ?>"><?php _e('Download Audio', 'globalconcept'); ?></a> 
                                        <?php if($summary)echo ' | '; ?><?php endif; ?> 
                                        <?php if($summary): ?><a href="<?php echo $summary; ?>">Summary</a><?php endif; ?>
                                    </strong>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php endwhile; ?>
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
    </div>
</div>
    
<?php get_footer(); ?>