<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__archive">
    <section class="p-visual__archive--main u-background--overlay--archive">
      <h2 class="c-title--main c-font-color--white c-font-family--robot c-font-weight--bold">
        Search:<span class="c-title--under-text"><?php echo esc_html(get_search_query()); ?></span>
      </h2>
    </section>


    <section class="p-visual__archive--sentence">
      <h2 class="c-title--archive">
        <?php if (empty(get_search_query())) : ?>
          「検索キーワードが未入力です」
        <?php else : ?>
          <?php the_search_query(); ?> の検索結果
          <?php echo $wp_query->found_posts; ?>件
      </h2>
      <p class="c-text--archive c-font-family--mplus1">
      </p>
    </section>

    <?php get_template_part("components/card"); ?>

    <?php wp_pagenavi(); ?>

  <?php endif; ?>
  </article>
</main>
<?php get_footer(); ?>
