<?php
/**
 * The template for displaying product solutions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
          <div class="solution-sidebar">
            <div class="logix-quote">
  						<div class="customer-logo">
                <img src=<?php the_field('customer_company_logo') ?> >
              </div>
  						<div class="solution-quote">
  							<p><?php the_field('quote') ?></p>
  						</div>
  							<div class="customer-info">
  								<p><?php the_field('customer_name') ?><br>
					           <span><?php the_field('customer_company') ?></span><br>
                     <span><?php the_field('customer_title') ?></span>
  								</p>
  				   	</div>
            </div>
          </div>
          <div class="solution-main-content">
            <div class="title-area">
              <h1 style="font-size:<?php the_field('title_size'); ?>;" >
                <?php the_title(); ?>
              </h1>
            </div>
            <div class="solution-page-area">
              <div class="main-content-section">
                <div class="has-red-divider-uptop">
                  Customer Need
                </div>
                <div class="top-margin-small">
                  <?php the_field('customer_need_paragraph'); ?>
                </div>
              </div>
              <div class="main-content-section">
                <div class="has-red-divider-uptop">
                  Logix Solution
                </div>
                <div class="top-margin-small">
                  <?php the_field('logix_solution_paragraph'); ?>
                </div>
              </div>
              <div class="main-content-section">
                <div class="has-red-divider-uptop">
                  Business Value Delivered
                </div>
                <div class="top-margin-small">
                  <?php the_field('business_value_paragraph'); ?>
                </div>
              </div>
              <?php if(true) {
                $file = get_field('read_more_document');
        				$url = $file['url'];
        				$filetype = pathinfo($url, PATHINFO_EXTENSION);
        				$type = strtoupper(pathinfo($url, PATHINFO_EXTENSION));
                ?>
                <div class="read-more-document">
                  <a href="<?php echo $url ?>" >
                    <span class="read-more">Read More </span>
                    <span class="file-icon"><?php echo $type ?></span>
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>
      <?php		endwhile; // End of the loop.   ?>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
