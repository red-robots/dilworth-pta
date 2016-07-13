<?php
/**
 * The main template file.
 */

get_header(); ?>





<div id="home-slider">
<?php 
// Query the Post type Slides
$querySlides = array(
	'post_type' => 'slide',
	'posts_per_page' => '-1'
);
// The Query
$the_query = new WP_Query( $querySlides );
?>
<?php 
// The Loop
 if ( $the_query->have_posts()) : ?>

<div class="flexslider">
        <ul class="slides">
        <?php while ( $the_query->have_posts() ) : ?>
			<?php $the_query->the_post(); ?>
            
            <li> 
              
                   <img src="<?php the_field('banner_image'); ?>" />
                
            </li>
            
           <?php endwhile; ?>
      	 </ul><!-- slides -->
</div><!-- .flexslider -->


         <?php endif; // end loop ?>
        
    <?php wp_reset_postdata(); ?>
    
</div><!-- home slider -->



<div class="clear"></div>





            
            
            <div class="page-content">
            
            
            <div class="home-left">
            
            <div class="home-box-cont">
            <div class="home-box">
            <h2>In The News</h2>
            <div class="clear"></div>
            <?php 
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => '2'
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : ?>
              <?php $the_query->the_post(); ?>
           
           		<?php //the_excerpt(); ?>
                <div class="news-blurb">
                    <a href="<?php the_permalink(); ?>">
                    <div class="blurb-date"><?php echo get_the_date(); ?></div>
                    		<h3><?php the_title(); ?> &raquo;</h3>
                          <?php echo get_excerpt(80); ?>
                    </a>
                </div><!-- news blurb -->
                
                <!--<div class="inthenews-readmore"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></div>	-->
            
            	<?php endwhile; ?>
				<?php endif; // end have_posts() check ?>
                <?php wp_reset_postdata(); ?>
            </div><!-- home-box -->
            </div><!-- home-box-cont -->
            
            
            <div class="home-box-cont">
            <div class="home-box">
            <h2>Facebook Posts</h2>
            <div class="clear"></div>
            		<?php //echo do_shortcode('[minitwitter id="492307712277872641" username="selwynpta" limit=2]');  ?>
                    <?php echo do_shortcode('[custom-facebook-feed]');  ?>
                    
                    
           </div><!-- home-box -->
            </div><!-- home-box-cont -->
            
            </div><!-- home left -->
            
            
            <div class="home-middle">
            
            <div class="home-box-cont">
                <div class="home-box">
                    <h2>Upcoming Events</h2>
                    <div class="clear"></div>
                        <?php //echo do_shortcode('[google-calendar-events id="2" type="list"]'); ?>
                        <?php echo do_shortcode('[google-calendar-events id="2353" type="list"]'); ?>
                    <div class="clear"></div>
                        <div class="view-cal">
                        		<a href="<?php bloginfo('url'); ?>/calendar">View Calendar &raquo;</a>
                        </div><!-- view calendar -->
                </div><!-- home-box -->
            </div><!-- home-box-cont -->
            
            </div><!-- home middle -->
            	
				
				
                
              <div class="home-right">
              		<div class="icon-mail"><a href="<?php the_field('sidebar_email_link', 'option'); ?>" target="_blank">Mail</a></div>
    <div class="icon-cal"><a href="<?php the_field('sidebar_calendar_link', 'option'); ?>">Calendar</a></div>
    <div class="button-volunteer"><a href="<?php the_field('sidebar_volunteer_link', 'option'); ?>" target="_blank">Volunteer</a></div>
                  
                  <div id="quick-links">
              			<h2>Quick Links</h2>
                  <?php 
				  		// Run the Quicklinks Repeater Field
						if(get_field('quick_links', 'option')) :  ?>
                      <ul>
						  <?php while(has_sub_field('quick_links', 'option')) :  ?>
                          	<li>
                                <a target="_blank" href="<?php 
										if(get_sub_field('link', 'option')!="") {
											the_sub_field('link', 'option');
										} elseif(get_sub_field('file', 'option')!="") {
											the_sub_field('file', 'option');
										} else { echo "#"; } ?>">
                                        <?php the_sub_field('title', 'option'); ?> &raquo;
                                </a>
                            </li>
                          <?php endwhile; ?>
                      </ul>
                  <?php endif; ?>
				  
                  </div><!-- quick links -->
                  
              </div><!-- home right -->
                
           
           <div class="clear"></div>
           
           
           <div class="community-sponsors">
           	<div class="padding20">
            <?php 
				
				if(get_field('logos', 'option')) : 
				while(has_sub_field('logos', 'option')) : 
				//the_row;
				
				$image = get_sub_field('logo', 'option'); 
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];
				$size = 'medium';
				$thumb = $image['sizes'][ $size ];
				
					echo '<div class="logos">';
					echo '<img src="'.$thumb.'"  />';
					echo '</div>';
				
				endwhile;
				
				endif;
			?>
           	</div><!-- community-sponsors -->
           </div><!-- community-sponsors -->
           
           
            
            </div><!-- page-content -->
            
            

        
        

		


<?php get_footer(); ?>