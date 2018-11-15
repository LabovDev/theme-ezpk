<?php

// Template Name: Distributors

get_header(); ?>

<section id="content" class="wrap" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc hero hero--gen" style="background: #ccc url('<?php the_field('gen_hero_img'); ?>') top center/cover no-repeat;">
				<h1 class="hdln hdln--hero"><?php the_field('gen_hdln'); ?></h1>
			</div> <!-- END .hero -->
		</header>

		<section class="wrap wrap--gen">
			<div class="bloc bloc__gen">
				<?php if (function_exists('ssf_wp_template')) {print ssf_wp_template('[SUPER-STORE-FINDER]');} ?>
			</div>
		</section> <!-- END .blocFeatSplit -->
			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>