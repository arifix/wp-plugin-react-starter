<?php

class WRPS_Rest_Routes
{
    public function __construct()
    {
        add_action('rest_api_init', [$this, 'wrps_create_rest_routes']);
    }

    public function wrps_create_rest_routes()
    {
        register_rest_route('wrps-shop/v1', '/settings', [
            'methods' => 'GET',
            'callback' => [$this, 'wrps_get_settings'],
            'permission_callback' => [$this, 'wrps_get_settings_permission']
        ]);

        register_rest_route('wrps-shop/v1', '/settings', [
            'methods' => 'POST',
            'callback' => [$this, 'wrps_save_settings'],
            'permission_callback' => [$this, 'wrps_save_settings_permission']
        ]);
    }

    public function wrps_get_settings()
    {
        $settings = get_option('wrps_shop_settings');
        $response = [
            'settings' => $settings
        ];

        return rest_ensure_response($response);
    }

    public function wrps_get_settings_permission()
    {
        return true;
    }

    public function wrps_save_settings($req)
    {
        $settings = sanitize_text_field($req['settings']);

        update_option('wrps_shop_settings', $settings);

        return ['message' => 'Setting Saved Successfully'];
    }

    public function wrps_save_settings_permission()
    {
        return current_user_can('manage_options');
    }
}

new WRPS_Rest_Routes();
