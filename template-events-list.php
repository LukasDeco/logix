<?php
/* Template Name: Solutions Archive*/

$solutions_type = ucfirst(get_field('solutions_type'));
$solutions_type_slug = str_replace(" ", "-",strtolower($solutions_type));

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<div class="logix-page blue-gradient">
		<div class="hero-section solutions-archive-hero" style="background-image:url(<?php echo $thumb_url; ?>);">
			<div class="hero-container">
				<div class="hero-title">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
		<div class="solutions-archive-content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="our-solutions solutions-archive has-red-divider-uptop">
			<div class="title">
				Our Events
			</div>
			<div class="events-list">
					<?php
					$args = array( 'post_type' => 'events', 'orderby' => 'title', 'order' => 'ASC' );
					$loop = new WP_Query( $args ) ;
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post();

							$post_type = get_post_type();
							$post_id = get_the_ID();
							?>
								<?php
									endwhile;
									endif;
									wp_reset_postdata();
								?>

			</div>
		</div>


<?php

get_footer();
