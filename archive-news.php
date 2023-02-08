<?php  get_header(); ?>
	<!-- Service -->
		<section class="inner events">
			<div class="wrapper">
				<div class="news">
					<h2 class="news__title secondary-title"><span><?php echo $wayup_options['newstitle1'];?></span><br><?php echo $wayup_options['newstitle2'];?></h2>


            <?php
	         $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	         $news = new WP_Query( array(
		         'post_type' => 'news',
		         'paged' => $paged
	         ));
	         
	         
	         if ( $news->have_posts() ) :
	         			while ( $news->have_posts() ) : $news->the_post(); ?>
					<!-- One new -->
					<article class="news__item">
						<div class="news__wrap">
							<div class="news__img blue-noise">
								 <?php echo get_the_post_thumbnail(get_the_ID(), 'news-thumb'); ?>
								<ul class="tags-list">
									<?php $news_categories = wp_get_post_terms(get_the_ID(), 'news-category', ); 
			                          foreach($news_categories as $category) { ?>
			                          <li><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></li>
			                          <?php } ?>
								</ul>
							</div>
							<div class="news__side">
								<div class="add-time">
									<svg width="13" height="13">
										<use xlink:href="#time"/>
									</svg>
									<p class="add-time__date"><?php echo get_the_date(); ?></p>
								</div>
								<div class="rate"></div>
								<div class="share">
									<p class="share__title">
										<svg width="15" height="15">
											<use xlink:href="#link"/>
										</svg>
										Поделиться:
									</p>
									<ul class="social">
										<li class="social__item">
											<span>Vk</span>
											<a data-social="vkontakte" onclick="window.open(this.href, 'Share on VK', 'width=600,height=300'); return false" class="social__icon social__icon_vk" href="<?php echo wayup_get_share('vk', get_the_permalink(), get_the_title());?>">
												<svg  width="21" height="18">
													<use xlink:href="#vk"/>
												</svg>
											</a>
										</li>
										<li class="social__item">
											<span>Fb</span>
											<a data-social="facebook" onclick="window.open(this.href, 'Share on Facebook', 'width=600,height=300'); return false" class="social__icon social__icon_fb" href="<?php echo wayup_get_share('fb', get_the_permalink(), get_the_title());?>">
												<svg  width="14" height="17">
													<use xlink:href="#facebook"/>
												</svg>
											</a>
										</li>
										<li class="social__item">
											<span>Tw</span>
											<a data-social="twitter" onclick="window.open(this.href, 'Share on Tw', 'width=600,height=300'); return false" class="social__icon social__icon_tw" href="<?php echo wayup_get_share('twi', get_the_permalink(), get_the_title() );?>">
												<svg  width="18" height="15">
													<use xlink:href="#twitter"/>
												</svg>
											</a>
										</li>
									</ul>
								</div>
								<a href="<?php the_permalink(); ?>" class="news__link link-more">
									Читать больше
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
								</a>
							</div>
						</div>
						<h5 class="news__heading"><?php the_title(); ?></h5>
						<p class="news__text"><?php the_excerpt(); ?></p>
					</article><!-- End one new -->

           <?php endwhile;
	         wp_reset_postdata();
	         else :
	         echo "Нет постов";
	         endif; ?>


				

					<!-- Pagination -->
					  <?php if($news->max_num_pages > 1){ ?>
					      <nav class="pagination">
					         <div class="nav-links">
					            <?php 
					               // Выводим левую стрелку для первой страницы
					                                       if( get_query_var('paged') == 0){ ?>
					            <span class="prev page-numbers"></span>
					            <?php } ?>
					            <?php
					               //Вывод стандартной пагинации
					               
					                $big = 999999999; // need an unlikely integer
					               echo paginate_links( array(
					               	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					               	'format' => '?paged=%#%',
					               	'current' => max( 1, get_query_var('paged') ),
					               	'prev_text' => '',
					               	'next_text' => '',
					               	'total' => $news->max_num_pages
					               ) ); ?>
					            <?php 
					               // Выводим правую стрелку для последней страницы
					                                       if( get_query_var('paged') == $news->max_num_pages){ ?>
					            <span class="next page-numbers"></span>
					            <?php } ?>
					         </div>
					      </nav>
					      <?php } ?>

				</div>

				<?php get_sidebar(); ?>
			</div>
		</section>
<?php get_footer(); ?>