<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->



<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
</head>

<body>



        	
          
    



<div id="main" class="wrapper">
    
    <div id="header">
    
    <div id="sociallinks">
    <p>Stay Connected: </p>
        <ul>
        	<li class="facebook"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank">Facebook</a></li>
            <li class="twitter"><a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank">Twitter</a></li>
        </ul>
    </div><!-- sociallinks -->
    
    
    	 <?php if(is_home()) { ?>
            <h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } else { ?>
            <div class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
        <?php } ?>
    
   
        <nav id="site-navigation" class="main-navigation" role="navigation">
		  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?>    </button>
           <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>

	</div><!-- header -->
    
    <div class="clear"></div>

<?php if(!is_front_page()) : ?>
<div id="banner">
	<?php if ( has_post_thumbnail() )  {
        the_post_thumbnail('banners');
    } else {?>
		<img src="<?php the_field('store_banner','option'); ?>" />
	<?php } ?>
</div><!-- banner -->
<?php endif; ?>