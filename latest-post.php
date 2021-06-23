<?php 

/**
 * @package WordPress
 * @subpackage Comett Theme
 * @since Comett 1.0
 *
 * This is a widget will be shown latest post by using this widget
 * @param latest_post $class $extend the $WP_Widget Class :)
 */

class latest_post extends WP_Widget {

	/*
	* Set the $__construct function and call it's parent::__construct()
	* to set the widget's $class name, $widget title,
	* $widget description with an arry()
	*/

    public function __construct(){
        
    	parent::__construct(
    		'latest_post',
    		'Comett Latest Posts',
    		array(
    			'description'	=>	'Set this widget to show the latest post on your widget area',
    		)
    	);

    }



    /*
	* Call the $widget function and set 2 argument in the function.
	* The first argiment is for calling all the widget tags and elemtns.
	* Second argument is for setting us input's value
	*/

    public function widget($elements, $options) {

    	printf( "%s %s %s %s %s", $elements['before_widget'], $elements['before_title'], $options['title'], $elements['after_title'], $elements['after_widget'] );

    }



    /*
	* The $form function is set for showing all the options on the Dashboard widget area.
	* All Inputs, text editors, etc will be here.
	* $this->get_field_id() to get the field id
	* $this->get_field_name() to get a field name
	* $valuse['title'] to get the value
    */

	public function form($values) { ?>

		<p>
			<label for="<?php echo $this->get_field_id('title');?>">Title:</label>
			<input id="<?php echo $this->get_field_id('title'); ?>" class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $values['title']; ?>" />
		</p>

	<?php }

}

add_action( 'widgets_init', function(){

	register_widget( 'latest_post' );
});