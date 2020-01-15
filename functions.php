<?php

/** 
 * Functions
 * @package	justbootstrap
 * @author Nick Courage
 * @copyright 2019, virtuswebmedia
 * @link https://www.virtuswebmedia.com
 * @since Version 1.0.0
*/

define( 'JSB_CSS', get_template_directory_uri() . '/css/' );

define( 'JSB_JS', get_template_directory_uri() . '/js/' );

class JustBootstrap{

    private static $instance;

    public static function instance(){

        if( ! isset( self::$instance ) && ! ( self::$instance instanceof JustBootstrap ) ){

            self::$instance = new self;

        }

        return self::$instance;

    }

    public function __construct(){

        $this->includes();

        $this->setup();

    }

    public function includes(){

        $this->files = array(

            'template/class-template.php'

        );

        foreach( $this->files as $file ){

            require_once( get_template_directory() . '/inc/' . $file );
        
        }

    }

    private function setup(){

        $this->template = new JustBootstrap_Template(); 

    }

}

function justbootstrap(){

    return JustBootstrap::instance();

}

justbootstrap();