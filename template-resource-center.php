<?php
/* Template Name: Resource Center*/
$background_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
get_header(); ?>

<div class="logix-page">

		<div class="hero-section solutions-archive-hero" style="background-image:url(<?php echo $background_image; ?>);">
			<div class="hero-container">
				<div class="hero-title">
					<h2>Downloads</h2>
				</div>
				<div class="hero-empty">
				</div>
			</div>
		</div>
		<div class="below-hero blue-gradient">
			<div class="general-page">
				<div class="resource-center-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
				<div class="resources-here">
					<div class="resources-select-wrapper">
						<h4>Filter By Category:</h4>
						<div id="dd" class="resource-select">
							<span class="rc-select-label">- All Categories -</span>
							<ul class="resource-dropdown">
								<li id="" class="resource-category">- All Categories -</li>
								<?php
									$post_type = 'resources';

									// Get all the taxonomies for this post type
									$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );

									foreach( $taxonomies as $taxonomy ) :

										// Gets every "category" (term) in this taxonomy to get the respective posts
										$terms = get_terms( $taxonomy );

											 foreach( $terms as $term ) :
												 $slug = get_term_link($term->slug, $taxonomy);
												 $name = $term->name;

												if ($name !== 'Uncategorized') {

											 ?>

										<li id="<?php echo $slug; ?>" class="resource-category"><?php echo $name ?></li>

												<?php	 }


								endforeach;

								endforeach;

										?>

							</ul>
						</div>
					</div>
					<div class="resources-search-wrapper">
						<h4>Search by Keyword:</h4>
						<div class="resource-search">
							<?php $url = home_url(); ?>
							 <form id="rc-search-form">
								  <div class="logix-speech">
									<button type="button"><i class="ion-search"></i></button>
									<input id="s" value="" name="s"  />
									<i id="wp-voice-search" class="ion-mic-a"></i>
								  </div>
							</form>
							<script>
								  document.querySelector("i#wp-voice-search").addEventListener("click", function() {

									if (window.hasOwnProperty('webkitSpeechRecognition')) {

									  var recognition = new webkitSpeechRecognition();

									  recognition.continuous = false;
									  recognition.interimResults = false;

									  recognition.lang = "en-US";
									  recognition.start();

									  recognition.onresult = function(e) {
										document.getElementById('s').value
																 = e.results[0][0].transcript;
										recognition.stop();
										document.querySelector('.logix-speech button').click();
									  };

									  recognition.onerror = function(e) {
										recognition.stop();
									  }

									}
								  });
							</script>
						</div>
					</div>
				</div>
				<div class="has-red-divider-uptop">
					<div class="title">
						Our Downloads
					</div>
				</div>
				<div class="resource-center-list">
				<?php $args = array(
						post_type => 'resources',
						post_status => 'publish',
						category_name => '',
						posts_per_page => 64,
						orderby => 'title',
						order => 'ASC'
					);
					$resources_query = new  WP_Query( $args );
					while ( $resources_query->have_posts() ) : $resources_query->the_post();
						$file = get_field('resource_file');
						$title = get_the_title();
						$url = $file['url'];
						$filetype = pathinfo($url, PATHINFO_EXTENSION);
						$type = strtoupper(pathinfo($url, PATHINFO_EXTENSION));
						switch ($filetype) {
		                  case "pdf":
		                      $fileclass = 'file-pdf';
							  $icon_color = '#c13149';
		                      break;
		                  case "jpg":
		                  case "jpeg":
		                  case "png":
		                  case "svg":
		                      $fileclass = 'file-image';
							  $icon_color = '#4386fc';
		                      break;
		                  case "pptx":
		                  case "pptm":
		                  case "ppt":
		                      $fileclass = 'file-powerpoint';
							  $icon_color = '#f4b400';
		                      break;
		                  case "xlsx":
		                  case "xlsm":
		                  case "xls":
		                      $fileclass = 'file-excel';
							  $icon_color = 'green';
		                      break;
		                  case "doc":
		                  case "docm":
		                  case "docx":
		                  case "odt":
		                  case "rtf":
		                  case "txt":
		                      $fileclass = 'document-text';
		                      break;
		                  default:
		                      $fileclass = 'document-text';
		                      break;
						}

						$icon =  $file['icon'];
				?>
						<div class="resource">
							<a href="<?php echo esc_url( $url ) ?>" target="_blank">
								<i style="color:<?php echo $icon_color ?>; " class="mdi mdi-<?php echo $fileclass ?>"></i>
								<h5><?php echo $title; ?></h5>
								 <?php the_content(); ?>
							</a>
						</div>
				<?php
					endwhile;
					wp_reset_query();
				?>
				</div>
			</div>
		</div>


</div>


<?php

get_footer();
