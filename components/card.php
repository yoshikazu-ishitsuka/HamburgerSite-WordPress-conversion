<section class="p-visual__archive--card">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="p-card__menu">
                <?php the_post_thumbnail('full', ['class' => 'p-card__menu--image']); ?>
                <figcaption class="p-card__menu--caption c-background-color--card">
                    <h2 class="c-title--card c-font-family--mplus1"><?php the_title(); ?></h2>
                    <h3 class="c-title--subheading c-font-family--mplus1">小見出しが入ります</h3>
                    <p class="c-text--card c-font-family--mplus1">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="<?php the_permalink(); ?>"><button class="c-button--archive c-font-family--mplus1">詳しく見る</button></a>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    <?php else : ?>
        <p>表示するメニューがありません</p>
    <?php endif; ?>
</section>
