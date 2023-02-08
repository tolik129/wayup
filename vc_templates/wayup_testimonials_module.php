<?php 

$args = array(
'title1' => '',
'title2' => '',



);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts); 
?>

<!-- Clients -->
		<section class="clients">
			<div class="wrapper">
				<h2 class="clients__title secondary-title"><span><?php echo $title1; ?></span><br><?php echo $title2; ?></h2>
				<div class="сlients__slider">

						  <?php
                            $testimonials = new WP_Query(array(
                               'post_type' => 'testimonial',
                               'postst_per_page' => -1,
                            ));

                              if ( $testimonials->have_posts() ) :
	         			       while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
					<div class="clients__slide">
						<div class="clients__box">
							<div class="clients__photo">
								<div class="clients__img">
									<?php echo get_the_post_thumbnail(get_the_ID(),'testimonial-vertical'); ?>
								</div>
								<a href="<?php get_metadata('post',get_the_ID(),'wayup_social_link',true); ?>" class="clients__link">
									<svg  width="14" height="17">
										<use xlink:href="#facebook"/>
									</svg>
								</a>
							</div>
							<div class="clients__say">
								<p class="clients__name"><?php the_title();?></p>
								<div class="clients__text">
									<?php the_content();?>
								</div>
							</div>
							<div class="add-time">
								<svg width="13" height="13">
									<use xlink:href="#time"/>
								</svg>
								<p class="add-time__date"><?php echo get_metadata('post',get_the_ID(),'wayup_testy_date',true); ?></p>
							</div>
						</div>
					</div>
				  <?php endwhile;
				         wp_reset_postdata();
				      
				         endif; ?>
				</div>
			</div>
		</section><!-- End clients -->