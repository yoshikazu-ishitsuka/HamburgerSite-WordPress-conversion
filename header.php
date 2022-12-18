<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Hamburger Site</title>
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
            <div class="p-search--form">
                <form action="#" method="get" class="c-form-search">
                    <label for="#" class="screen-reader-text">検索</label>
                    <input type="search" class="c-form-search__keyword c-img--magnifying-glass" placeholder=" ">
                    <input type="submit" value="検索"
                        class="c-form-search__submit c-font-family--mplus1 c-font-color--base c-font-weight--bold">
                </form>
            </div>
        </header>
