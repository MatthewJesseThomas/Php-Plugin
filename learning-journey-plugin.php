<?php
/**
 * Plugin Name: MyButton
 * Description: Mpumalanga Button with added styling
 * Version:1.0.0
 * Author: Matthew Jesses Thomas
 */
function my_animated_button() {
    ob_start(); // start output buffering
    ?>
    <style>
        .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 24px;
            border-radius: 8px;
            display: inline-block;
            transition: background-color 0.31s ease-in-out;
        }

        .btn:hover { /* fix class name */
            background-color: #3e8e41;
        }
    </style>

    <a href="#" class="btn">Button</a>
    <?php
    return ob_get_clean(); // return the buffered output
}
add_shortcode( 'animated_button', 'my_animated_button' ); // fix function name in add_shortcode()


