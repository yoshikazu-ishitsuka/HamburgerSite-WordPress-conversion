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
          <?php
            // ハンバーガー詳細ページの「おすすめ情報タイトル」カスタムフィールドの値を取得
              $recommend_title = get_post_meta( get_the_ID(), 'おすすめ情報タイトル', true );// priceデータの取得
            // ハンバーガー詳細ページの「おすすめ情報リンク」カスタムフィールドの値を取得
            $recommend_link = get_post_meta( get_the_ID(), 'おすすめ情報リンク', true );
            // リンクが存在するかチェック
            if ( ! empty( $recommend_link ) ) {
              // リンクがある場合はリンク付きのタイトルを表示
              echo '<h4 class="recommended-title"><a href="' . esc_url( $recommend_link ) . '">' . esc_html( $recommend_title ) . '</a></h4>';
              // リンクはないがおすすめ情報タイトルがある場合はタイトルのみを表示
            } elseif ( ! empty( $recommend_title ) ) {
              echo '<h4 class="recommended-title">' . esc_html( $recommend_title ) . '</h4>';
            } 
            // 「おすすめ情報タイトル」に入力がない場合はデフォルトの設定として「ブログのトップページへ」へのリンクを表示
            if ( empty( $recommend_title ) ) {
              if ( empty ( $recommend_link ) ) {
                echo '<h4 class="recommended-title"><a href="' . esc_url( get_home_url() ) . '">ブログのトップページへ</a></h4>';
              }
            }
          ?>
          <?php
            if ( function_exists( 'yarpp_related' ) ) {
              yarpp_related();
            }
          ?>
      <?php else : ?>
        <p>表示するメニューがありません</p>
      <?php endif; ?>

  </article>
</main>
<?php get_footer(); ?>
