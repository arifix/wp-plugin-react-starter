<?php

class WRPS_Shortcodes
{
    public function __construct()
    {
        add_shortcode('tonic_sample_shortcode', [$this, 'wrps_sample_shortcode']);
        add_action('wp_ajax_get_wrps_sample_shortcode', [$this, 'wrps_sample_shortcode_ajax']);
        add_action('wp_ajax_nopriv_get_wrps_sample_shortcode', [$this, 'wrps_sample_shortcode_ajax']);
    }

    public function wrps_sample_shortcode($atts)
    {
        $atts = shortcode_atts(array(
            'fruit' => 'apple',
            'flower' => 'rose'
        ), $atts, 'wrps-shop');

        return var_dump($atts);
    }

    public function wrps_sample_shortcode_ajax()
    {
        return var_dump($_REQUEST);
    }
}

new WRPS_Shortcodes();
