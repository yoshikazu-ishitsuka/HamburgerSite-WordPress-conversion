<?php
// １、投稿テキストを取得する
$content = get_the_content();

// ２，HTMLタグをすべて取り除く
//$content = wp_strip_all_tags($content);

// ３．ショートコードを取り除く
$content = strip_shortcodes($content);
?>

<section class="p-visual__single--sentence">
    <h2 class="c-title__single--h2">
        見出しh2
    </h2>
    <p class="c-text--single c-font-family--mplus1">
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
        Pタグテキスト。
    </p>
    <h3 class="c-title__single--h3">
        見出しh3
    </h3>
    <h4 class="c-title__single--h4">
        見出しh4
    </h4>
    <h5 class="c-title__single--h5">
        見出しh5
    </h5>
    <h6 class="c-title__single--h6">
        見出しh6
    </h6>
    <blockquote class="quotation--single">
        <p class="c-text--blockquote">Blockquote
            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ

        </p>
        <cite class="citation--single">
            出典元： <a class="citation-link" href="#">〇〇〇〇〇〇〇〇〇〇〇〇</a>
        </cite>
    </blockquote>
</section>

<section class="p-visual__single--sub">
    <div class="first-block">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>表示するメニューがありません</p>
        <?php endif; ?>

</section>

<section class="p-visual__single--list">
    <ul class="list-group--01">
        <li>1.リストリストリスト</li>
        <li>2.リストリストリスト</li>
    </ul>
    <ul class="list-group--02">
        <li>1.リスト2リスト2リスト2</li>
        <li>2.リスト2リスト2リスト2</li>
    </ul>
    <ul class="list-group--03">
        <li>1.リストリストリスト</li>
        <li>2.リストリストリスト</li>
    </ul>
    <ul class="list-group--04">
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
    </ul>
    <ul class="list-group--05">
        <li>リスト2リスト2リスト2</li>
        <li>リスト2リスト2リスト2</li>
    </ul>
    <ul class="list-group--06">
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
    </ul>
</section>

<section class="p-visual__single--code">
    <pre>
            <code>
              &lt;html&gt;
                      &lt;head&gt;
                      &lt;/head&gt;
                      &lt;body&gt;
                      &lt;/body&gt;
              &lt;/html&gt;
            </code>
          </pre>
</section>

<section class="p-visual__single--table">
    <table class="c-text--base">
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
    </table>
</section>

<div class="p-visual__single--button">
    <input type="button" value="ボタン" class="c-button--single">
</div>

<div class="p-visual__single--bold">
    <p>
        boldboldboldboldboldboldboldbold
    </p>
</div>
