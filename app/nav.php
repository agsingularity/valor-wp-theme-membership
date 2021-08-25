<?php get_template_part('top-header'); ?>

<div class="page-wrapper">

    <!-- Main Header-->
    <header class="main-header">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <!-- Top Left -->
                    <div class="top-left pull-left">
                        <div class="text">
                            <?php $user = wp_get_current_user(); ?>
                            <p class="m-0 p-0">
                                <strong>
                                    <?php
                                        if (is_user_logged_in()) {
                                            echo 'Olá, ' . esc_html($user->display_name);  
                                        } else {
                                            echo '';
                                        }
                                    ?>
                                </strong>
                            </p>
                        </div>
                    </div>
                    <!-- Top Right -->
                    <div class="top-right pull-right">
                        <?php if (is_user_logged_in()) { ?>
                            <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-sm btn-link text-white text-decoration-none">Deseja sair?</a>
                        <?php } else { echo ''; } ?>
                    </div>

                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="" title=""></a></div>
                        <div class="logo-two"><a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo-2.png'; ?>" alt="" title=""></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo-2.png'; ?>" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!--End Main Header -->