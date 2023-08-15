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
                        if ($terms = get_the_terms($post->ID, 'news-cat')) {
                            foreach ( $terms as $term ) {
                            // echo ('<li>');
                            // echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                            // echo esc_html($term->name);
                            // echo ('</li>');
                            }
                        }
                        $count_custom_posts = wp_count_posts( 'news' );
                        $custom_posts = $count_custom_posts -> publish;
                        // echo 'お知らせカテゴリ名' . '&nbsp;（' . $custom_posts . '件）';
                    ?>
                    </ul>



                    <?php single_cat_title('', true); ?>

                    <?php
                    $term = get_queried_object();
                    echo '（' . $term->count . '件）';
                    ?>


<?php /*
                    <ul>
                        <?php if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                    </ul>
      */
?>
                        <?php wp_reset_postdata(); ?>

                    
                </span>
            </h2>
        </section>

        taxonomy-news-cat.phpです
                        
        <section class="p-visual__archive--sentence">
            <h2 class="c-title--archive">
                <?php
                    // カテゴリーのタイトルを取得
                    $category_title = single_cat_title('', false);

                    // 付け加えるテキスト
                    $additional_text = 'のお知らせ一覧です';

                    // タイトルとテキストを結合して表示
                    echo $category_title . $additional_text;
                ?>
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
