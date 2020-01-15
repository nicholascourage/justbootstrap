<?php

/**
 * Class Template Assets
 *
 * @package	justbootstrap
 * @author Nick
 * @copyright 2019, virtuswebmedia
 * @link https://virtuswebmedia.com
 * @since Version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {

    exit;

}


class JustBootstrap_Template_Assets{

    public function __construct(){

        add_action( 'wp_enqueue_scripts', array( $this, 'jsb_enqueue_styles' ) );
        
        add_action( 'wp_enqueue_scripts', array( $this, 'jsb_enqueue_scripts' ) );

    }

    public function jsb_enqueue_styles(){

        wp_enqueue_style( 'jsb-bootstrap', JSB_CSS . 'bootstrap.min.css', 'style' );

        wp_enqueue_style( 'jsb-theme-styles', get_stylesheet_uri(), 'style' );


    }

    public function jsb_enqueue_scripts(){

        wp_enqueue_script( 'jsb-bootstrap-js', JSB_JS . 'bootstrap.min.js', array( 'jquery' ), '', true );

    }


}