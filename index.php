<?php get_header(); ?>
	<div id="teaser">
	<?php if (function_exists('dynamic_sidebar') && 	dynamic_sidebar('slider')) : else : ?><?php endif; ?>
	</div>
	
	<section id="three-third" class="home">

<!-- 1st row -->
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_center')) : else : ?><?php endif; ?>
		<!--<article class="two-articles-per-row fl">
			<header>
				<h3><a class="heading" href="#"><?php _e('Our World Head'); ?></h3>
			</header>
			
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/hazoor-03.jpg" alt="Hazoor" class="fl"></a>
				<figcaption>
					<h4><a class="title" href="#"><?php _e('The World Peace Leader'); ?></a></h4>
					<p>
						<?php _e('Learn more about '); ?><strong><?php _e(' His Holliness Mirza Masroor Ahmad'); ?></strong><?php _e('and his activities to establish'); ?><strong><?php _e('World Peace'); ?></strong><?php _e('by emphasizing Unity and Brotherhood all over the world.'); ?>						
					</p>
				</figcaption>
			</figure>		
		</article> -->
		
		<article class="two-articles-per-row fr">
			<!--<header>-->
				<h3><?php _e('Latest Friday Sermon delivered by our World Head', 'globalconcept'); ?></h3>
<!--			</header>
-->			<!-- 
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/hazoor-04.jpg" alt="Hazoor" class="fl"></a>
				<figcaption>
					<time datetime="2012-11-16" pubdate>16.11.2012</time>
					<h4><a class="title" href="#">Companions of<br>the Promised Messiah (as)</a></h4>
					<p>
						Hadhrat Mirza Masroor Ahmad
					</p>
				</figcaption>
			</figure>
            -->	
            <figure>
				<?php
                    global $sermon;
                    $sermon = get_posts("numberposts=1&post_type=friday_sermon");
					foreach($sermon as $post) :
					setup_postdata($post);
                ?>
                <a href="<?php the_permalink(); ?>"><img src="http://img.youtube.com/vi/<? echo get_post_meta($post->ID, 'wpcf-youtube-embed', true) ?>/0.jpg" width="208" height="164" alt="<?php echo get_post_meta($post->ID, 'wpcf-delivered_by', true); ?>" class="fl attachment-thumbnail"></a>
				<figcaption>
					<time datetime="<?php the_time('d.m.Y'); ?>" pubdate><?php the_time('d.m.Y'); ?></time>
                      <span class="category">
						 <?php  
								$terms = wp_get_post_terms( $post->ID, 'archive');
								foreach ($terms as $term) {
								echo '<a href="'.get_term_link($term->slug, 'archive').'">'.$term->name.'</a></li>';
								}
						?>
                        </span> 
					<h4><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					
					<?php echo "<p>" . get_post_meta($post->ID, 'wpcf-delivered_by', true). "</p>"; ?>
				</figcaption>
                <?php endforeach; ?>
			</figure>	
		</article>	
		
