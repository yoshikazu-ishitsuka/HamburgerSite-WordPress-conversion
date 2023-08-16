<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
    <article class="p-visual__archive">
        <section class="p-visual__archive--main__news u-background--overlay--archive">
            <h2 class="c-title--main c-font-color--white c-font-family--robot c-font-weight--bold">
                News:
                <span class="c-title--under-text">
                    <ul>
                        <?php
                            $count_custom_posts = wp_count_posts( 'news' );
                            $custom_posts = $count_custom_posts -> publish;
                            echo '全ての記事' . '&nbsp;（' . $custom_posts . '件）';
                        ?>
                    </ul>
                </span>
            </h2>
        </section>

        <!-- archive-newsです -->
                        
        <section class="p-visual__archive--sentence">
            <h2 class="c-title--archive">
                お知らせ記事の一覧です
            </h2>
            <p class="c-text--archive c-font-family--mplus1">
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
                テキストが入ります。
            </p>
        </section>

        <?php get_template_part("components/card_news"); ?>

        <?php wp_pagenavi(); ?>

    </article>
</main>
<?php get_footer(); ?>
