<section class="p-visual__archive--card__related">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="p-card__menu__related">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['class' => 'p-card__menu--image__related']); ?>
                </a>
                <figcaption class="p-card__menu--caption__related c-background-color--card">
                    <h2 class="c-title--card__related c-font-family--mplus1"><?php the_title(); ?></h2>
                    <h3 class="c-title--subheading__related c-font-family--mplus1"></h3>
                    <p class="c-text--card__related c-font-family--mplus1">
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
                    <div class="c-button--archive__related--outer">
                        <button class="c-button--archive__related c-font-family--mplus1">
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </button>
                    </div>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    <?php else : ?>
        <p class="search_result">「表示する商品がありません」</p>
    <?php endif; ?>
</section>
