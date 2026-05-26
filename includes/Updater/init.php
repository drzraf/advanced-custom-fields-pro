<?php

// ACF bloat, auto-update and phone-home "features" we never asked for
if (! function_exists('acf_pro_is_license_active')) {
    function acf_pro_is_license_active()
    {
        return true;
    }
}

if (! function_exists('acf_pro_is_license_expired')) {
    function acf_pro_is_license_expired()
    {
        return false;
    }
}

if (! function_exists('acf_pro_get_license')) {
    function acf_pro_get_license()
    {
        return ['url' => 'foo'];
    }
}

if (! function_exists('acf_pro_get_license_status')) {
    function acf_pro_get_license_status()
    {
        return ['name' => 'bar', 'status' => 'baz', 'expiry' => 'blah'];
    }
}

if (! function_exists('acf_pro_is_updates_page_visible')) {
    function acf_pro_is_updates_page_visible()
    {
        return false;
    }
}
