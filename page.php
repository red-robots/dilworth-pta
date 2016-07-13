<?php
/**
 * The template for displaying all pages.
 *
 *
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>




    <div class="page-content">
    	
		  
       
        <div class="page-left">   
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div><!-- entry-content -->
        </div><!-- page-left -->
        
        <?php 
        if(!is_woocommerce()){
            get_sidebar();
        }
         ?> 
        
    </div><!-- page-content -->
    

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>