<nav id="site-navigation" class="main-navigation">
    <?php
    $menu = wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            "after" => '<div class="main-navigation--icon-wrapper">
                            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="main-navigation--icon">
                                  <rect x="5.06152" y="4.47412" width="6.32705" height="6.32705" transform="rotate(-45 5.06152 4.47412)" fill="black"/>
                                  <rect x="10.123" y="9.53564" width="6.32705" height="6.32705" transform="rotate(-45 10.123 9.53564)" fill="black"/>
                                  <rect x="5.06152" y="14.5972" width="6.32705" height="6.32705" transform="rotate(-45 5.06152 14.5972)" fill="black"/>
                                  <rect y="9.53564" width="6.32705" height="6.32705" transform="rotate(-45 0 9.53564)" fill="black"/>
                            </svg>
                        </div>

                        '
        )
    );
    ?>
</nav>