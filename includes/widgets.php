<?php

if (!defined('ABSPATH')) die();

class Gymxtreme_Lessons_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'gymxtreme_widget',
            esc_html__('Gymxtreme Lessons', 'gymxtreme'),
            array('description' => esc_html__('Add Lessons as Widget', 'gymxtreme'),)
        );
    }

    public function widget($args, $instance)
    {
    }

    public function form($instance)
    {
    }

    public function update($new_instance, $old_instance)
    {
    }
}

function gymxtreme_register_widget()
{
    register_widget('Gymxtreme_Lessons_Widget');
}

add_action('widgets_init', 'gymxtreme_register_widget');
