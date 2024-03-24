<?php
/*-------------------------------------------------------------------------------*/

function emporio_theme_support()
{
    // Adds Dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_theme_setup', 'emporio_theme_support');

// function to get template directory path to apply to images
// blog_info('template_directory')

/*-------------------------------------------------------------------------------*/

function emporio_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("emporio-main", get_template_directory_uri() .
        './style.css', array(), $version, 'all');
    wp_enqueue_style("emporio-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), $version, 'all');
    wp_enqueue_style("emporio-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'emporio_register_styles');

/*-------------------------------------------------------------------------------*/

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
        "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js",
        array(),
        '2.11.8',
        true
    );
    wp_enqueue_script(
        "emporio-bootstrap",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
        array(),
        '5.3.3',
        true
    );
    wp_enqueue_script("emporio-main", get_template_directory_uri() .
        "assets/js/main.js", array(), '3.4.1', true);
}

add_action('wp_enqueue_scripts', 'emporio_register_scripts');
/*-------------------------------------------------------------------------------*/
//TODO: Add to a function and call on some action later
register_nav_menus(
    array('primary-menu' => 'Header Menu'),
    array('secondary-menu' => 'Left Menu')
);




/*-------------------------------------------------------------------------------*/
