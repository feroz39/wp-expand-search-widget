<?php

class Expend_Search extends WP_Widget
{
	function __construct() {
		$widget_options = array(
		'classname'		=>		'e_search',
		'description' 	=>		'Expend Search Box To Click On The Icon'
		);
		
		parent::__construct('e_search', 'Expend Search', $widget_options);
	}
	
	function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/default-widgets.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

		echo $args['before_widget'];
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		// Use current theme search form if it exists
		/*get_search_form();*/
		echo '<div id="sb-search" class="sb-search">
				<form role="search" method="get" id="e_searchform" action="'.home_url( '/' ).'">
					<input class="sb-search-input" placeholder="Search Here" type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>';

		echo $args['after_widget'];
		?>
		<?php
	}
	
	function form( $instance ) {
		?>
		<?php
		$instance = wp_parse_args( (array) $instance, array( 'title' => '') );
		$title = $instance['title'];
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">
		<?php _e('Title:'); ?>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</label>
		</p>
		<?php 
	}
	
}

	add_action( 'widgets_init', 'register_my_widget' );
	function register_my_widget() {
		register_widget( 'Expend_Search' );
	}
?>