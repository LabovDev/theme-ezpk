<?php get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="wrap wrap--mxw">
			<div class="bloc bloc--50">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			</div>
			<div class="bloc bloc--50 blocTruck">
				<h1 class="hdln hdln--stock"><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<p class="txt"><?php the_field('tr_desc'); ?></p>
				<div class="wrap truckCta">
					<!-- <a href="<?php the_field('tr_file'); ?>" class="btn btn--prd">Download Spec' Sheet PDF</a> -->
					<a href="<?php bloginfo('url'); ?>/?page_id=16" class="btn btn--prd btn--dark">Contact Us About This Truck</a>
				</div> <!-- END .blocCta -->
				<h2 class="hdln hdln--truckSub">Chassis Features</h2>
					<?php
						// vars
						$chasis = get_field('trCfeat');	
						if( $chasis ): ?>
					<table class="trTable trTable--main">
						<tr>
							<td class="txt txt--trLabel">Engine (Make & Model)</td>
							<td class="txt txt--trValue"><?php echo $chasis['trEng']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Horsepower</td>
							<td class="txt txt--trValue"><?php echo $chasis['trHp']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Transmission (Make)</td>
							<td class="txt txt--trValue"><?php echo $chasis['trTransM']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Transmission (Type)</td>
							<td class="txt txt--trValue"><?php echo $chasis['trTransT']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Front Axle</td>
							<td class="txt txt--trValue"><?php echo $chasis['trFaxle']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Rear Axle</td>
							<td class="txt txt--trValue"><?php echo $chasis['trRaxle']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Wheelbase</td>
							<td class="txt txt--trValue"><?php echo $chasis['trWbase']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Pump Drive</td>
							<td class="txt txt--trValue"><?php echo $chasis['trPdrive']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">GVWR</td>
							<td class="txt txt--trValue"><?php echo $chasis['trGvwr']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Chassis Options</td>
							<td class="txt txt--trValue"><?php echo $chasis['trCopt']; ?></td>
						</tr>
					</table>
					<?php endif; ?>

				<h2 class="hdln hdln--truckSub">Body Features</h2>
					<?php
						// vars
						$body = get_field('trBfeat');	
						if( $body ): ?>
					<table class="trTable trTable--main">
						<tr>
							<td class="txt txt--trLabel">Make</td>
							<td class="txt txt--trValue"><?php echo $body['trMake']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Model</td>
							<td class="txt txt--trValue"><?php echo $body['trMdl']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Type</td>
							<td class="txt txt--trValue"><?php echo $body['trType']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Color</td>
							<td class="txt txt--trValue"><?php echo $body['trColor']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Capacity</td>
							<td class="txt txt--trValue"><?php echo $body['trCap']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Paint / Powder Coat</td>
							<td class="txt txt--trValue"><?php echo $body['trPaint']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Pump PTO</td>
							<td class="txt txt--trValue"><?php echo $body['trPump']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Cab Shield</td>
							<td class="txt txt--trValue"><?php echo $body['trCshield']; ?></td>
						</tr>
						<tr>
						<tr>
							<td class="txt txt--trLabel">Controls</td>
							<td class="txt txt--trValue"><?php echo $body['trCntrls']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Lights</td>
							<td class="txt txt--trValue"><?php echo $body['trLights']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Reever / Winch / Kickbar</td>
							<td class="txt txt--trValue"><?php echo $body['trRkw']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Cart Tippers</td>
							<td class="txt txt--trValue"><?php echo $body['trCartTip']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Body Options</td>
							<td class="txt txt--trValue"><?php echo $body['trBopt']; ?></td>
						</tr>
					</table>
					<?php endif; ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>