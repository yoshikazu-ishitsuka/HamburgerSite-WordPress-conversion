<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__single">
    <section>
      <?php echo get_the_post_thumbnail('', 'medium_large', array('class' => 'p-visual__single--main')); ?>
      <h1 class="c-title--main c-font-color--white c-font-family--mplus1 c-font-weight--bold">
        <?php the_title(); ?>
      </h1>
    </section>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php wp_link_pages(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <p>表示するメニューがありません</p>
      <?php endif; ?>

  </article>
</main>
<?php get_footer(); ?>
