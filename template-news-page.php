<?php
/**
 * A general use template for page content with a customizable sidebar
 *Template Name: News Page
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
				<div class="news-links">
          <?php
          $args = array(
            'order' => 'ASC',
            'post_status' => 'publish');
          $loop = new WP_Query( $args ) ;
          if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="news-article">
	          <div class="news-title red-large-font-list-item">
	            <span class="large-text"><?php

	            $date = new DateTime(get_the_date());
	            echo $date->format('F, Y');

	            ?></span>
	            <?php the_title(); ?>
	          </div>
						<div class="news-preview">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">
									Learn More
								</a>
						</div>
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
</div>

<?php
get_footer();
