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
        $quantity = !empty($instance['quantity']) ? $instance['quantity'] :
            esc_html('How many lessons do you want to show?');
        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('quantity')); ?>">
                <?php esc_attr_e('How many lessons do you want to show?'); ?>
            </label>
            <input class="widefat"
                id="<?php echo esc_attr($this->get_field_id('quantity')); ?>"
                name="<?php echo esc_attr($this->get_field_name('quantity')); ?>"
                type="number"
                value="<?php echo esc_attr($quantity); ?>"
            />
        </p>
        <?php

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
