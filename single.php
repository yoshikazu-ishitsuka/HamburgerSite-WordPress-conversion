<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__single">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <p>表示するメニューがありません</p>
    <?php endif; ?>

  </article>
</main>
<?php get_footer(); ?>
