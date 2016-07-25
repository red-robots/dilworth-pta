<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>



<div class="wrapper">
<div class="page-content">

<div class="page-left">

			<?php while ( have_posts() ) : the_post(); ?>
            
          <div class="entry-content">  
           <h1>
					<?php if(get_field('alternate_title')!="") {
                        the_field('alternate_title'); 
                            } else {
                        the_title(); }?>
            </h1>  
			<?php the_content(); ?>
			</div><!-- #content -->	

			<?php endwhile; // end of the loop. ?>
    </div><!-- page left -->        
            
    <div class="page-right">
	<?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
	
		<?php dynamic_sidebar( 'blog_sidebar' ); ?>
	
	<?php endif; ?>
    </div><!-- #primary-sidebar --> 
            

</div><!-- #content -->

</div><!-- wrapper -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>