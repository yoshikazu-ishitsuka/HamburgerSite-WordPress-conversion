<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>img/favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <article class="wrapper u-background--overlay js-toggle">

        <header class="l-header c-background-color--base">
            <div class="l-header__top">
                <h1 class="l-header__top__logo c-font-color--base c-font-family--robot c-font-weight--bold">
                    <a href="/"><?php bloginfo('name'); ?></a>
                </h1>
                <h2 class="l-header__top__menu c-font-weight--bold c-font-family--robot">
                    <button class="c-button--menu js-button is-click">Menu</button>
                </h2>
            </div>
            <?php get_search_form(); ?>
        </header>
