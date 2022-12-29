<?php
// テーマサポート
add_theme_support('title-tag');

// タイトル出力
function hamburgersite_title($title)
{
    if (is_front_page() && is_home()) {
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) {
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'hamburgersite_title');

function readScript()
{
    wp_enqueue_style('mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap');
    wp_enqueue_style('roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4');
    wp_enqueue_style('style', get_theme_file_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_script('jquery', get_theme_file_uri('./js/jquery-3.6.1.min.js'), '', '', true);
    wp_enqueue_script('script', get_theme_file_uri('./js/script.js'), 'jquery', 'jquery', '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'readScript');

function custom_theme_support()
{
    add_theme_support('html5', array(
        'search-form',
    ));
}
