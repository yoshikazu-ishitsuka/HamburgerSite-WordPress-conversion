<article class="side-wrapper">
    <aside class="l-sidebar p-sideMenu">
        <div class="l-sidebar__main p-sideMenu__main js-toggle">
            <span class="menu-close js-button is-click"><i class="c-img--xmark"></i></span>
            <?php
            wp_nav_menu(array(
                'menu'            => 'categorymenu',
                'theme_location'  => 'category_nav',
                'container'       => 'nav',
                'container_class' => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'items_wrap'      => '<ul>%3$s</ul>',
            ));
            ?>
        </div>
    </aside>
</article>
