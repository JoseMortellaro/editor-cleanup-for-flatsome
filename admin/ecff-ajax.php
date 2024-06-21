<?php
defined( 'ABSPATH' ) || exit;

foreach( array( 'outer','inner','loading' ) as $page ){
	add_action( 'wp_ajax_eos_dp_save_flatsome_'.$page.'_settings','eos_dp_save_flatsome_'.$page.'_settings' );
}
//Saves activation/deactivation settings for flatsome outer editor
function eos_dp_save_flatsome_outer_settings(){
	eos_dp_save_flatsome_settings( 'outer' );
}
//Saves activation/deactivation settings for flatsome inner editor
function eos_dp_save_flatsome_inner_settings(){
	eos_dp_save_flatsome_settings( 'inner' );
}
//Saves activation/deactivation settings for flatsome loading editor
function eos_dp_save_flatsome_loading_settings(){
	eos_dp_save_flatsome_settings( 'loading' );
}
//Callback for saving Flatsome editor settings
function eos_dp_save_flatsome_settings( $page ){
	eos_dp_check_intentions_and_rights( 'eos_dp_flatsome_'.$page.'_setts' );
	if( isset( $_POST['eos_dp_flatsome_data'] ) && !empty( $_POST['eos_dp_flatsome_data'] ) && isset( $_POST['page'] ) && !empty( $_POST['page'] ) ){
		$opts = eos_dp_get_option( 'fdp_flatsome' );
		$opts[sanitize_key( $_POST['page'] )] = array_filter( explode( ',',sanitize_text_field( $_POST['eos_dp_flatsome_data'] ) ) );
		eos_dp_update_option( 'fdp_flatsome',$opts,false );
		echo 1;
		die();
	}
	echo 0;
	die();
}
