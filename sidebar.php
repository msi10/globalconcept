	<aside id="one-third">
        <?php // get_search_form(); ?>
      
        <?php if( is_page() && !is_page_template() ) { ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Menu") ) : ?><?php endif; ?>
        <?php } ?>
        <!--<div class="sidebox sidemenu">
        	<h4>Category</h4>
            <ul>
            	<li><a href="#">Category 1</a></li>
            	<li><a href="#">Category 2</a></li>
            	<li><a href="#">Category 3</a></li>
            	<li><a href="#">Category 4</a></li>
            	<li><a href="#">Category 5</a></li>
            	<li><a href="#">Category 6</a></li>
            </ul>
        </div>-->
        
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Social") ) : ?><?php endif; ?>
        <!--<div class="sidebox social-icons">
        	<h4>Follow us</h4>
            <ul>
            	<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-icon-facebook.png" /></a></li>
            	<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-icon-twitter.png" /></a></li>
            	<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-icon-youtube.png" /></a></li>
            	<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-icon-rss.png" /></a></li>
            </ul>
       	</div>-->
	</aside>
