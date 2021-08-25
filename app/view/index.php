<?php $user = wp_get_current_user(); ?>
<h3><?php echo esc_html($user->display_name); ?>, vamos começar?</h3>
<hr />
<div class="content-boxed">
    <div class="content row">
        <div class="col-6">
            coluna 1
        </div>
        <div class="col-6">
            coluna 2
        </div>
    </div>
</div>