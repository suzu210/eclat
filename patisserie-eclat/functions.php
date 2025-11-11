<?php
// CSSの読み込み
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // Google Fonts
    wp_enqueue_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome_style',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
        array(),
        null
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0'
    );
}

// JSの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
    // デフォルトjQuery削除
    wp_deregister_script('jquery');

    // jQuery 読み込み
    wp_enqueue_script(
        'jquery_script',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        array(),
        null,
        true
    );

    // メインJS
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script'),
        '1.0',
        true
    );
}
?>
