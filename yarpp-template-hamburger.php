<?php
/*
YARPP Hamburger
Author: YOSHIKAZU ISHITSUKA
Description: ハンバーガーサイト関連記事用のテンプレートです。
*/
?><h3>★ おすすめ商品</h3>
<?php if (have_posts()):?>
<ol>
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	</li>
	<?php endwhile; ?>
</ol>
<?php else: ?>
<p>記事が見つかりません</p>
<?php endif; ?>
