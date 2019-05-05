<?php
/* Template Name: Customer Profiles*/



$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

<div class="logix-page blue-gradient" >
	<div class="logix-page-sidebar-title">
		<div class="sidebar">
		</div>
		<div class="logix-content-title main-section">
			<h1 style="font-size:<?php the_field('title_size'); ?>;" ><?php the_title(); ?></h1>
			<h2><?php the_field('sub_title'); ?></h2>
		</div>
	</div>
	<div class="logix-page-sidebar-content">
		<div class="sidebar">
			<?php the_field('sidebar_area'); ?>
		</div>
		<div class="main-section">
			<div class="logix-main-content">
				<div class="solution-page-area">
					<?php the_field('sub_paragraph'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="img-row">
				<img src="<?php the_field('image_one'); ?>" />
				<img src="<?php the_field('image_two'); ?>" />
			</div>
			<div class="logix-mini-menu has-red-divider-uptop top-margin">
				<div class="title">
					Customer Profiles
				</div>
				<div class="logix-mini-menu-section">
					<div>
						<ul class="customer-profiles-list">
							<?php
							$loop = new WP_Query( array( 'post_type' => 'testimonials', 'meta_key' => 'full_profile', 'meta_value' => true, 'orderby'=> 'title', 'order' => 'ASC' ) );
							if ( $loop->have_posts() ) :
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<li class="item">
										<a href="<?php the_permalink(); ?>" >
											<?php the_title(); ?>
										</a>
									</li>
								<?php endwhile;
									endif;
									wp_reset_postdata(); ?>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

get_footer();
