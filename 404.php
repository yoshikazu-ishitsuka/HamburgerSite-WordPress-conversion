<!-- 404.php -->
<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="page_error">
    <h2 class="page_error__h2">404 Not Found（ページが見つかりませんでした）</h2>
    <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
    <p class="error_url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
    <p>現在表示する記事がありません。</p>
    <p>よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
    <p><a class="page_error__top" href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
</div>
<?php get_footer(); ?>
