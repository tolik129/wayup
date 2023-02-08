<?php 

$args = array(
'photo' => '',
'name' => '',
'status' => '',
'desc' => '',
'vklink' => '',
'fblink' => '',
'twlink' => '',
'instlink' => '',
);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts);
?>	


	<!-- One slide -->
					<div class="team__slide">
						<div class="team__item">
							<div class="team__img">
								<img src="<?php echo wp_get_attachment_url($photo); ?>" alt="<?php echo $name; ?>">
								<p class="team__pers"><?php echo $name; ?></p>
								<p class="team__position"><?php echo $status; ?></p>
							</div>
							<div class="description">
								<p><?php echo $desc; ?></p>
								<ul class="social">
									<li class="social__item">
										<span>Vk</span>
										<a class="social__icon social__icon_vk" href="<?php echo $vklink; ?>">
											<svg  width="21" height="18">
												<use xlink:href="#vk"/>
											</svg>
										</a>
									</li>
									<li class="social__item">
										<span>Fb</span>
										<a class="social__icon social__icon_fb" href="<?php echo $fblink; ?>">
											<svg  width="14" height="17">
												<use xlink:href="#facebook"/>
											</svg>
										</a>
									</li>
									<li class="social__item">
										<span>Tw</span>
										<a class="social__icon social__icon_tw" href="<?php echo $twlink; ?>">
											<svg  width="18" height="15">
												<use xlink:href="#twitter"/>
											</svg>
										</a>
									</li>
									<li class="social__item">
										<a class="social__icon social__icon_inst" href="<?php echo $instlink; ?>">
											<svg width="16" height="16">
												<use xlink:href="#instagram"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- End one slide -->
				
				