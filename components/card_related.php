<section class="p-visual__archive--card__related">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="p-card__menu__related">
                <?php the_post_thumbnail('medium', ['class' => 'p-card__menu--image__related']); ?>
                <figcaption class="p-card__menu--caption c-background-color--card">
                    <h2 class="c-title--card c-font-family--mplus1"><?php the_title(); ?></h2>
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
        <p class="search_result">「表示する商品がありません」</p>
    <?php endif; ?>
</section>
