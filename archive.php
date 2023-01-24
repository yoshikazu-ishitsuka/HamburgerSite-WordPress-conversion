<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main">
  <article class="p-visual__archive">
    <section class="p-visual__archive--main u-background--overlay--archive">
      <h2 class="c-title--main c-title--under-text c-font-color--white c-font-family--robot c-font-weight--bold">
        Menu:
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

    <!-- <section class="p-pagination"> -->

    <?php wp_pagenavi(); ?>


    <!-- <a class="prev-link" href="#">
        <div class="c-img--current-page"></div>
        <div class="c-img--prev"></div>
        <div class="c-text--pagination">前へ</div>
      </a>
      <a class="pagination-link" href="#">
        <ul class="number-list">
          <li class="page-number c-border">1</li>
          <li class="page-number c-border">2</li>
          <li class="page-number c-border">3</li>
          <li class="page-number c-border">4</li>
          <li class="page-number c-border">5</li>
          <li class="page-number c-border">6</li>
          <li class="page-number c-border">7</li>
          <li class="page-number c-border">8</li>
          <li class="page-number c-border">9</li>
        </ul>
      </a>
      <a class="next-link" href="#">
        <div class="c-img--next"></div>
        <div class="c-text--pagination">次へ</div>
      </a> -->
    <!-- </section> -->

  </article>
</main>
<?php get_footer(); ?>
