<section class="p-visual__archive--card__news">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="p-card__menu__news">
            <?php if(has_post_thumbnail()): ?>
                <!--投稿にアイキャッチがある場合-->
                <?php the_post_thumbnail( array( 300, 300 ), ['class' => 'p-card__menu--image__news']); ?>
            <?php else: ?>
                <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
                <img class="p-card__menu--image__news" src="<?php echo get_theme_file_uri(); ?>/images/noimage.png" alt="no image">
            <?php endif; ?>
                <figcaption class="p-card__menu--caption__news c-background-color--card__news">
                    <div class="c-img--new-outer">
                        <h2 class="c-title--card__news c-font-family--mplus1">
                            <?php 
                                $title = get_the_title();
                                if ($title) {
                                echo esc_html($title);
                                };
                            ?>
                        </h2>
                        <?php 
                            $days = 14; // 表示する日数
                            $published_time = get_post_time();
                            $today = wp_date('U');
                            $show_threshold = $today - $days * 86400;

                            if ($published_time > $show_threshold) {
                            // 画像のURLを設定
                            $image_url = get_theme_file_uri('images/common/new.png');
                            // 画像を出力
                            echo '<img src="' . esc_url($image_url) . '" alt="New" class="new-image">';
                            }
                        ?>
                    </div>
                    <ul class="p-card__menu__news__cat">
                        <?php
                            if ($terms = get_the_terms($post->ID, 'news-cat')) {
                                foreach ( $terms as $term ) {
                                    echo '<li><a href="'.get_term_link($term) .'">' .$term->name . '</a></li>';
                                }
                            }
                        ?>
                    </ul>
                        <?php
                            // カスタム投稿のタグを取得
                            $tags = get_the_term_list(get_the_ID(), 'news-tag', '<li>', '</li><li>', '</li>');
                            // タグがあれば出力
                            if ($tags) {
                                echo '<ul class="p-card__menu__news__tag">' . $tags . '</ul>';
                            }
                        ?>
                    <h3 class="c-title--subheading c-font-family--mplus1"></h3>
                    <p class="c-text--card__news c-font-family--mplus1">
                        <?php
                            if (has_excerpt()) {
                                echo esc_html(get_the_excerpt());
                            } else {
                                if (mb_strlen($post->post_content, 'UTF-8') > 110) {
                                    $content = mb_substr(strip_tags($post->post_content), 0, 110, 'UTF-8');
                                    echo $content;
                                } else {
                                    // echo strip_tags($post->post_content);
                                }
                            }
                        ?>
                    </p>
                    <button class="c-button--archive__news c-font-family--mplus1">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>
                    </button>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    <?php else : ?>
        <p class="search_result">「表示するお知らせがありません」</p>
    <?php endif; ?>
</section>
