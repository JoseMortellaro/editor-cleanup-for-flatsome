<?php
defined( 'ABSPATH' ) || exit; // Exit if accessed directly

if( file_exists( WPMU_PLUGIN_DIR.'/fdp-mu-flatsome.php' ) ){
  unlink( WPMU_PLUGIN_DIR.'/fdp-mu-flatsome.php' );
}
eos_dp_ecff_write_file( FDP_ECFF_PLUGIN_DIR.'/mu-plugins/fdp-mu-flatsome.php',WPMU_PLUGIN_DIR,WPMU_PLUGIN_DIR.'/fdp-mu-flatsome.php',true );
