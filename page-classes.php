<?php
/**
 * Template Name: Classes
 *
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="wrapper">
    <section class="page-content">
    	
		 <div class="page-left">   
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                
                
                <?php the_field('important_dates'); ?>
                
                
                <?php if(get_field('people')) : ?>
					<?php while(has_sub_field('people')) : ?>
                    <?php 
					   $image = get_sub_field('photo');
					   $size = 'person-profile'; 
					?>
                    	<div class="person-profile">
                        	<div class="person-pic">
                                <?php echo wp_get_attachment_image( $image, $size ); ?>
                            </div>
                        	<div class="person-right">
                                <div class="person-name"><?php the_sub_field('name'); ?></div>
                                
                                <?php if(get_sub_field('web_link')!="") : 
                                $weblink = get_sub_field('web_link');
                                ?>
                                <div class="icon"><i class="fa fa-desktop fa-3x" aria-hidden="true">
                                    <a target="_blank"> href="<a href="<?php echo $weblink; ?>">"><?php echo $weblink; ?>"</a>
                                  </i></div>
                                <?php endif; ?>
                                
                                <?php if(get_sub_field('email')!="") : ?>
                                
                                		<?php $personEmail = get_sub_field('email'); ?>
                                        <div class="icon"><i class="fa fa-envelope-o fa-3x" aria-hidden="true">
                                            <a target="_blank"> href="<a href="mailto:<?php the_sub_field('email'); ?>">"><?php echo antispambot($personEmail); ?></a>
                                          </i></div>
                                   
                                
                                <?php endif; ?>
                                
                                <?php if(get_sub_field('calendar_link')!="") : ?>
                               
                                 <div class="icon"><i class="fa fa-calendar-o fa-3x" aria-hidden="true">
                                      <a href="<?php the_sub_field('calendar_link'); ?>" target="_blank">Calendar</a>
                                  </i></div>
                                   
                                    	
                               
                                <?php endif; ?>
                                
                         </div><!-- perspn right -->
                        </div><!-- person profile -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- entry-content -->
        </div><!-- page-left -->
        
        <?php get_sidebar(); ?>  
        
    </section><!-- page-content -->
    
</div><!-- wrapper -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>