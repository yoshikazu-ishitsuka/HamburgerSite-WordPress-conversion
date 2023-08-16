<section class="p-visual__archive--card">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="p-card__menu">
                <?php the_post_thumbnail('full', ['class' => 'p-card__menu--image']); ?>
                <figcaption class="p-card__menu--caption c-background-color--card">
                    <div class="new-outer">
                        <?php 
                            $days = 14; // テキストを表示する日数
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
                    <h2 class="c-title--card c-font-family--mplus1">
                        <?php the_title(); ?>
                    </h2>
                    <h3 class="c-title--subheading c-font-family--mplus1"></h3>
                    <p class="c-text--card c-font-family--mplus1">
                        <?php
                        if (has_excerpt()) {
                            echo esc_html(get_the_excerpt());
                        } else {
                            if (mb_strlen($post->post_content, 'UTF-8') > 110) {
                                $content = mb_substr(strip_tags($post->post_content), 0, 110, 'UTF-8');
                                echo $content . '…';
                            } else {
                                // echo strip_tags($post->post_content);
                            }
                        }
                        ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"><button class="c-button--archive c-font-family--mplus1">詳しく見る</button></a>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    <?php else : ?>
        <p class="search_result">「表示するメニューがありません」</p>
    <?php endif; ?>
</section>
