<?php get_header(); ?>

		<!-- Services -->
		<section class="inner services tabs">
			<div class="wrapper">
				<h2 class="services__title secondary-title"><span><?php echo $wayup_options['servicearchivetitle11']; ?></span><br><?php echo $wayup_options['servicearchivetitle12']; ?></h2>
				<div class="tabs__wrap">

					<p class="tabs__descr">
						<?php echo $wayup_options['servicearchivedesc']; ?></p>
					<!-- Cases titles -->
					<ul class="tabs__caption">
						<?php $services_types = get_terms( array(
                          'taxonomy' => 'service-type',
                          'hide_empty' => false,
						)); 
						$i = 0;
						
                          foreach($services_types as $type) {
                          	if($i == 0){ $active = 'active'; } else {
                          		$active = '';
                          	}
                          	   echo '<li class="'.$active.'">'.$type->name.'</li>';
                          	
                          	$i++;   
                          }
						?>
						
					</ul>

				</div>

				<?php
				$j = 0; 
				$current = '';
				foreach($services_types as $category){
					if($j == 0){
						$current = 'active';
				    } else {
						$current = '';
					}
				?>
					<div class="tabs__content <?php echo esc_attr($current); ?>">
					   <ul class="services__list">
                           <?php
                            $services = new WP_Query(array(
                               'post_type' => 'service',
                               'postst_per_page' => -1,
                               'tax_query' => array(
                                  array(
                                     'taxonomy' => 'service-type',
                                     'field' => 'slug',
                                     'terms' => $category->slug,
                                  ),
                               ),
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
									<a href="<?php the_permalink(); ?>" class="services__order btn">Подробнее</a>
									<div class="services__bg <?php echo $service_icon_bg_style; ?>"></div>
								</li>
								 <?php endwhile;
				         wp_reset_postdata();
				      
				         endif; ?>
					   </ul>
				    </div><!-- End cases content one-->

				     
				<?php 
                  $j++;
			    } ?>

				<!-- Cases content one-->
			
			</div>

		</section><!-- End services -->
 <?php get_footer();