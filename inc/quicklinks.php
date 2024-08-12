<div id="quick-links">
	<h2>Quick Links</h2>
	<?php 

	$facebook = get_field('facebook_link', 'option');
	$twitter = get_field('twitter_link', 'option');
	$calendar = get_field('sidebar_calendar_link', 'option');
	$purchase_link = get_field('sidebar_spirt_wear_link', 'option');
	$volunteer_link = get_field('sidebar_volunteer_link', 'option');
	$newsletter_link = get_field('sidebar_newsletter_link', 'option');


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

	<div class="quick-icons">
	  <div class="icon"><i class="fa fa-facebook fa-3x" aria-hidden="true">
	    <a target="_blank" href="<?php echo $facebook; ?>">Facebook</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-instagram fa-3x" aria-hidden="true">
	     <a target="_blank" href="https://www.instagram.com/dilworthpta/?hl=en">Instagram</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-calendar-o fa-3x" aria-hidden="true">
	     <a href="<?php echo $calendar; ?>">Calendar</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-hand-paper-o fa-3x" aria-hidden="true">
	     <a target="_blank" href="<?php echo $volunteer_link; ?>">Voulunteer</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-envelope-o fa-3x" aria-hidden="true">
	     <a target="_blank" href="<?php echo $newsletter_link; ?>">Newsletter</a>
	  </i></div>
	  <div class="icon shirt">
	    <a target="_blank" href="<?php echo $purchase_link; ?>">Purchase</a>
	  </div>
	</div><!-- quick icons -->

</div><!-- quick links -->
