<?php
/**
 * The main template file.
 */

get_header(); 

$facebook = get_field('facebook_link', 'option');
$twitter = get_field('twitter_link', 'option');
$calendar = get_field('sidebar_calendar_link', 'option');
$purchase_link = get_field('sidebar_spirt_wear_link', 'option');
$volunteer_link = get_field('sidebar_volunteer_link', 'option');
$newsletter_link = get_field('sidebar_newsletter_link', 'option');

// specific post ID you want to pull
$post = get_post(45); 
setup_postdata( $post );
 
  $newsletter_title = get_field('newsletter_title');
  $newsletters_description = get_field('newsletters_description');
  
  $volunteer_title = get_field('volunteer_title');
  $volunteer_description = get_field('volunteer_description');
  
  $purchase_title = get_field('purchase_title');
  $purchase_description = get_field('purchase_description');



$iframe = get_field('google_cal_iframe');
$shortcode = get_field('google_cal_shortcode');

 
  
 
wp_reset_postdata();

?>

<div id="home-slider">
  <?php 
    // Query the Post type Slides
    $querySlides = array(
    'post_type' => 'slide',
    'posts_per_page' => '-1'
    );
    // The Query
    $the_query = new WP_Query( $querySlides );
    if ( $the_query->have_posts()) : ?>

      <div class="flexslider">
        <ul class="slides">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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



<section class="blue-banner">
  <div class="wrapper">

  <div class="intro">Ways to stay involved:</div>

    <div class="envolved first">
      <a class=" js-blocks" href="<?php echo $newsletter_link; ?>" target="_blank">
        <div class="icon"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></div>
        <div class="link-content">
          <h3><?php echo $newsletter_title; ?></h3>
          <p><?php echo $newsletters_description; ?></p>
        </div><!-- link content -->
      </a>
    </div><!-- envolved -->

    <div class="envolved first ">
      <a class=" js-blocks" href="<?php echo $volunteer_link; ?>" target="_blank">
        <div class="icon"><i class="fa fa-hand-paper-o fa-3x" aria-hidden="true"></i></div>
        <div class="link-content">
          <h3><?php echo $volunteer_title; ?></h3>
          <p><?php echo $volunteer_description; ?></p>
        </div><!-- link content -->
      </a>
    </div><!-- envolved -->

    <div class="envolved first ">
      <a class=" js-blocks" href="<?php echo $purchase_link; ?>" target="_blank">
        <div class="icon shirt">
          <img src="<?php bloginfo('template_url') ?>/images/shirt.png">
        </div>
        <div class="link-content">
          <h3><?php echo $purchase_title; ?></h3>
          <p><?php echo $purchase_description; ?></p>
        </div><!-- link content -->
      </a>
    </div><!-- envolved -->

  </div><!-- wrapper -->
</section><!-- blue banner -->

            
<div class="wrapper">        
<section class="page-content">


<div class="col first">


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



<div class="home-box">
<h2>Facebook</h2>
<div class="clear"></div>
<?php //echo do_shortcode('[minitwitter id="492307712277872641" username="selwynpta" limit=2]');  ?>
<?php echo do_shortcode('[custom-facebook-feed]');  ?>


</div><!-- home-box -->

</div><!-- col -->


<div class="col first">

<div class="home-box">
<h2>Upcoming Events</h2>
<div class="clear"></div>
<?php //echo do_shortcode('[google-calendar-events id="2" type="list"]'); ?>
<?php //echo do_shortcode('[calendar id="1309"]'); ?>
<?php 

if( $shortcode != '' ) {
  echo do_shortcode($shortcode);
} elseif ( $iframe != '' ) {
  echo $iframe;
}

 ?>
<!-- <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dilworthschoolpta%40gmail.com&amp;color=%2329527A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->
<div class="clear"></div>
<div class="view-cal">
<a href="<?php bloginfo('url'); ?>/calendar">View Calendar &raquo;</a>
</div><!-- view calendar -->
</div><!-- home-box -->

</div><!-- col -->




<div class="col last">
  <?php get_template_part('inc/quicklinks'); ?>
</div><!-- col -->



</div><!-- wrapper -->

<div class="clear"></div>

<?php if(get_field('logos', 'option')) :  ?>
  <div class="community-sponsors">
    <div class="padding20">
    <?php 
    while(has_sub_field('logos', 'option')) : 
    //the_row;

      $image = get_sub_field('logo', 'option'); 
      $link = get_sub_field('link', 'option'); 
      if( $link == '' ) {
        $link = '#';
      }
      $url = $image['url'];
      $title = $image['title'];
      $alt = $image['alt'];
      $caption = $image['caption'];
      $size = 'medium';
      $thumb = $image['sizes'][ $size ];

      echo '<div class="logos">';
        echo '<a target="_blank" href="' . $link . '">';
          echo '<img src="'.$thumb.'"  />';
        echo '</a>';
      echo '</div>';

    endwhile;
    ?>
    </div><!-- community-sponsors -->
  </div><!-- community-sponsors -->
<?php  endif; ?>



</section><!-- page-content -->
            
<?php get_footer(); ?>