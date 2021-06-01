<?php

/*
@package gsweb-theme
    ================================
        ADMIN PAGE
    ================================
*/

function gsweb_add_admin_page(){
    // Main option for gsweb theme
    add_menu_page( 'GSWEB Theme Options' , 'Theme Options' , 'manage_options' , 'gsweb' , 'gsweb_theme_welcome_page' , 'dashicons-google', 110 );

    // Sub menu for gsweb theme
    add_submenu_page( 'gsweb' , 'GSWEB welcome' , 'Welcome' , 'manage_options' , 'gsweb' , 'gsweb_theme_welcome_page' );
    add_submenu_page( 'gsweb' , 'Custom CSS' , 'Settings' , 'manage_options' , 'gsweb_custom_css' , 'gsweb_theme_custom_css_page' );

    // Activate custom settings
    add_action( 'admin_init' , 'gsweb_custom_settings' );
}

add_action( 'admin_menu' , 'gsweb_add_admin_page' );

// function to custom welcome for gsweb theme
function gsweb_custom_settings(){
    register_setting( 'gsweb-settings-group' , 'gsweb_primary_color' );
    register_setting( 'gsweb-settings-group' , 'gsweb_secondary_color' );
    register_setting( 'gsweb-settings-group' , 'gsweb_theme' );

    add_settings_section( 'gsweb-settings-options' , 'Theme Settings' , 'gsweb_general_options' , 'gsweb' );
    add_settings_field( 'gsweb-sidebar-primary-color' , 'Primary:' , 'gsweb_settings_color' , 'gsweb' , 'gsweb-settings-options' );
    add_settings_field( 'gsweb-sidebar-secondary-color' , 'Secondary:' , 'gsweb_settings_color_secondary' , 'gsweb' , 'gsweb-settings-options' );
    add_settings_field( 'gsweb-sidebar-theme' , 'Default Theme:' , 'gsweb_settings_theme' , 'gsweb' , 'gsweb-settings-options' );
}

// main funciton to get field options for gsweb theme
// Option to save the primary Color
function gsweb_settings_color(){
    $promaryColor = esc_attr( get_option( 'gsweb_primary_color' ) );
    echo '<input type="color" name="gsweb_primary_color" class="form-control w-25 p-0" style="width:30px!important;height:30px!important;cursor:pointer;border: 3px solid #07A6BB!important;" '.(is_null($promaryColor)?'':' value="' . $promaryColor .'" ').' />';
}
// Option to save the secondary Color
function gsweb_settings_color_secondary(){
    $secondaryColor = esc_attr( get_option( 'gsweb_secondary_color' ) );
    echo '<input type="color" name="gsweb_secondary_color" class="form-control w-25 p-0" style="width:30px!important;height:30px!important;cursor:pointer;border: 3px solid #07A6BB!important;" '.(is_null($secondaryColor)?'':' value="' . $secondaryColor .'" ').' />';
}
// Option to save the themes
function gsweb_settings_theme(){
    $def_theme = esc_attr( get_option( 'gsweb_theme' ) );
    echo '<select class="form-select" aria-label="Default select example" name="gsweb_theme">
    <option '.(($def_theme == 'Default')?' selected value="0" ':'').'>Default</option>
    <option '.(($def_theme == 'Chart Experts')?' selected value="1" ':'').'>Chart Experts</option>
  </select>';
}

// sidebar page options for gsweb theme
function gsweb_general_options(){
    echo 'General Styles';
}

// Main page for gsweb theme
function gsweb_theme_welcome_page(){
    require_once( get_template_directory() . '/inc/templates/gsweb-admin.php' );
}

// Sub page for custom css page
function gsweb_theme_custom_css_page(){
    require_once( get_template_directory() . '/inc/templates/custom-css.php' );
}