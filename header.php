<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>img/favicon.ico">
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/script.js"></script> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> -->
    <!-- <title>Hamburger Site</title> -->
    <?php wp_head(); ?>
</head>

<body>
    <article class="wrapper u-background--overlay js-toggle">

        <header class="l-header c-background-color--base">
            <div class="l-header__top">
                <h1 class="l-header__top__logo c-font-color--base c-font-family--robot c-font-weight--bold">
                    Hamburger
                </h1>
                <h2 class="l-header__top__menu c-font-weight--bold c-font-family--robot">
                    <button class="c-button--menu js-button is-click">Menu</button>
                </h2>
            </div>
            <?php get_search_form(); ?>
        </header>
