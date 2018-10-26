<?php

// ---------------------------------------------------------------------------
// THEME FRAMEWORK CONFIGURATION SETTINGS

// CSS and JS asset files. Paths are relaive to `asset/` directory.
CONFIG()->set('frontend/assets/css',        ['css/site.min.css']);
CONFIG()->set('frontend/assets/css_print',  ['css/print.min.css']);
CONFIG()->set('frontend/assets/js',         ['js/vendor.min.js', 'js/site.min.js']);

// Custom Wordpress query parameters.
CONFIG()->set('frontend/query_params',      ['hello', 'test']);

// Login page custom CSS file.
CONFIG()->set('dashboard/login/css', 'css/dashboard_login.css');

// Dashboard custom CSS file.
CONFIG()->set('dashboard/css', 'css/dashboard.css');

// Dashboard custom metabox. 
CONFIG()->set('dashboard/metabox', [
    ['Hello', 'hello.html'],
    ['Image Specifications', 'imagesizes.html'],
]);

// Dashboard settings for Content Editor.
CONFIG()->set('dashboard/editor/customize', true);
CONFIG()->set('dashboard/editor/css', 'css/dashboard_editor.css');
CONFIG()->set('dashboard/editor/buttons_1', ['formatselect', 'bold', 'undo', 'redo', 'removeformat']);
// CONFIG()->set('dashboard/editor/buttons_2', ['']);
CONFIG()->set('dashboard/editor/formats', 'Paragraph=p;Large Heading=h2;Small Heading=h3');

// Dashboard footer credit.
CONFIG()->set('dashboard/footer_credit', '<a href="http://www.louiswalch.com" style="text-decoration: none; color: inherit;" target="_blank">Website by LOUIS ♥</a>');

// Disable `posts` functionality.
CONFIG()->set('support/posts', false);

// Automatically load custom post type declarations.
CONFIG()->set('custom_types/autoload', true);
