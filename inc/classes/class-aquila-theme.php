<?php

/**
 * Bootstraps the theme (adds all the basic functionality of the theme)
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->setup_hooks();
        Assets::get_instance();
        
    }
    protected function setup_hooks()
    {
        //actions and filters

        /**
         * Actions.
         */
        add_action('after_setup_theme', [$this,'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height'=>100,
            'width'=>400,
            'flex-height'=>true,
            'flex-width'=>true,
            'unlink-homepage-logo' => false,
        ]);
    }

}
