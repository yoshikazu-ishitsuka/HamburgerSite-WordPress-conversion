<article class="side-wrapper">
    <aside class="l-sidebar p-sideMenu">
        <div class="l-sidebar__main p-sideMenu__main js-toggle">
            <span class="menu-close js-button is-click"><i class="c-img--xmark"></i></span>
            <?php
            $args = array(
                // wp_nav_menu(array(
                'theme_location'  => 'category_nav',
                'container'       => 'nav',
                'container_class' => 'add-class',
                // 'link_before'     => '',
                // 'link_after'      => '<i class="icon ion-md-arrow-dropright"></i>',
                // 'items_wrap'      => '<ul>%3$s</ul>',
                // ));
            );
            wp_nav_menu($args);
            ?>
        </div>
    </aside>
</article>
