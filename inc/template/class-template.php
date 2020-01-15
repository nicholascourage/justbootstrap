<?php

/**
 * Class Template
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

 class JustBootstrap_Template{

    public function __construct(){

        $this->includes();

        $this->setup();

    }

    public function includes(){

        $files = array(

            'class-template-assets.php'
        
        );

        foreach( $files as $file ){

            require_once( get_template_directory() . '/inc/template/' . $file );

        }

    }

    public function setup(){

        $this->assets = new JustBootstrap_Template_Assets();

    }


 }