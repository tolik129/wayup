<?php 

$args = array(
'title1' => '',
'title2' => '',
'desc' => '',


);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts); 
?>

<!-- Cases -->
		<section class="cases tabs">
			<div class="wrapper">
				<h2 class="cases__title secondary-title"><span><?php echo $title1; ?></span><br><?php echo $title2; ?></h2>
				<div class="tabs__wrap">

					<p class="tabs__descr"><?php echo $desc; ?></p>
					<!-- Cases titles -->
					<ul class="tabs__caption">
						<?php $feature_types = get_terms( array(
                          'taxonomy' => 'feature-type',
                          'hide_empty' => false,
						)); 
						$i = 0;
						
                          foreach($feature_types as $type) {
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
				foreach($feature_types as $category){
					if($j == 0){
						$current = 'active';
				    } else {
						$current = '';
					}
				?>
				<!-- Cases content one-->
				<div class="tabs__content <?php echo esc_attr($current); ?>">
					  <?php
                            $features = new WP_Query(array(
                               'post_type' => 'feature',
                               'postst_per_page' => -1,
                               'tax_query' => array(
                                  array(
                                     'taxonomy' => 'feature-type',
                                     'field' => 'slug',
                                     'terms' => $category->slug,
                                  ),
                               ),
                            ));

                              if ( $features->have_posts() ) :
	         			       while ( $features->have_posts() ) : $features->the_post(); ?>

					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading"><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
						</div>
					</div>
				
			       <?php endwhile;
				         wp_reset_postdata();
				      
				         endif; ?>
				
				</div><!-- End cases content one-->
					<?php 
                  $j++;
			    } ?>

				<a href="<?php echo get_post_type_archive_link('feature'); ?>" class="cases__more link-more">
					Показать больше кейсов
					<svg width="18" height="20">
						<use xlink:href="#nav-right"/>
					</svg>
				</a>

			</div>

		</section><!-- End cases -->