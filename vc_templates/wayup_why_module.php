<?php 

$args = array(
'title1' => '',
'title2' => '',
'content' => '',
'link' => '',

);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts); 
?>


<!-- Choice -->
		<section class="choice">
			<div class="wrapper">
				<div class="choice__wrap">
					<h2 class="choice__title secondary-title"><span><?php echo $title1; ?></span><br><?php echo $title2; ?></h2>
					<div class="choice__descr">
						<?php echo $content; ?>
					</div>
					<a href="<?php echo $link; ?>" class="choice__btn noise">
						Читать больше о компании
						<svg width="18" height="20">
							<use xlink:href="#nav-right"/>
						</svg>
					</a>
				</div>
			</div>
		</section><!-- End choice -->