<?php
function globalconcept_content_nav( $nav_id ) {
        global $wp_query;

        if ( $wp_query->max_num_pages > 1 ) : ?>
                <nav id="<?php echo $nav_id; ?>">
                        <h3 class="assistive-text"><?php _e( 'Post navigation', 'globalconcept' ); ?></h3>
                        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'globalconcept' ) ); ?></div>
                        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'globalconcept' ) ); ?></div>
                </nav><!-- #nav-above -->
        <?php endif;
}


function globalconcept_posted_on() {
        printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'globalconcept' ),
                esc_url( get_permalink() ),
                esc_attr( get_the_time() ),
                esc_attr( get_the_date( 'c' ) ),
                esc_html( get_the_date() ),
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                sprintf( esc_attr__( 'View all posts by %s', 'globalconcept' ), get_the_author() ),
                esc_html( get_the_author() )
        );
}

function dimox_breadcrumbs() {
 
  $delimiter = '<span>&raquo;</span>';
  $home = 'Home'; // text for the 'Home' link
  $before = '<span>'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<nav id="breadcrumbs">';
 
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
     // echo __('Page', 'globalconcept') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</nav>';
 
  }
} // end dimox_breadcrumbs()
/**
 * Adds support for a custom header image.
 */
require( get_template_directory() . '/inc/custom-header.php' );


/* Change "POST" label to "NEWS" - Starts */
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add News';
	$submenu['edit.php'][16][0] = 'News Tags';
	echo '';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
	$labels->all_items = "News";
	$labels->menu_name = "News";
	$labels->name_admin_bar = "News";
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

/* Change "POST" label to "NEWS" - Ends */

/* Show Category Filters - Starts */

add_action( 'restrict_manage_posts', 'my_filter_list' );

function my_filter_list() {
    $screen = get_current_screen();
    global $wp_query;
    if ( $screen->post_type == 'books' ) {
        wp_dropdown_categories( array(
            'show_option_all' => 'Show All Books',
            'taxonomy' => 'literature',
            'name' => 'literature',
            'orderby' => 'name',
            'selected' => ( isset( $wp_query->query['writer'] ) ? $wp_query->query['writer'] : '' ),
            'hierarchical' => false,
            'depth' => 3,
            'show_count' => false,
            'hide_empty' => true,
        ) );
    }
}

add_filter( 'parse_query','perform_filtering' );

function perform_filtering( $query ) {
    $qv = &$query->query_vars;
    if ( ( $qv['writer'] ) && is_numeric( $qv['writer'] ) ) {
        $term = get_term_by( 'id', $qv['writer'], 'writer' );
        $qv['writer'] = $term->slug;
    }
}

/* Show Category Filters - Ends */
/* Make theme available for translation */
load_theme_textdomain( 'globalconcept', TEMPLATEPATH . '/languages' );

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'books-thumbs', 112, 152, true );
add_image_size( 'books-thumbs-home', 92, 124, true );
add_image_size( 'books-single-thumb', 197, 259, true );
add_image_size( 'friday-sermon-thumb', 299, 225, true );

add_image_size( 'vidtest', 290, 163, true ); 

//add_theme_support( 'books-thumbs' );
//set_post_thumbnail_size( 112, 152, true );



register_nav_menu('main', 'Main Menu');

if ( function_exists('register_sidebar') )
register_sidebar(array(
	'name' => 'Sidebar Menu',
	'before_widget' => '<div class="sidebox sidemenu">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
	'name' => 'Sidebar Social',
	'before_widget' => '<div class="sidebox social-icons">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
	'name' => 'Footer',
	'before_widget' => '<article>',
	'after_widget' => '</article>',
	'before_title' => '<h4 class="footerH">',
	'after_title' => '</h4>',
));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
			'name' => 'Home Center',
			'id'   => 'home_center',
			'description'   => 'Widget area for home page center column',
			'before_widget' => '<article class="two-articles-per-row fl">',
			'after_widget'  => '</article>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
			'name' => 'Slider',
			'id'   => 'slider',
			'description'   => 'Widget area for the slider',
			'before_widget' => '<div id="teaser">',
			'after_widget'  => '</div>'
	));

if(is_home()) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Index Page Sidebar') ) :
	endif;
} //end index page only stuff
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Regular Sidebar') ) :
endif;

//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
$args_lit = array(
		'taxonomy'     => 'literature',
		'orderby'      => 'name',
		'show_count'   => 0,
		'pad_counts'   => 0,
		'hierarchical' => 1,
		'title_li'     => '',
		'order'        => 'ASC',
);

$args_arc = array(
		'taxonomy'     => 'archive',
		'orderby'      => 'name',
		'show_count'   => 0,
		'pad_counts'   => 0,
		'hierarchical' => 1,
		'title_li'     => '',
		'order'        => 'ASC',
);

$args_video = array(
		'taxonomy'     => 'video-category',
		'orderby'      => 'name',
		'show_count'   => 0,
		'pad_counts'   => 0,
		'hierarchical' => 1,
		'title_li'     => '',
		'order'        => 'ASC',
);
$args_progser = array(
		'taxonomy'     => 'series',
		'orderby'      => 'name',
		'show_count'   => 0,
		'pad_counts'   => 0,
		'hierarchical' => 1,
		'title_li'     => '',
		'order'        => 'ASC',
);
$args_vidwithcaliphs= array(
		'taxonomy'     => 'videos-with-khalifatul-masih',
		'orderby'      => 'name',
		'show_count'   => 0,
		'pad_counts'   => 0,
		'hierarchical' => 1,
		'title_li'     => '',
		'order'        => 'ASC',
);
$args_evevnts = array(
		'taxonomy'     => 'event-category',
		'orderby'      => 'name',
		'show_count'   => 0,
		'pad_counts'   => 0,
		'hierarchical' => 1,
		'title_li'     => '',
		'order'        => 'ASC',
);
//Display custom Post types in dashboard
function wph_right_now_content_table_end() {
 $args = array(
  'public' => true ,
  '_builtin' => false
 );
 $output = 'object';
 $operator = 'and';
 $post_types = get_post_types( $args , $output , $operator );
 foreach( $post_types as $post_type ) {
  $num_posts = wp_count_posts( $post_type->name );
  $num = number_format_i18n( $num_posts->publish );
  $text = _n( $post_type->labels->singular_name, $post_type->labels->name , intval( $num_posts->publish ) );
  if ( current_user_can( 'edit_posts' ) ) {
   $num = "<a href='edit.php?post_type=$post_type->name'>$num</a>";
   $text = "<a href='edit.php?post_type=$post_type->name'>$text</a>";
  }
  echo '<tr><td class="first b b-' . $post_type->name . '">' . $num . '</td>';
  echo '<td class="t ' . $post_type->name . '">' . $text . '</td></tr>';
 }
 $taxonomies = get_taxonomies( $args , $output , $operator );
 foreach( $taxonomies as $taxonomy ) {
  $num_terms  = wp_count_terms( $taxonomy->name );
  $num = number_format_i18n( $num_terms );
  $text = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name , intval( $num_terms ));
  if ( current_user_can( 'manage_categories' ) ) {
   $num = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$num</a>";
   $text = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$text</a>";
  }
  echo '<tr><td class="first b b-' . $taxonomy->name . '">' . $num . '</td>';
  echo '<td class="t ' . $taxonomy->name . '">' . $text . '</td></tr>';
 }
}
add_action( 'right_now_content_table_end' , 'wph_right_now_content_table_end' );


// Numbered pagging
function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

?>
