<?php
/* Template Name: Industry-Specific Client List*/



$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<div class="logix-page" >
    <div class="logix-page-sidebar-content">
			<div class="sidebar">
				<?php the_field('sidebar_area'); ?>
			</div>
      <div class="main-section">
				<div class="logix-main-content">
					<div class="logix-content-title">
						<h1 style="font-size:<?php the_field('title_size'); ?>;" ><?php the_title(); ?></h1>
						<h2><?php the_field('sub_title'); ?></h2>
						<p>
							<?php the_field('sub_paragraph'); ?>
						</p>
					</div>
					<div class="solution-page-area">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>

				</div>
    		<div class="img-row">
					<img src="<?php the_field('image_one'); ?>" />
					<img src="<?php the_field('image_two'); ?>" />
				</div>

				<div class="columned-menu top-margin">
					<div class="column">
						<div class="titled-section">
							<h3>
								Cold Storage & Grocery Distribution
							</h3>
							<?php
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Cold Storage & Grocery Distribution' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>" >
												<?php the_title(); ?>
											</a>
										</div>
							<?php endwhile;
				 					  endif;
				 						wp_reset_postdata(); ?>
						</div>
						<div class="titled-section">
							<h3>
								Fruit & Vegetable Processors
							</h3>
							<?php
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Fruit & Vegetable Processors' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>" >
												<?php the_title(); ?>
											</a>
										</div>
							<?php endwhile;
				 					  endif;
				 						wp_reset_postdata(); ?>
						</div>
						<div class="titled-section">
							<h3>
								Ice Rinks
							</3>
							<?php
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Ice Rinks' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>" >
												<?php the_title(); ?>
											</a>
										</div>
							<?php endwhile;
				 					  endif;
				 						wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="column">
						<div class="titled-section">
							<h3>
								Food & Beverage Processors
							</h3>
							<?php
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Food and Beverage Processors' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>" >
												<?php the_title(); ?>
											</a>
										</div>
							<?php endwhile;
				 					  endif;
				 						wp_reset_postdata(); ?>
						</div>
						<div class="titled-section">
							<h3>
								Breweries & Distribution
							</h3>
							<?php
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Breweries & Distribution' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>" >
												<?php the_title(); ?>
											</a>
										</div>
							<?php endwhile;
				 					  endif;
				 						wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="column">
						<div class="titled-section">
							<h3>
							Meat & Seafood Processors
						</h3>
						<?php
							$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Meat & Seafood Processors' ) );
							if ( $loop->have_posts() ) :
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<div class="item">
										<a href="<?php the_permalink(); ?>" >
											<?php the_title(); ?>
										</a>
									</div>
						<?php endwhile;
									endif;
									wp_reset_postdata(); ?>
						</div>
						<div class="titled-section">
							<h3>
								Wineries
							</h3>
							<?php
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'customer_industry', 'meta_value' => 'Wineries' ) );
								if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>" >
												<?php the_title(); ?>
											</a>
										</div>
							<?php endwhile;
				 					  endif;
				 						wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
	  </div>
	</div>


<?php

get_footer();
