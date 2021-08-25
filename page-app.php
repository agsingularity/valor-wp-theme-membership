<?php
    get_template_part('app/top-header');
    get_template_part('app/nav');
    get_template_part('app/nav-bottom');
?>

<section class="py-5">
    <div class="auto-container">
        <div class="content-boxed">
            <div class="content row">
                <div class="col-3">
                    <div class="sidebar-widget categories-widget">
                        <div class="widget-content">
                            <div class="sidebar-title">
                                <h3>Menu</h3>
                            </div>
                            <ul class="service-cat-two">
                                <li>
                                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('app'))); ?>">Início</a>
                                </li>
                                <li>
                                    <a href="?p=documentos">Documentos</a>
                                </li>
                                <li>
                                    <a href="?p=processos">Processos</a>
                                </li>
                                <li>
                                    <a href="?p=faturas">Faturas</a>
                                </li>
                                <li>
                                    <a href="?p=configs">Configurações</a>
                                </li>
                                <li>
                                    <a href="?p=perfil">Perfil</a>
                                </li>
                                <li>
                                    <a href="<?php echo wp_logout_url(home_url()); ?>">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <?php
                        if ( isset($_GET['p']) ) {
                            $page = $_GET['p'];
                            switch ($page) {
                            case 'documentos':
                                get_template_part( 'app/view/documentos' );
                                break;
                            case 'processos':
                                get_template_part( 'app/view/processos' );
                                break;
                            case 'faturas':
                                get_template_part( 'app/view/faturas' );
                                break;
                            case 'configs':
                                get_template_part( 'app/view/configs' );
                                break;
                            case 'nfse':
                                get_template_part( 'app/view/nfse' );
                                break;
                            }
                        } else {
                            get_template_part( 'app/view/index' );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>