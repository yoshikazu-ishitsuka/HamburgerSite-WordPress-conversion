<?php
    // テーマサポート
    add_theme_support('title-tag');

    // タイトル出力
    function hamburgersite_title($title){
        if(is_front_page() && is_home()){
            $title = get_bloginfo('name', 'display');
        } elseif (is_singular()){
            $title = single_post_title('', false);
        }
            return $title;
    }
    add_filter('pre_get_document_title', 'hamburgersite_title');

    function hamburgersite_script(){
        wp_enqueue_style('M+PLUS+1p','https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap');
        wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4');
        wp_enqueue_style('style', get_template_directory_uri().'/style.css', array());

    }
    add_action('wp_enqueue_scripts', 'add_files');

    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
        ));
    }
