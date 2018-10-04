<?php
/* Template Name: Why Logix*/

$background_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<div class="logix-page">
		<div class="hero-section solutions-archive-hero" style="background-image:url(<?php echo $background_image; ?>);">
			<div class="hero-container">
				<div class="hero-title">
					<h2>Why Logix</h2>
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
				Why Logix
			</div>
			<div class="solutions-list">
				<div class="solutions-menu">
							<ul class="menu">
								<h3>Our Advantage</h3>
								<?php if(!get_field('our_advantage_1_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_advantage_1_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
								<?php if(!get_field('our_advantage_2_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_advantage_2_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
								<?php if(!get_field('our_advantage_3_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_advantage_3_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
								<?php if(!get_field('our_advantage_4_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_advantage_4_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
							</ul>

				</div>
				<div class="solutions-menu">
							<ul class="menu">
								<h3>Our Process</h3>
								<?php if(!get_field('our_process_1_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_process_1_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
								<?php if(!get_field('our_process_2_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_process_2_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
								<?php if(!get_field('our_process_3_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_process_3_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
								<?php if(!get_field('our_process_4_link')) {
										//do nothing!
								}
											else {
												$link_id = get_field('our_process_4_link', false, false);
								?>
								<li class="solution-archive-item">
									<a href="<?php echo get_the_permalink($link_id); ?>"><?php echo get_the_title($link_id); ?></a>
								</li>
								<?php } ?>
							</ul>

				</div>
			</div>
		</div>


<?php

get_footer();
