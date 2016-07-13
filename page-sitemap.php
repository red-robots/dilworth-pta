<?php
/**
 * Template Name: Sitemap
 *
 *
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>




    <div class="page-content">
    	
		  
       
        <div class="page-left">   
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
               <?php wp_nav_menu( array( 'theme_location' => 'sitemap', 'menu_class' => 'nav-menu' ) ); ?>
            </div><!-- entry-content -->
        </div><!-- page-left -->
        
        <?php get_sidebar(); ?> 
        
    </div><!-- page-content -->
    

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>