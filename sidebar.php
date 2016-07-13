<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="page-right">

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

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
        
        
        
        
	<?php endif; ?>
</div><!-- #page-left -->