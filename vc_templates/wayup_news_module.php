<?php 
$args = array(
);
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts); 
global $wayup_options;
?>

	<!-- News -->
		<section class="news">
			<div class="wrapper">
				<h2 class="news__title secondary-title"><span><?php echo $wayup_options['newstitle1'];?></span><br><?php echo $wayup_options['newstitle2'];?></h2>


 
				<div class="news__slider">
					<?php $news = new WP_Query( array(
		         'post_type' => 'news',
		         'posts_per_page' => 5
	         ));
	         
	         
	         if ( $news->have_posts() ) :
	         			while ( $news->have_posts() ) : $news->the_post(); ?>
						<div class="news__slide">
							<div class="news__item">
								<div class="add-time">
									<svg width="13" height="13">
										<use xlink:href="#time"/>
									</svg>
									<p class="add-time__date"><?php echo get_the_date(); ?></p>
								</div>
								<h5 class="news__heading"><?php the_title(); ?></h5>
								<p class="news__text"><?php echo wayup_custom_excerpt(17); ?></p>
								<a href="<?php the_permalink(); ?>" class="news__link link-more">
									Читать больше
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
								</a>
							</div>
							<div class="news__img blue-noise">
								<?php echo get_the_post_thumbnail(get_the_ID(),'news-thumb'); ?>
							</div>
						</div>
<?php endwhile; wp_reset_query(); endif; ?>
					

					</div>

					<a href="<?php echo get_post_type_archive_link('news'); ?>" class="news__btn btn">Все новости</a>
				</div>
		</section><!-- End news -->