<?php get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="wrap wrap--mxw">
			<div class="bloc bloc--50">
				<?php 
					$image = get_field('tr_img');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
			<div class="bloc bloc--50">
				<h1 class="hdln hdln--trMain"><?php the_field('tr_name'); ?></h1>
				<table>
					<tr>
						<td class="txt txt--trLabel">Available Units:</td>
						<td class="txt txt--trValue"><?php the_field('tr_units'); ?></td>
					</tr>
					<tr>
						<td class="txt txt--trLabel">Milage:</td>
						<td class="txt txt--trValue"><?php the_field('tr_miles'); ?></td>
					</tr>
					<tr>
						<td class="txt txt--trLabel">Work Hours:</td>
						<td class="txt txt--trValue"><?php the_field('tr_hours'); ?></td>
					</tr>
					<tr>
						<td class="txt txt--trLabel">Prices:</td>
						<td class="txt txt--trValue"><?php the_field('tr_price'); ?></td>
					</tr>
				</table>
				<p class="txt"><?php the_field('tr_desc'); ?></p>
				<div class="wrap blocCta">
					<a href="<?php the_field('tr_file'); ?>" class="btn btn--prd">Download Spec' Sheet PDF</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=16" class="btn btn--prd btn--dark">Contact Us About This Truck</a>
				</div> <!-- END .blocCta -->
				<h2 class="hdln hdln--prdSub">Chasis Features</h2>
					<?php
						// vars
						$chasis = get_field('trCfeat');	
						if( $chasis ): ?>
					<table>
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
							<td class="txt txt--trLabel">GVWR</td>
							<td class="txt txt--trValue"><?php echo $chasis['trGvwr']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Chasis Options</td>
							<td class="txt txt--trValue"><?php echo $chasis['trCopt']; ?></td>
						</tr>
					</table>
					<?php endif; ?>

				<h2 class="hdln hdln--prdSub">Body Features</h2>
					<?php
						// vars
						$body = get_field('trBfeat');	
						if( $body ): ?>
					<table>
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
							<td class="txt txt--trLabel">Capacity</td>
							<td class="txt txt--trValue"><?php echo $body['trCap']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Drum</td>
							<td class="txt txt--trValue"><?php echo $body['trDrum']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Gearbox</td>
							<td class="txt txt--trValue"><?php echo $body['trGbox']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Fold Over</td>
							<td class="txt txt--trValue"><?php echo $body['trFoldo']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Chute Extensions</td>
							<td class="txt txt--trValue"><?php echo $body['trChute']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Water Tank Capacity</td>
							<td class="txt txt--trValue"><?php echo $body['trWater']; ?></td>
						</tr>
						<tr>
							<td class="txt txt--trLabel">Color</td>
							<td class="txt txt--trValue"><?php echo $body['trColor']; ?></td>
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