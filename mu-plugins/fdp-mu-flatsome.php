<?php
/*
  Plugin Name: flatsome editor cleanup [oes]
  Description: mu-plugin automatically installed by Flatsome Editor Cleanup
  Version: 0.0.1
  Plugin URI: https://freesoul-deactivate-plugins.com/
  Author: Jose Mortellaro
  Author URI: https://josemortellaro.com/
  License: GPLv2
*/

defined( 'ABSPATH' ) || exit; // Exit if accessed directly
define( 'FDP_ECFF_MU_VERSION','0.0.2' );

if( isset( $_GET['app'] ) && 'uxbuilder' === $_GET['app'] && isset( $_GET['action'] ) && 'edit' === $_GET['action'] ){
  add_filter( 'fdp_backend_plugins',function( $plugins ){
    return eos_dp_ecff_plugins( $plugins,'outer' );
  } );
}
elseif( isset( $_GET['uxb_iframe'] ) && '1' === $_GET['uxb_iframe'] ){
  add_filter( 'fdp_frontend_plugins',function( $plugins ){
    return eos_dp_ecff_plugins( $plugins,'inner' );
  } );
}

add_filter( 'fdp_ajax_plugins',function( $plugins ){
  if( isset( $_REQUEST['action'] ) && false !== strpos( sanitize_text_field( $_REQUEST['action'] ),'ux_builder' ) ){
    return eos_dp_ecff_plugins( $plugins,'loading' );
  }
  return $plugins;
} );

add_filter( 'fdp_ajax_plugins',function( $plugins ){
  if( isset( $_REQUEST['action'] ) && in_array( sanitize_text_field( $_REQUEST['action'] ),array( 'eos_dp_save_flatsome_outer_settings','eos_dp_save_flatsome_inner_settings','eos_dp_save_flatsome_loading_settings' ) ) ){
    return array_merge( array( 'flatsome/functions.php' ),fdp_ecff_plugins( $plugins ) );
  }
  return $plugins;
} );

function eos_dp_ecff_plugins( $plugins,$page ){
  $opts = eos_dp_get_option( 'fdp_flatsome' );
  $flatsome_plugins = isset( $opts[$page] ) ? $opts[$page] : array();
  $fdp_plugins = fdp_ecff_plugins( $plugins );
  $flatsome_plugins = $flatsome_plugins && is_array( $flatsome_plugins ) ? array_merge( $flatsome_plugins,$fdp_plugins ) : $fdp_plugins;
  foreach( $flatsome_plugins as $plugin ){
    if( in_array( $plugin,$plugins ) || in_array( $plugin,$fdp_plugins ) ){
      unset( $plugins[array_search( $plugin,$plugins )] );
    }
  }
  return array_values( $plugins );
}

function fdp_ecff_plugins( $plugins ){
  $arr = array(
    'freesoul-deactivate-plugins/freesoul-deactivate-plugins.php',
    'editor-cleanup-for-flatsome/editor-cleanup-for-flatsome.php'
  );
  if( in_array( 'freesoul-deactivate-plugins-pro/freesoul-deactivate-plugins-pro.php',$plugins ) ){
    $arr[] = 'freesoul-deactivate-plugins-pro/freesoul-deactivate-plugins-pro.php';
  }
  return $arr;
}
