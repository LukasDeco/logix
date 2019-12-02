<?php
/**
 * Single Post
 *
 *
 * @package Logix
 */

get_header(); ?>

<div class="logix-page" >
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
					<p class="sub-paragraph">
						<?php the_field('sub_paragraph'); ?>
					</p>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
