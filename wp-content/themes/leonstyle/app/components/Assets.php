<?php

namespace Leonstyle\components;

use Leonstyle\traits\Singleton;

/**
 * Assets
 */
class Assets
{
    use Singleton;

    /**
     * construct
     */
    protected function __construct()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'register_styles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'register_scripts'] );
    }

    /**
     * register_styles
     *
     * @return void
     */
    public function register_styles()
    {
//         wp_register_style( 'bootstrap-style', get_theme_file_uri('/assets/bootstrap/css/bootstrap.min.css'), array(), false, 'all');
//         wp_register_style( 'slick-style', get_theme_file_uri('/assets/slick/slick.css'), array(), false, 'all');
//         wp_register_style( 'slick-theme-style', get_theme_file_uri('/assets/slick/slick-theme.css'), array(), false, 'all');
//         wp_register_style( 'leon-style', get_theme_file_uri('/assets/leonstyle/css/leon.css'), array(), wp_get_theme()->get( 'Version' ), 'all');
        
        //new
        wp_register_style( 'leon-style-1', get_theme_file_uri('/assets/leonstyle/css/reset.min.css'), array(), false, 'all');
        wp_register_style( 'leon-style-2', get_theme_file_uri('/assets/leonstyle/css/bootstrap.min.css'), array(), false, 'all');
        wp_register_style( 'leon-style-3', get_theme_file_uri('/assets/leonstyle/css/bootstrap-adjust.min.css'), array(), false, 'all');
        wp_register_style( 'leon-style-4', get_theme_file_uri('/assets/leonstyle/plugin/slick/slick-theme.css'), array(), false, 'all');
        wp_register_style( 'leon-style-5', get_theme_file_uri('/assets/leonstyle/plugin/slick/slick.css'), array(), false, 'all');
        wp_register_style( 'leon-style-6', get_theme_file_uri('/assets/leonstyle/plugin/lightbox/lightbox.min.css'), array(), false, 'all');
        wp_register_style( 'leon-style-7', get_theme_file_uri('/assets/leonstyle/css/common.css'), array(), false, 'all');
        wp_register_style( 'leon-style-8', get_theme_file_uri('/assets/leonstyle/css/nav.css'), array(), false, 'all');
        wp_register_style( 'leon-style-9', get_theme_file_uri('/assets/leonstyle/css/room.css'), array(), false, 'all');

//         wp_enqueue_style('bootstrap-style');
//         wp_enqueue_style('slick-style');
//         wp_enqueue_style('slick-theme-style');
//         wp_enqueue_style('leon-style');
        //new
        wp_enqueue_style('leon-style-1');
        wp_enqueue_style('leon-style-2');
        wp_enqueue_style('leon-style-3');
        wp_enqueue_style('leon-style-4');
        wp_enqueue_style('leon-style-5');
        wp_enqueue_style('leon-style-6');
        wp_enqueue_style('leon-style-7');
        wp_enqueue_style('leon-style-8');
        wp_enqueue_style('leon-style-9');
    }

    /**
     * register_scripts
     *
     * @return void
     */
    public function register_scripts()
    {
//         wp_register_script( 'bootstrap-script', get_theme_file_uri( '/assets/bootstrap/js/bootstrap.min.js' ), array('jquery'), false, true );
//         wp_register_script( 'slick-script', get_theme_file_uri( '/assets/slick/slick.min.js' ), array('bootstrap-script'), false, true );
//         wp_register_script( 'leon-script', get_theme_file_uri( '/assets/leonstyle/js/leon.js' ), array('slick-script'), filemtime(get_template_directory( '/assets/leonstyle/js/leon.js' )), true );
		
		wp_register_script( 'type-kick', 'https://use.typekit.net/fya1swr.js', array(), false, true );
        wp_register_script( 'jquery-min', get_theme_file_uri( '/assets/leonstyle/js/jquery-2.2.4.min.js' ), array('type-kick'), false, true );
        wp_register_script( 'slick-script', get_theme_file_uri( '/assets/leonstyle/plugin/slick/slick.min.js' ), array('jquery-min'), false, true );
//         wp_register_script( 'slick-script', get_theme_file_uri( '/assets/leonstyle/plugin/slick/slick.min.js' ), array('jquery-min'), false, true );
        wp_register_script( 'leon-script', get_theme_file_uri( '/assets/leonstyle/js/lightbox.min.js' ), array('slick-script'), filemtime(get_template_directory( '/assets/leonstyle/js/lightbox.min.js' )), true );
		
		wp_register_script( 'leon-script-1', get_theme_file_uri( '/assets/leonstyle/js/common.js' ), array('leon-script'), filemtime(get_template_directory( '/assets/leonstyle/js/common.js' )), true );
		wp_register_script( 'leon-script-2', get_theme_file_uri( '/assets/leonstyle/js/room.js' ), array('leon-script-1'), filemtime(get_template_directory( '/assets/leonstyle/js/room.js' )), true );
    
//         wp_enqueue_script('bootstrap-script');
//         wp_enqueue_script('slick-script');
//         wp_enqueue_script('leon-script');
//         wp_enqueue_script('type-kick');
        wp_enqueue_script('type-kick');
        wp_enqueue_script('jquery-min');
        wp_enqueue_script('slick-script');
        wp_enqueue_script('leon-script');
		
        wp_enqueue_script('leon-script-1');
        wp_enqueue_script('leon-script-2');
    }
}