<div class="container px-0 mt-3">
    <?php if (has_header_image()) {
        echo '<a href="'.get_home_url().'">';
            echo '<img class="w-100" src="'.esc_url(get_header_image()).'" />';
        echo '</a>';
    } ?>
</div>

<div class="container px-0">
<nav id="main-navi" class="navbar navbar-expand-md d-block navbar-light pb-0 px-0 pt-0 bg-gradient" aria-labelledby="main-nav-label">

    <h2 id="main-nav-label" class="screen-reader-text">
        <?php esc_html_e('Main Navigation', 'justg'); ?>
    </h2>

    <div class="row align-items-center m-0">
        <div class="col-12 px-0">

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

                <div class="offcanvas-header justify-content-end m-3 p-0">
                    <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div><!-- .offcancas-header -->

                <!-- The WordPress Menu goes here -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'offcanvas-body',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav navbar-light justify-content-start flex-md-wrap flex-grow-1',
                        'fallback_cb'     => '',
                        'menu_id'         => 'primary-menu',
                        'depth'           => 4,
                        'walker'          => new justg_WP_Bootstrap_Navwalker(),
                    )
                ); ?>

            </div><!-- .offcanvas -->

            <div class="menu-header d-md-none position-relative text-start" data-bs-theme="dark">
                <button class="navbar-toggler bg-transparent w-100 text-white text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
                    <span class="navbar-toggler-icon"></span> Menu
                </button>
            </div>
        </div>
    </div>

</nav><!-- .site-navigation -->
</div>
