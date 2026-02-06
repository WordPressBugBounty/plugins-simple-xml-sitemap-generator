<?php

if (! defined('ABSPATH')) exit; // Exit if accessed directly

// die when the file is called directly
if (! defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Array mit den Namen der Optionen
$options = array(
    'sxmlsg_kategorien',
    'sxmlsg_cpt',

);

// Schleife zum Löschen der Optionen
foreach ($options as $option_name) {
    delete_option($option_name);
    delete_site_option($option_name);
}
