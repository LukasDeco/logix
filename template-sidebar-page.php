<?php
/**
 * A general use template for page content with a customizable sidebar
 *Template Name: Sidebar Page
 *
 *
 * @package Logix
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="logix-page">
				<?php
					while ( have_posts() ) : the_post(); ?>
						<div class="solution-page">
							<div class="solution-main-content">
								<div class="title-area">
									<h1 style="font-size:<?php the_field('title_size'); ?>;" ><?php the_title(); ?></h1>
									<h2><?php the_field('sub_title'); ?></h2>
									<h5>
										<?php the_field('sub_paragraph'); ?>
									</h5>
								</div>
								<div class="solution-page-area">
									<?php the_content(); ?>
								</div>

							</div>

							<div class="solution-sidebar">
								<div class="solution-sidebar">

								<?php the_field('sidebar_area'); ?>

							</div>
						</div>
				<?php		endwhile; // End of the loop.   ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
