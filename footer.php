<footer class="l-footer c-background--footer">
    <?php
    wp_nav_menu(array(
        'menu'            => 'footermenu',
        'theme_location'  => 'footer_nav',
        'container'       => '',
        'menu_class'      => 'l-footer--menu c-title--footer c-font-family--mplus1',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    ));
    ?>
    <small class="c-text--copy-right c-font-family--mplus1 c-font-weight--normal">Copyright: RaiseTech</small>
</footer>

</article>
<?php wp_footer(); ?>
</body>

</html>
