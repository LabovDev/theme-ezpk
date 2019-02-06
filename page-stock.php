<?php

// Template Name: In Stock

get_header(); ?>

<section id="content" class="wrap wrap--mxw" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc hero hero--instock">
				<h1 class="hdln hdln--hero hdln--cntnt">In-stock Mixers</h1>
			</div> <!-- END .heroImg -->
		</header>




		<section class="bloc instock" id="content" role="main">
			<div class="inStock__item">

			<?php
				$args = array(
  				'post_type'   => 'in_stock_trucks',
  				'post_status' => 'publish'
 				);
 
				$in_stock_trucks = new WP_Query( $args );
				if( $in_stock_trucks->have_posts() ) :
			?>
			<?php
      while( $in_stock_trucks->have_posts() ) :
        $in_stock_trucks->the_post();
      ?>
		
			<div class="bloc bloc--50 blocTruck">
				<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
				<h1 class="hdln hdln--stock"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content(); ?>
				<div class="wrap truckCta">
					<a href="<?php bloginfo('url'); ?>/?page_id=16" class="btn btn--dark">Contact Us About This Truck</a>
					<a href="<?php the_permalink(); ?>" class="btn">More Info</a>
				</div>
			</div>
		
			<?php endwhile; wp_reset_postdata(); ?>
			<?php else : esc_html_e( 'No trucks for sale at this time.', 'text-domain' ); endif; ?>				

			</div>

		
		</section>
		<?php endwhile; endif; ?>
		
<?php get_footer(); ?>