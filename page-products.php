<?php
/**
 * Template Name: Products 
 */

get_header(); ?>
<div class="wrapper">
	<section class="page-content">

		<div class="page-left">  

			<div class="entry-content">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<header><h1><?php the_title(); ?></h1></header>
			
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</div><!-- entry-content -->

		<?php wp_reset_postdata(); ?>     


		<ul class="products">
			<?php
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => -1,
			);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			woocommerce_get_template_part( 'content', 'product' );
			endwhile;
			} else {
			echo __( 'No products found' );
			}
			wp_reset_postdata();
			?>
		</ul><!--/.products-->

		</div><!-- page-left -->            


	<div class="page-right">
		<?php if ( is_active_sidebar( 'product_sidebar' ) ) : ?>

			<?php dynamic_sidebar( 'product_sidebar' ); ?>

		<?php endif; ?>

		<div id="ordering-information">
			<a href="<?php bloginfo( 'url'); ?>/spirit-wear/ordering-information">Ordering Information &raquo;</a>
		</div><!-- #secondary -->

	</div><!-- #primary-sidebar -->           

	</section><!-- page-content -->
</div><!-- wrapper -->
<?php get_footer(); ?>