<?php
// отключение уведомления об обновлении плагина ACF PRO
function filter_plugin_updates($value)
{
    unset($value->response['advanced-custom-fields-pro/acf.php']);
    return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');


// подключение стилей
function add_styles_for_specific_template()
{
    if (is_page_template('specialist-item.php')) {
        wp_enqueue_style('specialist-item', get_template_directory_uri() . '/css/specialist-item.css');
    }
}

add_action('wp_enqueue_scripts', 'add_styles_for_specific_template');
