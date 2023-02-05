<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__archive">
    <section class="p-visual__archive--main u-background--overlay--archive">
      <h2 class="c-title--main c-font-color--white c-font-family--robot c-font-weight--bold">
        Menu:<span class="c-title--under-text"><?php single_cat_title('', true); ?></span>
      </h2>
    </section>

    <section class="p-visual__archive--sentence">
      <h2 class="c-title--archive">
        小見出しが入ります
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

    <?php get_template_part("components/card"); ?>

    <?php wp_pagenavi(); ?>

  </article>
</main>
<?php get_footer(); ?>
