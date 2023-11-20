<?php

class WRPS_Enqueues
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', [$this, 'wrps_admin_enqueue']);
        add_action('wp_enqueue_scripts', [$this, 'wrps_frontend_enqueue']);
    }

    public function wrps_admin_enqueue()
    {
        wp_enqueue_script('wrps-admin-build', plugin_dir_url(__FILE__) . '../build/index.js', ['jquery', 'wp-element'], wp_rand(), true);
        wp_localize_script('wrps-admin-build', 'wrpsApp', [
            'apiUrl' => home_url('/wp-json'),
            'nonce' => wp_create_nonce('wp_rest'),
        ]);

        wp_enqueue_style('wrps-admin-style', plugin_dir_url(__FILE__) . '../build/index.css');
    }

    public function wrps_frontend_enqueue()
    {
        //wp_enqueue_script('wrps-frontend-script', plugin_dir_url(__FILE__) . '../assets/js/script.js', ['jquery'], '1.0.0', true);
        //wp_enqueue_style('wrps-frontend-style', plugin_dir_url(__FILE__) . '../assets/css/style.css');
    }
}

new WRPS_Enqueues();
