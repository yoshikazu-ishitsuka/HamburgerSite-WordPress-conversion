<?php

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
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.6.1.min.js'), '', '', true);
    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'readScript');

function custom_theme_support()
{
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // テーマサポート
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(960, 640); //デフォルトサイズの設定
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    // add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav' => esc_html('footer navigation', 'HamburgerSite'),
        'category_nav' => esc_html('category navigation', 'HamburgerSite'),
    ));
}
add_action('after_setup_theme', 'custom_theme_support');

add_theme_support('editor-styles');
function org_theme_add_editor_styles()
{
    $editor_style_url = get_theme_file_uri('editor-style.css');
    wp_enqueue_style('block-editor-style', $editor_style_url);
}
add_action('enqueue_block_editor_assets', 'org_theme_add_editor_styles');

// カスタム投稿設定
add_action('init', 'create_post_type');
function create_post_type()
{
    //投稿時に使用できる投稿用のパーツを指定
    $supports = array(
        'title', //タイトルフォーム
        'editor', //エディター(内容の編集)
        'thumbnail', //アイキャッチ画像
        'author', //投稿者
        'excerpt', //抜粋
        'revisions', //リビジョンを保存
    );
    register_post_type(
        'news', // 投稿タイプ名
        [
        'labels' => [
            'name' => 'お知らせ', // 管理画面上で表示する投稿タイプ名
            'add_new' => '新規追加', // 新規追加のラベル
            // 'add_new_item' => 'サンプル投稿新規登録', // 編集画面ラベル(新規登録時)
            // 'edit_item' => 'サンプル投稿編集', //編集画面ラベル(既存投稿編集時)
            // 'menu_name' => 'サンプル投稿', //管理画面メニュー(親ラベル)
            'all_items' => 'お知らせ一覧', //管理画面メニュー(一覧ラベル)
            // 'search_items' => 'サンプル投稿を検索' , //検索フォームボタンラベル
            // 'singular_name' => 'サンプル投稿識別名',    // カスタム投稿の識別名
        ],
        'public'        => true,  // カスタム投稿タイプの表示(trueにする)
        'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
        'menu_position' => 5,     // 管理画面上での表示位置
        'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
        'supports' => $supports
        ]
    );

    register_taxonomy(
        'news-cat',
        'news',
        array(
            'label' => 'ニュースカテゴリー',
            'hierarchical' => true, // “true”だと「カテゴリー」のように。”false”だと「タグ」のような振る舞いになります
            'public' => true,
            'show_in_rest' => true,
        )
    );

    register_taxonomy(
        'news-tag',
        'news',
        array(
            'label' => 'ニュースタグ',
            'hierarchical' => false,
            'public' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count', // カスタムタクソノミーをタグのように使いたい場合は、オプションの'update_count_callback' => '_update_post_term_count'を必ず追加します
        )
    );

}