<!-- 2nd row -->
		<article class="clr three-articles-per-row fl">
			
				<h3><?php _e('News and Blog', 'globalconcept'); ?></h3>
			
			
			<figure>
				<?php
                    global $post;
                    $posts = get_posts( "orderby=rand&numberposts=1&post_type=post");
                    foreach($posts as $post) :
					setup_postdata($post);
                ?>
				<?php if(has_post_thumbnail()) {
					?>
					<a class="" href="<?php the_permalink(); ?>">
                   <?php  
                    the_post_thumbnail('thumbnail');
				?>
				</a>
				<?php
				} ?>
				<figcaption class="clr">
					<time datetime="2012-09-07" pubdate><?php the_time('d.m.Y'); ?></time>			
                    <span class="category"><?php the_category(', '); ?> </span>
					<h4><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php echo "<p>" . substr(get_the_content(),0,140) . "...</p>"; ?>
				</figcaption>
                <?php endforeach; ?>
			</figure>
		</article>

		<article class="three-articles-per-row fl" style="margin-left: 15px;">
			
				<h3><?php _e('Upcoming and past Events', 'globalconcept'); ?></h3>
			
			
			<figure>
				<?php
                    global $post;
                    $posts = get_posts("numberposts=1&post_type=events&order=ASC&post_status=future,publish&order=DESC");
                    foreach($posts as $post) :
					setup_postdata($post);
					//if(strtotime($post->post_date) < time())
            //			continue;
                ?>
				<?php if(has_post_thumbnail()) {
					?>
					<a class="" href="<?php the_permalink(); ?>">
                   <?php  
                    the_post_thumbnail('thumbnail');
				?>
				</a>
				<?php
				} ?>
				<figcaption class="clr">
					<time datetime="2012-09-07" pubdate><?php the_time('d.m.Y'); ?></time>			
                   <span class="category">
						 <?php  
								$terms = wp_get_post_terms( $post->ID, 'event-category');
								foreach ($terms as $term) {
								echo '<a href="'.get_term_link($term->slug, 'event-category').'">'.$term->name.'</a></li>';
								}
						?>
                        </span> 
					<h4><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php echo "<p>" . substr(get_the_content(),0,140) . "...</p>"; ?>
				</figcaption>
                <?php endforeach; ?>
			</figure>
		</article>

		<article class="three-articles-per-row fr">
			
				<h3><?php _e('Latest Publications', 'globalconcept'); ?></h3>
			
			
			<!-- Book 1
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/book.jpg" alt="Book" class="fl" style="margin-right: 8px;"></a>
				<figcaption>
					<h4><a class="title" href="#">True Love for The Holy Prophet (saw)</a></h4>
					<p>
						Hadhrat Mirza Masroor Ahmad (aba)
					</p>
				</figcaption>
			</figure>

			 Book 2 
			<figure style="margin-top: 30px;">
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/book.jpg" alt="Book" class="fl" style="margin-right: 8px;"></a>
				<figcaption>
					<h4><a class="title" href="#">Brahin-e-Ahmadiyya</a></h4>
					<p>
						Hadhrat Mirza Ghulam Ahmad (as)
					</p>
				</figcaption>
			</figure>
            -->
            <figure>
				<?php
                    global $books;
                    $books = get_posts("orderby=rand&numberposts=2&post_type=books");
                    foreach($books as $post) :
					setup_postdata($post);
                ?>
				
				<div id="leftcolumn">
				<?php if(has_post_thumbnail()) {
					the_post_thumbnail('books-thumbs-home');
				} ?>
				</div>
				<div id="rightcolumn">
                
                <figcaption class="clr">
                	<h4><a class="title" href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h4>
					<p>
						<?php echo get_post_meta($post->ID, 'wpcf-author', true); ?>
					</p>
				</figcaption>
                </div>
                <div class="clrboth" ></div>
                <?php endforeach; ?>
			</figure>
		</article>
					
                
                    
<!-- 3rd row -->
        
				<h3 class="clr mulmedbox"><?php _e('Watch latest videos from our Media Library', 'globalconcept'); ?></h3>
        
        <article class="clr one-articles-per-row">
			
			<?php
                    global $post;
                    $posts = get_posts("orderby=rand&numberposts=3&post_type=multimedia");
                    $tempcountr = 1;
					foreach($posts as $post) :
					setup_postdata($post);
                ?>
             <div class="fl <?php echo 'mulmed'. $tempcountr; ?>">			
				<figure>   
				<?php if(has_post_thumbnail()) {
				?>
					<a class="" href="<?php the_permalink(); ?>">
                   <?php  
                    the_post_thumbnail('thumbnail');
				?>
				</a>
				<?php
				} ?>
                    <figcaption class="clr">
                        <time datetime="2012-09-07" pubdate><?php the_time('d.m.Y'); ?></time>
                        <span class="category">
						 <?php  
								$terms = wp_get_post_terms( $post->ID, 'video-category');
								foreach ($terms as $term) {
								echo '<a href="'.get_term_link($term->slug, 'video-category').'">'.$term->name.'</a></li>';
								}
						?>
                        </span>
                        <h4><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </figcaption>
                </figure>
			</div>

                <?php 
				$tempcountr++;
				endforeach; ?>
			
			<br class="clr">			
		</article>

	</section>
<?php get_footer(); ?>