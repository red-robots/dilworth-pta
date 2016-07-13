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
    
<div class="clear"></div>

	<?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'blog_sidebar' ); ?>
		</div><!-- #secondary -->
        
        
        
        
	<?php endif; ?>
</div><!-- #page-left -->