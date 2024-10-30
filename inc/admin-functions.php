<?php
/*
 * Define all the Administrative functions and menu items
 */
function cp_register_settings() {
  register_setting( 'cp_options_group', 'cp_affiliate_id' );
}

function add_cp_pressit_js() {
  echo '<script src="//pressit.cplaunchpad.com/js/pressit.min.js" data-affiliate-id="' . get_option( 'cp_affiliate_id' ) . '"></script>';
}

function cp_create_menu() {
  $page = add_menu_page( 'Cafepress PressIt Button', 'Cafepress', 'manage_options', 'cp_pressit_button',
    'cp_pressit_settings', CP_IMAGES_URL . 'cp-pressit-button-icon-small.png' );
}

if ( is_admin() ) {
  add_action( 'admin_init', 'cp_register_settings' );
  add_action( 'admin_menu', 'cp_create_menu' );
} else {
  add_action( 'wp_footer',  'add_cp_pressit_js' );
}
