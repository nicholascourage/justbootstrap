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

        $this->jsb_includes();

        $this->jsb_setup();

    }

    public function jsb_includes(){

        $this->files = array(

            'template/class-template.php'

        );

        foreach( $this->files as $file ){

            require_once( get_template_directory() . '/inc/' . $file );
        
        }

    }

    private function jsb_setup(){

        $this->template = new JustBootstrap_Template(); 

        add_action( 'after_setup_theme', array( $this, 'jsb_theme_setup') );

    }

    public function jsb_theme_setup(){

        // register nav menus
		register_nav_menus( array(
        
            'primary'       => __( 'Primary Menu', 'justbootstrap' )

        ) );

    }    

}

function justbootstrap(){

    return JustBootstrap::instance();

}

justbootstrap();