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
    add_submenu_page( 'gsweb' , 'Custom CSS' , 'Custom CSS' , 'manage_options' , 'gsweb_custom_css' , 'gsweb_theme_custom_css_page' );

    // Activate custom settings
    add_action( 'admin_init' , 'gsweb_custom_settings' );
}

add_action( 'admin_menu' , 'gsweb_add_admin_page' );

// function to custom welcome for gsweb theme
function gsweb_custom_settings(){
    register_setting( 'gsweb-settings-group' , 'gsweb_options' );
    add_settings_section( 'gsweb-sidebar-options' , 'Theme Options' , 'gsweb_sidebar_options' , 'gsweb' );
    add_settings_field( 'gsweb-sidebar-name' , 'Primary Color:' , 'gsweb_sidebar_name' , 'gsweb' , 'gsweb-sidebar-options' );
}

// sidebar page to get field name options for gsweb theme
function gsweb_sidebar_name(){
    $firstName = esc_attr( get_option( 'gsweb_options' ) );
    echo '<input type="color" name="gsweb_options" class="form-control w-25 p-0" style="width:30px!important;height:30px!important" '.(is_null($firstName)?'':' value="' . $firstName .'" ').' />';
}

// sidebar page options for gsweb theme
function gsweb_sidebar_options(){
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