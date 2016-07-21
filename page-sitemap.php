<?php
/**
 * Template Name: Sitemap
 *
 *
 */

get_header(); ?>
<div class="wrapper">
<?php while ( have_posts() ) : the_post(); ?>

    <section class="page-content">
    	
		  <div class="page-left">   
            <div class="entry-content">
                <header><h1><?php the_title(); ?></h1></header>
                
               <?php wp_nav_menu( array( 'theme_location' => 'sitemap', 'menu_class' => 'nav-menu' ) ); ?>
            </div><!-- entry-content -->
        </div><!-- page-left -->
        
        <?php get_sidebar(); ?> 
        
    </section><!-- page-content -->
    

<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>