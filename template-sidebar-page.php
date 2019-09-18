<?php
/**
 * A general use template for page content with a customizable sidebar
 *Template Name: Sidebar Page
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
			<h1 style="font-size:<?php the_field('title_size'); ?>; line-height: <?php the_field('title_size'); ?>;" ><?php the_title(); ?></h1>
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
					<p>
						<?php the_field('sub_paragraph'); ?>
					</p>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
					<?php
					$forward_link = get_field('forward_link', false, false);
					$back_link = get_field('backward_link', false, false);

					if($back_link || $forward_link) { ?>
						<div class="back-forward-links">
					<?php }

					if(!$back_link) {
						//do nothing
					}
					else { ?>

						<a href="<?php echo get_the_permalink($back_link); ?>">< <?php echo get_the_title($back_link); ?></a>
					<?php }
					if(!$forward_link) {
						//do nothing
					}
					else { ?>
						<a href="<?php echo get_the_permalink($forward_link); ?>"><?php echo get_the_title($forward_link); ?> ></a>
					<?php }

					if($back_link || $forward_link) { ?>
					</div>
					<?php }
					?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
