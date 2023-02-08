<?php 

$args = array(
'title1' => '',
'title2' => '',
'title3' => '',
'title4' => '',
'value1' => '',
'value2' => '',
'value3' => '',
'value4' => '',
'bg' => '',
);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts);

$bg_url = '';
if (is_numeric($bg)) {
	$bg_url = wp_get_attachment_url($bg);
}

$bg_styles = '';
if($bg_url){
	$bg_styles = 'style="background-image: url('.$bg_url.');"';
}
?>


<!-- Progress bars-->
		<section class="numbers" <?php echo $bg_styles; ?>>
			<div class="wrapper">

				<div class="numbers__item">
					<svg class="radial-progress" data-percentage="<?php echo $value1; ?>" viewBox="0 0 80 80">
						<!-- Gradient -->
						<linearGradient id="linear-gradient">
							<stop offset="0%" stop-color="#00a2ff"/>
							<stop offset="100%" stop-color="#0cf"/>
						</linearGradient>
						<!-- Shadow -->
						<defs>
							<filter id="dropshadow" x="-40%" y="-40%" width="180%" height="180%" filterUnits="userSpaceOnUse">
								<feOffset result="offOut" in="SourceGraphic" dx="0" dy="0" />
								<feColorMatrix result="matrixOut" in="offOut" type="matrix"
									values="0.5 0 0 0 0 0 0.5 0 0 0 0 0 0.5 0 0 0 0 0 1 0" />
								<feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="2" />
								<feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
							</filter>
						 </defs>
						
						<circle class="incomplete" cx="40" cy="40" r="35">></circle>
						<circle class="complete"  cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
						<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
					</svg>
					<span class="numbers__text"><?php echo $title1; ?></span>
				</div>

				<div class="numbers__item">
					<svg class="radial-progress" data-percentage="<?php echo $value2; ?>" viewBox="0 0 80 80">
						<circle class="incomplete" cx="40" cy="40" r="35"></circle>
						<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
						<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
					</svg>
					<span class="numbers__text"><?php echo $title2; ?></span>
				</div>

				<div class="numbers__item">
					<svg class="radial-progress" data-percentage="<?php echo $value3; ?>" viewBox="0 0 80 80">
						<circle class="incomplete" cx="40" cy="40" r="35"></circle>
						<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
						<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
					</svg>
					<span class="numbers__text"><?php echo $title3; ?></span>
				</div>

				<div class="numbers__item">
					<svg class="radial-progress" data-percentage="<?php echo $value4; ?>" viewBox="0 0 80 80">
						<circle class="incomplete" cx="40" cy="40" r="35"></circle>
						<circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
						<text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)"></text>
					</svg>
					<span class="numbers__text"><?php echo $title4; ?></span>
				</div>
			</div>
		</section>
		<!-- End progress -->