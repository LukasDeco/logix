<?php
/* Template Name: Customers*/



$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

get_header(); ?>

	<div class="logix-page blue-gradient">
		<div class="hero-section solutions-archive-hero" style="background-image:url(<?php echo $thumb_url; ?>);">
			<div class="hero-container">
				<div class="hero-title">
					<h2>Customers</h2>
				</div>
				<div class="hero-empty">
				</div>
			</div>
		</div>
    <div class="logix-page-sidebar-content">
			<div class="sidebar">
	      <?php the_field('sidebar_area'); ?>
	    </div>
      <div class="main-section">
    		<div class="main-content">
    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    				<?php the_content(); ?>
    			<?php endwhile; endif; ?>
    		</div>
    		<div class="logix-mini-menu has-red-divider-uptop">
    			<div class="title">
    				Our Customers
    			</div>
        	<div class="logix-mini-menu-section">
						<div>
							<h3><a href="<?php the_field('industries_served_link') ?>">Industries Served</a></h3>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => '14', 'submenu' => 'Industries Served' ) ); ?>
						</div>
						<div>
							<h3><a href="<?php the_field('customer_profiles_link') ?>">Customer Profiles</a></h3>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => '14', 'submenu' => 'Customer Profiles' ) ); ?>
						</div>
					</div>
		    </div>
		  </div>
		</div>
	</div>


<?php

get_footer();
