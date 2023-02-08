<?php
/**
 * Blog Widget 
 */
class Wayup_Subscribe_Widget extends WP_Widget 
{
	
	
	/**
	 * General Setup 
	 */
	public function __construct() {
	
		/* Widget settings. */
		$widget_ops = array(
			'classname' => 'wayup_subscribe_widget', 
			'description' => 'Виджет вывода блок подписки'
		);

		/* Widget control settings. */
		$control_ops = array(
			'width'		=> 500, 
			'height'	=> 450, 
			'id_base'	=> 'wayup_subscribe_widget' 
		);

		/* Create the widget. */
		parent::__construct( 'wayup_subscribe_widget', 'Wayup | Подписка', $widget_ops, $control_ops );
	}

	/**
	 * Display Widget
	 * @param array $args
	 * @param array $instance 
	 */
	public function widget( $args, $instance ) 
	{
		extract( $args );
		
		$title =  $instance['title'] ;
		$shortcode =  $instance['shortcode'] ;
		
		// Display Widget
		?> 
			<div class="subscr">
						<div class="subscr__title">
							<svg  width="19" height="19">
								<use xlink:href="#mail"/>
							</svg>
							<?php echo $title; ?>
						</div>
					<?php echo do_shortcode($shortcode); ?>
					</div>
		<?php
	}

	/**
	 * Update Widget
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array 
	 */
	public function update( $new_instance, $old_instance ) 
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['shortcode'] = strip_tags( $new_instance['shortcode'] );
		
		

		return $instance;
	}
	
	/**
	 * Widget Settings
	 * @param array $instance 
	 */
	public function form( $instance ) 
	{
		//default widget settings.
		$defaults = array(
			'title'		=> 'Подписаться на рассылку',
			'shortcode'	=> '',
			
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок </label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'shortcode' ); ?>">Шорткод</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" value="<?php echo $instance['shortcode']; ?>" />
		</p>
		
		
		
	<?php
	}
}