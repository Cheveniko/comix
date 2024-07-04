<?php
function comixEnqueueFiles()
{
    // wp_enqueue_script('day-countdown', get_template_directory_uri() . '/js/day-countdown.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('button-scroll', get_template_directory_uri() . '/js/button-scroll.js', array('jquery'), '1.0.0', true);
};
add_action('wp_enqueue_scripts', 'comixEnqueueFiles');

function comixFeatures()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'comixFeatures');

function comixSimplifyCheckoutVirtual($fields)
{

    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);

    add_filter('woocommerce_enable_order_notes_field', '__return_false');
    return $fields;
}

add_filter('woocommerce_checkout_fields', 'comixSimplifyCheckoutVirtual');

function comixBacsLabels($translation, $text, $domain)
{
    if ($domain == 'woocommerce') {
        switch ($text) {
            case 'Sort code':
                $translation = 'Tipo de cuenta';
                break;
            case 'IBAN':
                $translation = 'Titular de la cuenta';
                break;
            case 'BIC':
                $translation = 'RUC';
                break;
        }
    }

    return $translation;
}

add_filter('gettext', 'comixBacsLabels', 10, 3);

add_theme_support('woocommerce');
