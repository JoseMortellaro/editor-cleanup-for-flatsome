<?php
defined( 'FDP_ECFF_PLUGIN_DIR' ) || exit; //Exit if not called by FDP PRO


add_action( 'admin_notices','eos_dp_ecff_flatsome_not_active' );
add_action( 'fdp_admin_notices','eos_dp_ecff_flatsome_not_active' );
//Warn the user FDP is not active
function eos_dp_ecff_flatsome_not_active(){
  static $called = false;
  if( $called ) return;
  $called = true;
  ?>
  <div class="notice notice-error" style="display:block !important;padding:20px">
    <?php esc_html_e( 'Editor Cleanup For Flatsome needs that Flatsome is installed and active!','editor-cleanup-for-flatsome' ); ?>
  </div>
  <?php
}
