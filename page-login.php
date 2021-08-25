<?php
    get_header();
    get_template_part('app/nav');
?>
    <section class="page-title-section style-two" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/4.jpg'; ?>)">
        <div class="auto-container">
            <div class="content-boxed">
                <div class="content row">
                    <div class="col-6 text-start">
                        <div class="title">escritório virtual</div>
                        <h1><span>Acesse nosso</span><br>escritório.</h1>
                    </div>
                    <div class="col-6">
                        <div class="bg-white p-4 text-start m-4 rounded">
                            <?php get_template_part('app/auth/login'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>