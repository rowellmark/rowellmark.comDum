<?php

namespace Headless\App;

class Enqueue{


    /**
     * Constructor.
     *
     * @since 1.0.0
     *
     * @access public
    */

    public function construct(){
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ], 11 );
    }

    /**
     * Enqueue.
     *
     * @since 1.0.0
     *
     * @access public
    */
    public function enqueue(){

        /* Enqueue Styles */
        wp_enqueue_style('app_styles', get_stylesheet_directory_uri() . '/assets/css/app.min.css');

        /* Enqueue Scripts */
        wp_enqueue_style('app_scripts', get_stylesheet_directory_uri() . '/assets/js/app.min.js');

    }


}   
$enqueue = new Enqueue();
$enqueue->construct();