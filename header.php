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
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('login'))); ?>" class="btn btn-sm btn-link text-white text-decoration-none">Acessar Escritório</a>
                            <span class="mr-3">&nbsp; Brooklyn, SP, São Paulo</span>
                        </div>
                    </div>

                    <!-- Top Right -->
                    <div class="top-right pull-right">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="mailto:contact@lawa.com" style="text-transform: initial !important;"> contato@lawa.adv.br</a></li>
                            <li><a href="tel:+55 11 4040-5566">+55 11 4040-5566</a></li>
                        </ul>
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

                            <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation left-nav clearfix">
                                    <li class="current"><a href="<?php echo esc_url(get_permalink(get_page_by_title('minha conta'))); ?>">Início</a></li>
                                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('areas de atuacao'))); ?>">Áreas</a></li>
                                </ul>

                                <ul class="navigation right-nav clearfix">
                                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('blog'))); ?>">Blog</a></li>
                                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('contato'))); ?>">Contato</a></li>
                                </ul>
                            </div>

                        </nav>

                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a href="#"><span class="icofont-instagram"></span></a></li>
                            <li><a href="#"><span class="icofont-whatsapp"></span></a></li>
                            <li><a href="#"><span class="icofont-facebook"></span></a></li>
                        </ul>

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