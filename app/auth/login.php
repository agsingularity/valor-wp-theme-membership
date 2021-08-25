<?php
  $args = array(
    'echo'           => true,
    // Default 'redirect' value takes the user back to the request URI.
    'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . '/app',
    'form_id'        => 'loginform',
    'label_username' => __( 'Usuário' ),
    'label_password' => __( 'Senha' ),
    'label_remember' => __( 'Lembrar de mim' ),
    'label_log_in'   => __( 'Entrar' ),
    'id_username'    => 'user_login',
    'id_password'    => 'user_pass',
    'id_remember'    => 'rememberme',
    'id_submit'      => 'wp-submit',
    'remember'       => true,
    'value_username' => '',
    // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
    'value_remember' => false,
  );

  $form = '
    <form name="' . $args['form_id'] . '" id="' . $args['form_id'] . '" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">
      <p class="my-3">
        <label class="form-label text-uppercase" for="' . esc_attr( $args['id_username'] ) . '">' . esc_html( $args['label_username'] ) . '</label>
        <input type="text" name="log" id="' . esc_attr( $args['id_username'] ) . '" class="form-control input-lg" value="' . esc_attr( $args['value_username'] ) . '" size="20" />
      </p>
      <p class="my-3">
        <label class="form-label text-uppercase" for="' . esc_attr( $args['id_password'] ) . '">' . esc_html( $args['label_password'] ) . '</label>
        <input type="password" name="pwd" id="' . esc_attr( $args['id_password'] ) . '" class="form-control input-lg" value="" size="20" />
      </p>
      ' . ( $args['remember'] ? '<p class="login-remember mb-5"><label><input class="rounded mr-2" name="rememberme" type="checkbox" id="' . esc_attr( $args['id_remember'] ) . '" value="forever"' . ( $args['value_remember'] ? ' checked="checked"' : '' ) . ' /> ' . esc_html( $args['label_remember'] ) . '</label></p>' : '' ) . '
      <p class="login-submit block">
        <input type="submit" name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" class="btn btn-outline-dark btn-lg w-100" value="' . esc_attr( $args['label_log_in'] ) . '" />
        <input type="hidden" name="redirect_to" value="' . esc_url( $args['redirect'] ) . '" />
      </p>
    </form>
  ';

  if ( $args['echo'] ) {
    echo $form;
  } else {
    return $form;
  }

?>