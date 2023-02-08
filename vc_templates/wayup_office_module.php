<?php 

$args = array(
'title1' => '',
'title2' => '',
'office1' => '',
'office1photo' => '',
'office2' => '',
'office2photo' => '',
'office3' => '',
'office3photo' => '',
'office4' => '',
'office4photo' => '',
'office5' => '',
'office5photo' => '',
'office6' => '',
'office6photo' => '',
'office7' => '',
'office7photo' => '',
);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts);
?>

<!-- Offices -->
		<section class="offices">
			<div class="wrapper">
				<h2 class="offices__title secondary-title"><span><?php echo $title1; ?></span><br><?php echo $title2; ?></h2>
				<div class="map">
					<div class="address address_01">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office1photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Главный офис</span>
								<?php echo $office1; ?>
							</p>
						</div>
					</div>
					<div class="address address_02">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office2photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Офис в Калининграде</span>
								<?php echo $office2; ?>
							</p>
						</div>
					</div>
					<div class="address address_03">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office3photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Офис в Казани</span>
								<?php echo $office3; ?>
							</p>
						</div>
					</div>
					<div class="address address_04">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office4photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Офис в Тюмени</span>
								<?php echo $office4; ?>
							</p>
						</div>
					</div>
					<div class="address address_05">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office5photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Офис в Благовещенске</span>
								<?php echo $office5; ?>
							</p>
						</div>
					</div>
					<div class="address address_06">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office6photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Офис в Норильске</span>
								<?php echo $office6; ?>
							</p>
						</div>
					</div>
					<div class="address address_07">
						<div class="address__descr">
							<div class="address__img blue-noise">
								<img src="<?php echo wp_get_attachment_url($office7photo); ?>" alt="Изображение">
							</div>
							<p class="address__text">
								<span>Офис во Владивостоке</span>
								<?php echo $office7; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End offices -->