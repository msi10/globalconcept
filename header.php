<!DOCTYPE html>
<html lang="de">

<head>
	<title><?php wp_title();?> | Ahmadiyya Muslim Community - <?php bloginfo( 'name' ); ?></title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/960.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script src="js/selectivizr-min.js.js"></script>
	<![endif]--> 


<?php   wp_head();
?> 

</head>

<body>
	<header>
     <center class='bismilah'>
	 <div class='bismilah-arabic'>بسم الله الرحمن الرحيم</div><br><?php _e('In the name of Allah, Most Gracious, Most Merciful', 'globalconcept'); ?>
     </center>
		<hgroup>
			<!--<h1><a href="#" id="logo"></a><span>Ahmadiyya Muslim Community</span><br><span>Country Name</span></h1>-->
			<h1>Ahmadiyya Muslim Community<br><span><?php bloginfo( 'name' ); ?></span></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>		
		</hgroup>
	</header>
	
	<nav id="main-nav">
		<?php
        if (function_exists('wp_nav_menu')) {
            wp_nav_menu( array( 'theme_location' => 'main', 'container' => false, 'menu_class' => '', 'menu_id' => '', 'fallback_cb' => '', 'items_wrap' => '<ul>%3$s</ul>' ) );
        }
        ?>
		<!--<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">News</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="#">Islam</a></li>
			<li><a href="#">Ahmadiyya</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Books</a></li>
			<li><a href="#">Media Library</a></li>
			<li><a href="#">Photo Gallery</a></li>
		</ul>-->
	</nav>
    
    <?php
	if(!is_home()) {
    	if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs();
	}
	?>
	
	<!--<nav id="breadcrumbs">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><span>&gt;</span></li>
			<li><a href="#">Media Library</a></li>
			<li><span>&gt;</span></li>
			<li><a href="#">Friday Sermon</a></li>
			<li><span>&gt;</span></li>
			<li><a href="#">Sermon</a></li>
		</ul>	
	</nav>-->
