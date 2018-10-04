<?php
/* Template Name: Solutions Archive*/

$solutions_type = get_field('solutions_type');
$solutions_type_slug = str_replace(" ", "-",strtolower($solutions_type));

get_header(); ?>

	<div class="logix-page">
		<div class="hero-section solutions-archive-hero" style="background-image:url(<?php echo $background_image; ?>);">
			<div class="hero-container">
				<div class="hero-title">
					<h2><?php echo $solutions_type; ?></h2>
				</div>
				<div class="hero-empty">
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
				Our <?php echo $solutions_type; ?>
			</div>
			<div class="solutions-list">
				<div class="solutions-menu">
							<ul class="menu">
					<?php
					$args = array( 'post_type' => $solutions_type_slug, 'orderby' => 'title', 'order' => 'ASC' );
					$loop = new WP_Query( $args ) ;
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post();

							$post_type = get_post_type();
							$post_id = get_the_ID();
							?>


								<li class="solution-archive-item" id="<?php echo $post_type; ?>-<?php echo $post_id; ?>">
									<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
								</li>
								<?php
									endwhile;
									endif;
									wp_reset_postdata();
								?>
							</ul>

				</div>
				<div class="solution-image">
					<?php
					$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) : $loop->the_post();

							$post_type = get_post_type();
							$post_id = get_the_ID();
							?>
					<?php the_post_thumbnail('full', ['class' => 'solution-' . $post_id . '-image']); ?>
					<?php
									endwhile;
									endif;
									wp_reset_postdata();
								?>
				</div>
			</div>
		</div>


<?php

get_footer();
