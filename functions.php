<?php
function alpha_child_assets()
{
    wp_enqueue_style("parent-style", get_parent_theme_file_uri("/style.css"), array("bootstrap"));
    //wp_enqueue_style("alpha-style", get_parent_theme_file_uri("/style.css"), array("bootstrap"));
}
add_action("wp_enqueue_scripts", "alpha_child_assets");
