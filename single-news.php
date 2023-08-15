<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__single">
    <section>
        <?php if(has_post_thumbnail()): ?>
            <!--投稿にアイキャッチがある場合-->
            <?php the_post_thumbnail( 'full', ['class' => 'p-visual__single--main']); ?>
        <?php else: ?>
            <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
            <img class="p-visual__single--main" src="<?php echo get_theme_file_uri(); ?>/images/noimage.png" alt="no image">
        <?php endif; ?>
      <h1 class="c-title--main c-font-color--white c-font-family--mplus1 c-font-weight--bold">
        <?php the_title(); ?>
      </h1>
    </section>

    single-news.phpページです

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php wp_link_pages(); ?>
          <?php the_content(); ?>
      <?php endwhile; ?>    
    <?php else : ?>
        <p>表示するお知らせがありません</p>
    <?php endif; ?>
  </article>
</main>
<?php get_footer(); ?>
