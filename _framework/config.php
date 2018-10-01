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
CONFIG()->set('dashboard/login/css', 'css/login.css');

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
CONFIG()->set('dashboard/editor/buttons_1', ['formatselect', 'bold']);
CONFIG()->set('dashboard/editor/buttons_2', ['undo','redo']);
CONFIG()->set('dashboard/editor/formats', 'Paragraph=p;Large Heading=h2;Small Heading=h3');

// Dashboard footer credit.
CONFIG()->set('dashboard/footer_credit', '<a href="http://www.forofficeuseonly.com" style="text-decoration: none; color: inherit;" target="_blank">Website by For Office Use Only</a>');

// Disable `posts` functionality.
CONFIG()->set('posts', false);
