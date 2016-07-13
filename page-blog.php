<?php
/**
 * Template Name: Blog
 */

get_header(); ?>


<div class="page-content">


	
				
				
               
<div class="page-left">  
<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
	//'cat' => 1,
	'paged' => $paged
);
query_posts($args); ?>
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>     
       <div class="post-container">         
            <div class="entry-content">
            
            <h2>
					<a href="<?php the_permalink(); ?>">
					<?php if(get_field('alternate_title')!="") {
                        the_field('alternate_title'); 
                            } else {
                        the_title(); }?>
                   </a>
              </h2>
            
            <?php
				global $more;
				$more = 0;
			  ?>
				<?php the_content('Read More &raquo;'); ?>
            </div><!-- entry-content -->
            </div><!-- post container -->
            
            
            
            <?php endwhile; // end of the loop. ?>
            <div class="clear"></div>
            <?php pagi_posts_nav(); ?>
            
            
            
            
            <?php endif; // end of the loop. ?>
            
           </div><!-- page-left --> 
            
            <?php get_sidebar('blog'); ?>
            </div><!-- page-content -->
                
                
                
				
			



<?php get_footer(); ?>