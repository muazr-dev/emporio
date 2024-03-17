<?php

function emporio_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("emporio-main", get_template_directory_uri() .
        './style.css', array(), $version, 'all');
    wp_enqueue_style("emporio-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), $version, 'all');
    wp_enqueue_style("emporio-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'emporio_register_styles');

function emporio_register_scripts()
{

    wp_enqueue_script(
        "emporio-jquery",
        "https://code.jquery.com/jquery-3.4.1.slim.min.js",
        array(),
        '3.4.1',
        true
    );
    wp_enqueue_script(
        "emporio-popper",
        "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
        array(),
        '1.16.0',
        true
    );
    wp_enqueue_script(
        "emporio-bootstrap",
        "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
        array(),
        '3.4.1',
        true
    );
    wp_enqueue_script("emporio-main", get_template_directory_uri() .
        "assets/js/main.js", array(), '3.4.1', true);
}

add_action('wp_enqueue_scripts', 'emporio_register_scripts');
