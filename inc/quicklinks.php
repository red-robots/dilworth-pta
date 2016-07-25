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

	<div class="quick-icons">
	  <div class="icon"><i class="fa fa-facebook fa-3x" aria-hidden="true">
	    <a href="<?php echo $facebook; ?>">Facebook</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-twitter fa-3x" aria-hidden="true">
	     <a href="<?php echo $twitter; ?>">Twitter</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-calendar-o fa-3x" aria-hidden="true">
	     <a href="<?php echo $calendar; ?>">Calendar</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-hand-paper-o fa-3x" aria-hidden="true">
	     <a href="<?php echo $volunteer_link; ?>">Voulunteer</a>
	  </i></div>
	  <div class="icon"><i class="fa fa-envelope-o fa-3x" aria-hidden="true">
	     <a href="<?php echo $newsletter_link; ?>">Newsletter</a>
	  </i></div>
	  <div class="icon shirt">
	    <a href="<?php echo $purchase_link; ?>">Purchase</a>
	  </div>
	</div><!-- quick icons -->

</div><!-- quick links -->