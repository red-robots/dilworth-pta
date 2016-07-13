<?php
/**
 * The template for displaying the footer.
 *
 */
?>
	
    
    <div id="footer">
		<?php the_field('footer_text', 'options'); ?> | 
        
        <?php $email = get_field('footer_email', 'options'); ?>
        <a href="mailto:<?php the_field('footer_email', 'options'); ?>">
			<?php echo antispambot($email); ?>
        </a> | 
        <a href="<?php bloginfo('url'); ?>/sitemap">Sitemap</a> | 
        <span class="siteby"><a href="http://bellaworksweb.com">Site by Bellaworks</a></span>
	</div><!-- #footer -->
    
    
    </div><!-- #main .wrapper -->
	


<?php wp_footer(); ?>
<?php the_field('google_analytics', 'options'); ?>
</body>
</html>