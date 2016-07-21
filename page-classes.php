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
					   $url = $image['url'];
					   $title = $image['title'];
					   $alt = $image['alt'];
					   $caption = $image['caption'];
						 
					   // thumbnail
					   $size = 'person-profile'; // custom size from add_image_size
					   $thumb = $image['sizes'][ $size ];
					   $width = $image['sizes'][ $size . '-width' ];
					   $height = $image['sizes'][ $size . '-height' ];
					?>
                    	<div class="person-profile">
                        	<div class="person-pic"><img src="<?php echo $thumb; ?>" /></div>
                        	<div class="person-right">
                                <div class="person-name"><?php the_sub_field('name'); ?></div>
                                
                                <?php if(get_sub_field('web_link')!="") : ?>
                                <div class="person-weblink">
                                    <a href="<?php the_sub_field('web_link'); ?>" target="_blank">
                                    	<?php the_sub_field('web_link'); ?>
                                    </a>
                                </div><!-- person weblink -->
                                <?php endif; ?>
                                
                                <?php if(get_sub_field('email')!="") : ?>
                                <div class="person-email">
                                		<?php $personEmail = get_sub_field('email'); ?>
                                    <a href="mailto:<?php the_sub_field('email'); ?>">
											<?php echo antispambot($personEmail); ?>
                                    </a>
                                </div><!-- person email -->
                                <?php endif; ?>
                                
                                <?php if(get_sub_field('calendar_link')!="") : ?>
                                <div class="person-calendar">
                                    <a href="<?php the_sub_field('calendar_link'); ?>" target="_blank">
                                    	<?php the_sub_field('calendar_link'); ?>
                                    </a>
                                </div><!-- person calendar -->
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