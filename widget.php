<?php 
add_action( 'widgets_init', 'wc_widgets' );
function wc_widgets() {
    register_widget( 'Wealthcast_BS_Widget' );
    register_widget( 'Wealthcast_DFP_Widget' );
}

class Wealthcast_BS_Widget extends WP_Widget {
    function __construct() {
        $widget_ops = array( 'classname' => 'wc_zone widget', 'description' => __('Wealthcast BroadStreet Ad Zone', 'wc_zone') );
        parent::__construct( 'wc_zone-widget', __('Wealthcast BroadStreet Zone', 'custom'), $widget_ops);
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

class Wealthcast_DFP_Widget extends WP_Widget {
    function __construct() {
        $widget_ops = array( 'classname' => 'wc_zone widget', 'description' => __('Wealthcast DFP Ad Zone', 'wc_zone') );
        parent::__construct( 'wc_dfp_zone-widget', __('Wealthcast DFP Zone', 'custom'), $widget_ops);
    }

    function widget( $args, $instance ) {
        extract( $args );
        //Our variables from the widget settings.
        $zone = $instance['zone'];

        if($zone) {
            echo $before_widget;
                echo wc_zone($zone);
            echo $after_widget;
        }  
    }

    //Update the widget
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $instance['zone'] = strip_tags( $new_instance['zone'] );

        return $instance;
    }

    function form( $instance ) {
        $defaults = array( 'zone' => __("", 'example'));
        $instance = wp_parse_args( (array) $instance, $defaults );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'zone' ); ?>"><?php _e('Unit Location', 'example'); ?></label>
            <select id="<?php echo $this->get_field_id( 'zone' ); ?>" name="<?php echo $this->get_field_name( 'zone' ); ?>" style="width:100%;">
                <option value="sidebar_1" <?php if($instance['zone'] === 'sidebar_1') echo 'selected'; ?>>Sidebar 1</option>
                <option value="sidebar_2" <?php if($instance['zone'] === 'sidebar_2') echo 'selected'; ?>>Sidebar 2</option>
                <option value="sidebar_3" <?php if($instance['zone'] === 'sidebar_3') echo 'selected'; ?>>Sidebar 3</option>
            </select>
        </p>
        <?php
    }
} // End Widget