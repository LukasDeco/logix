<?php
/**
 * Custom Front Page As Specified By Logix
 */

get_header(); ?>

	<div class="logix-page">
		<div class="hero-section" style="background-image:url('<?php echo esc_url( get_theme_mod( 'home_hero_image' ) ); ?>');">
			<div class="hero-container">
				<div class="hero-title">
					<h2>Unlock Your<br> Facilities Potential</h2>
					<h1>Solutions to optimize energy savings, efficiency and production.</h1>
				</div>
				<div class="hero-empty">
				</div>
			</div>
		</div>
		<div class="logix-page-content">
			<div class="testimonials-section">
				<div class="quote-and-title">
					<?php

						$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'full_profile', 'meta_value' => true ) );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post();
							$testimonial_id = get_the_ID();
						?>
					<div class="customer-quote hidden" id="quote-<?php  echo $testimonial_id?>">
						<p class="customer-text"><?php the_field('quote'); ?></p>
						<p class="customer-title"><?php the_field('customer_name'); ?><br><span><?php the_field('customer_company'); ?></span>
							<br><span><?php the_field('customer_title'); ?></span></p>
					</div>
					 <?php endwhile;
					  endif;
					wp_reset_postdata(); ?>

					<div class="title has-red-divider-uptop">
						<p>What The Industry is Saying</p>
					</div>
				</div>

				<div class="logo-strip">
						<?php

						$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'full_profile', 'meta_value' => true ) );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post();
							$testimonial_id = get_the_ID();
							if(get_field('customer_company_logo')) :
						?>
							<div id="logo-<?php echo $testimonial_id; ?>" class="logo">
								<img src="<?php the_field('customer_company_logo'); ?>">
							</div>

					 <?php
							endif;
						endwhile;
					  endif;
					wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="key-benefits-section has-red-divider-uptop">
				<div class="kb-first-level">
					<div class="title">
						Key Benefits
					</div>
					<div class="kb-icons">
						<?php

						$kb_loop = new WP_Query( array( 'post_type' => 'key-benefits', 'orderby' => 'menu_order' ) );
						if ( $kb_loop->have_posts() ) :
							while ( $kb_loop->have_posts() ) : $kb_loop->the_post();
							$kb_id = get_the_ID();

						?>
							<div id="benefit-icon-<?php echo $kb_id; ?>" class="kb-icon">
							<div class="icon">
								<i class="icon-<?php the_field('key_benefit_icon')?>"></i>
							</div>
							<p><?php the_title();?></p>
						</div>

						<?php
							endwhile;
						endif;
											wp_reset_postdata();
						?>
						<div class="kb-icon">
						</div>
					</div>
				</div>
				<div class="kb-second-level">
					<div class="title-and-contact">
						<?php

						$kb_loop = new WP_Query( array( 'post_type' => 'key-benefits' ) );
						if ( $kb_loop->have_posts() ) :
							while ( $kb_loop->have_posts() ) : $kb_loop->the_post();
							$kb_id = get_the_ID();

						?>
						<div id="benefit-title-<?php echo $kb_id; ?>" class="title hidden">
							<h3><?php the_title();?></h3>
						</div>

						<?php
							endwhile;
						endif;
											wp_reset_postdata();
						?>
						<div class="contact">
							<div class="lx-contact-icons"></div>
							<p>Learn what the team can do for you</p>
						</div>
					</div>
					<div class="kb-paragraph">
						<?php

						$kb_loop = new WP_Query( array( 'post_type' => 'key-benefits' ) );
						if ( $kb_loop->have_posts() ) :
							while ( $kb_loop->have_posts() ) : $kb_loop->the_post();
							$kb_id = get_the_ID();

						?>
						<p id="benefit-paragraph-<?php echo $kb_id; ?>" class="hidden kb-paragraph-single" >
							<?php the_field('key_benefit_description'); ?>
						</p>
						<?php
							endwhile;
						endif;
											wp_reset_postdata();
						?>
					</div>
				</div>
				<div class="kb-third-level">
					<div class="third-level-empty">
					</div>
					<?php
						$kb_loop = new WP_Query( array( 'post_type' => 'key-benefits' ) );
						if ( $kb_loop->have_posts() ) :
							while ( $kb_loop->have_posts() ) : $kb_loop->the_post();
							$kb_id = get_the_ID();
							$kb_testimonial = get_field('key_benefit_testimonial');

							if($kb_testimonial) :

							// override $post
							$post = $kb_testimonial;
							setup_postdata( $post );

						?>
							<div id="benefit-testimonial-<?php echo $kb_id; ?>" class="hidden testimonial">
								<div class="text">
									<?php the_field('quote'); ?>
								</div>
								<div class="customer-info">
									<p><?php the_field('customer_name'); ?><br><span><?php the_field('customer_company_title'); ?></span></p>
									<div class="customer-logo">
										<img src="<?php the_field('customer_company_logo'); ?>">
									</div>
								</div>
							</div>
						<?php
								endif;
							endwhile;
						endif;
						wp_reset_postdata();?>
				</div>
			</div>
			<div class="our-solutions has-red-divider-uptop">
				<div class="title">
					Our Solutions
				</div>
				<div class="solutions-menu">
					<div class="product-solutions">
						<h3>Product Solutions</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => '2', 'submenu' => 'Product Solutions' ) ); ?>
					</div>
					<div class="engineered-solutions">
						<h3>Engineered Solutions</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => '2', 'submenu' => 'Engineered Solutions' ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
get_footer();
