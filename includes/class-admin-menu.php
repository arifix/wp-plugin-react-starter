<?php

class WPRS_Admin_Menu
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'wrps_create_admin_menu']);
    }

    public function wrps_create_admin_menu()
    {
        $capability = 'manage_options';
        $slug = 'wrps';

        add_menu_page(
            __('WRPS', $slug),
            __('WRPS', $slug),
            $capability,
            $slug,
            [$this, 'wrps_menu_page_template'],
            'dashicons-tide'
        );
    }

    public function wrps_menu_page_template()
    {
        echo '<div id="wrps-app"></div>';
    }
}
new WPRS_Admin_Menu();
