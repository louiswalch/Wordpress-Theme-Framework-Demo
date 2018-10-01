<?php

// Make sure the Theme Framework plugin is present. Required by this theme.
if (!is_admin() && !defined('HELLO_DIR')) exit('Error. This theme is meant to be used with the <a href="https://github.com/louiswalch/Wordpress-Theme-Framework">Theme Framework</a>.');


// ---------------------------------------------------------------------------
// Add Custom Post Types & Taxonomies.

require_all_files(FRAMEWORK_DIR . '/types/');
