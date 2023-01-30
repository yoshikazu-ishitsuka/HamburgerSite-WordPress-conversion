<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__single">
    <section>
      <?php echo get_the_post_thumbnail('', 'large', ['class' => 'p-visual__single--main']); ?>
      <h1 class="c-title--main c-font-color--white c-font-family--mplus1 c-font-weight--bold">
        <?php echo get_the_title(); ?>
      </h1>
    </section>

    <?php get_template_part("components/description"); ?>

  </article>
</main>
<?php get_footer(); ?>
