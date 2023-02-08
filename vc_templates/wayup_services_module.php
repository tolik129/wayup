<?php 
$args = array(
);
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts); 
global $wayup_options;
?>

<!-- Services -->
		<section class="services">
			<div class="wrapper">
				<div class="services__wrap">
					<h2 class="services__title secondary-title"><span><?php echo $wayup_options['servicearchivetitle11']; ?></span><br><?php echo $wayup_options['servicearchivetitle12']; ?></h2>
					<a href="<?php echo get_post_type_archive_link('service');?>" class="services__btn btn">Все услуги</a>
				</div>
				<ul class="services__list">
				   <?php
                            $services = new WP_Query(array(
                               'post_type' => 'service',
                               'postst_per_page' => 3,
                              
                            ));

                              if ( $services->have_posts() ) :
	         			       while ( $services->have_posts() ) : $services->the_post(); 

	         			       	$service_icon_bg_style = '';
	         			       	$service_icon_item_style = '';
	         			       	if(get_metadata('post',get_the_ID(),'wayup_service_icon',true)){
	         			       		$service_icon_bg_style = 'services__bg_'.get_metadata('post',get_the_ID(),'wayup_service_icon',true);
                                    $service_icon_item_style = 'services__item_'.get_metadata('post',get_the_ID(),'wayup_service_icon',true);
	         			       	} else {
	         			       		$service_icon_bg_style = 'services__item_stat';
	         			       	    $service_icon_item_style = 'services__bg_stat';
	         			       	}
	         			       	?>
	         			       	<li class="services__item <?php echo $service_icon_item_style; ?>">
									<h3 class="services__heading"><?php the_title(); ?></h3>
									<p class="services__descr"><?php the_excerpt(); ?></p>
									<p class="services__price"><?php echo $wayup_options['servicecurrency']; echo get_metadata('post',get_the_ID(),'wayup_service_cost',true); ?></p>
									<a href="" class="services__order btn">Подробнее</a>
									<div class="services__bg <?php echo $service_icon_bg_style; ?>"></div>
								</li>
								 <?php endwhile;
				         wp_reset_postdata();
				      
				         endif; ?>
					
				</ul>
			</div>
		</section><!-- End services -->