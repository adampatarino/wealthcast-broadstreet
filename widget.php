<?php 
add_action( 'widgets_init', 'wc_widgets' );
function wc_widgets() {
    register_widget( 'Wealthcast_Widget' );
}

class Wealthcast_Widget extends WP_Widget {
    function __construct() {
        $widget_ops = array( 'classname' => 'wc_zone widget', 'description' => __('Wealthcast Ad Zone', 'wc_zone') );
        parent::__construct( 'wc_zone-widget', __('Wealthcast Zone', 'custom'), $widget_ops);
    }

    function widget( $args, $instance ) {
        extract( $args );
        //Our variables from the widget settings.
        $zoneid = $instance['zoneid'];

        if($zoneid) {
            echo $before_widget;
                echo '<div class="wealthcast-widget clearfix">';
                    echo '<broadstreet-zone zone-id="'. $zoneid .'"></broadstreet-zone>';
                echo '</div>';
            echo $after_widget;
        }  
    }

    //Update the widget
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $instance['zoneid'] = strip_tags( $new_instance['zoneid'] );

        return $instance;
    }

    function form( $instance ) {
        $defaults = array( 'zoneid' => __("", 'example'));
        $instance = wp_parse_args( (array) $instance, $defaults );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'zoneid' ); ?>"><?php _e('BroadStreet Zone Id:', 'example'); ?></label>
            <input id="<?php echo $this->get_field_id( 'zoneid' ); ?>" name="<?php echo $this->get_field_name( 'zoneid' ); ?>" value="<?php echo $instance['zoneid']; ?>" style="width:100%;" />
        </p>
        <?php
    }
} // End Widget
