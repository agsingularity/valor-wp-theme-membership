    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="logo-box">
                <div class="logo"><a href="index.html"><img src="/assets/images/logo.png" alt="" /></a></div>
            </div>
            <ul class="footer-nav">
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('o escritorio'))); ?>">O Escritório</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('áreas de atuação'))); ?>">Áreas de Atuação</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('contato'))); ?>">Contato</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_title('relações publicas'))); ?>">Relações Públicas</a></li>
            </ul>
            <!-- Social Box -->
            <ul class="social-box">
                <li class="instagram"><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
                <li class="whatsapp"><a href="https://www.behance.net/" class="icofont-whatsapp"></a></li>
                <li class="facebook"><a href="http://facebook.com/" class="icofont-facebook"></a></li>
            </ul>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<?php wp_footer(); ?>

</body>

</html>