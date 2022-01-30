<?php

function twenty_twenty_one_child_scripts() {
    wp_enqueue_style(
        'twenty-twenty-one-child-style',
        get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_scripts' );
