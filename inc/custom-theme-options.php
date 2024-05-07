<?php
if ( !function_exists('pbw_custom_theme_options_menu') ):
  function pbw_custom_theme_options_menu () {
    add_menu_page( 'Ajustes del Tema', 'Ajustes del Tema', 'administrator', 'custom_theme_options', 'pbw_custom_theme_options_form', 'dashicons-admin-generic', 20 );
  }
endif;

add_action('admin_menu', 'pbw_custom_theme_options_menu');

if ( !function_exists('pbw_custom_theme_options_form') ):
  function pbw_custom_theme_options_form () {
?>
    <div class="wrap">
      <h1><?php _e('Ajustes y Opciones del Tema', 'pbw'); ?></h1>
      <form action="options.php" method="post">
        <?php
          settings_fields('pbw_options_group');
          do_settings_sections( 'pbw_options_group' );
        ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Texto del Footer:</th>
            <td>
              <input type="text" name="pbw_footer_text" value="<?php echo esc_attr( get_option('pbw_footer_text') ); ?>">
            </td>
          </tr>
        </table>
        <?php submit_button(); ?>
      </form>
    </div>
<?php
  }
endif;

if ( !function_exists('pbw_custom_theme_options_register') ):
  function pbw_custom_theme_options_register () {
    //un registro por opción
    register_setting('pbw_options_group', 'pbw_footer_text' );
  }
endif;

add_action('admin_init', 'pbw_custom_theme_options_register');
?>