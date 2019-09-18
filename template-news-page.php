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
						'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish');
          $loop = new WP_Query( $args ) ;
          if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="news-article">
						<div class="article-head">
							<?php $img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							<img src="<?php echo $img_url; ?>" class="news-image">
							<div class="article-info">
			          <div class="news-title">
			            <?php the_title(); ?>
			          </div>
								<div class="news-date">
									<?php
									$date = new DateTime(get_the_date());
									echo $date->format('F, Y');
									?>
								</div>
							</div>
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
