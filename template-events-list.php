<?php
/* Template Name: Events Page*/

$solutions_type = ucfirst(get_field('solutions_type'));
$solutions_type_slug = str_replace(" ", "-",strtolower($solutions_type));

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<div class="logix-page">
		<div class="hero-section solutions-archive-hero" style="background-image:url(<?php echo $thumb_url; ?>);">
			<div class="hero-container">
				<div class="hero-title">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
		<div class="solutions-archive-content flex-column">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<div class="events-list-container">
				<div class="events-list">
						<?php
						$args = array(
							'post_type' => 'events',
							'meta_key'  => 'event_date',
					    'orderby'   => 'meta_value_num',
					    'order'     => 'ASC',
							'meta_query' => array(
								'key'  => 'is_active',
								'value' => true
							)
					    );
						$loop = new WP_Query( $args ) ;
							if ( $loop->have_posts() ) :
								while ( $loop->have_posts() ) : $loop->the_post();

								$post_type = get_post_type();
								$post_id = get_the_ID();
								$date = get_field('event_date', false, false);
								$end_date = get_field('end_date', false, false);
								// make date object
								$date = new DateTime($date);
								$end_date = new DateTime($end_date);
								$date_formatted = $date->format('F') . " " . $date->format('j');
								$end_date_formatted = $end_date->format('F') . " " . $end_date->format('j');
								$date_display = get_field('multiple_day_event', false, false) ? $date_formatted . " - " . $end_date_formatted : $date_formatted;
									// $date->format('F') . " " . $date->format('j') . " - " . $end_date->format('F') . " " . $end_date->format('j');
								?>
									<div class="event">
										<p class="event-date-header"><?php echo strtoupper($date->format('F')); ?> <?php echo $date->format('Y'); ?></p>
										<div class="event-header">
											<?php if(get_the_post_thumbnail_url()) { ?>
											<div class="event-icon">
												<img src="<?php the_post_thumbnail_url(); ?>" >
											</div>
											<?php } ?>
											<div class="event-header-info">
												<h3 class="event-title"><?php the_title(); ?></h3>
												<p class="event-venue"><?php the_field('event_venue'); ?></p>
											</div>
										</div>

										<p><?php echo $date_display; ?></p>
										<p class="learn-more">
											<?php the_field('for_more_information_text'); ?>
										</p>

										<div class="has-red-divider-uptop"></div>
									</div>
									<?php
										endwhile;
										endif;
										wp_reset_postdata();
									?>

				</div>
			</div>
		</div>

	</div>


<?php

get_footer();
