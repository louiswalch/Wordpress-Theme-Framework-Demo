<?php

// ---------------------------------------------------------------------------
// ENVIRONMENT-SPECIFIC CONFIGURATION SETTINGS
// These will override automatically based on development/staging/production environment.

// CSS and JS asset files for `development` environment. 
CONFIG()->set('frontend/assets/css', ['css/site.css']);
CONFIG()->set('frontend/assets/css_print', ['css/print.css']);
CONFIG()->set('frontend/assets/js', [
    '/js/libs/_greensock/TweenMax.min.js',
    '/js/libs/_greensock/plugins/ScrollToPlugin.min.js',
    '/js/libs/_scrollmagic/minified/ScrollMagic.min.js',
    '/js/libs/_scrollmagic/minified/plugins/jquery.ScrollMagic.min.js',
    '/js/libs/_scrollmagic/minified/plugins/animation.gsap.min.js',
    '/js/libs/_scrollmagic/minified/plugins/debug.addIndicators.min.js',
    '/js/libs/_jquery-visible-master/jquery.visible.min.js',
    '/js/libs/_imagesloaded/imagesloaded.pkgd.min.js',
    '/js/libs/_slick/slick.min.js',
    '/js/libs/_nprogress/nprogress-min.js',
    '/js/libs/_fastclick/fastclick-min.js',
    '/js/libs/_lazysizes/lazysizes.min.js',
    '/js/libs/_lazysizes/plugins/unveilhooks/ls.unveilhooks.min.js',
    '/js/libs/_instafeed/instafeed.min.js',
    '/js/libs/jquery.accordion.js',
    '/js/libs/_ajax-cross-origin/jquery.ajax-cross-origin.min.js',
    '/js/libs/jquery.matchHeight.js',
    '/js/libs/_touch.swipe/jquery.touchSwipe.min.js',
    '/js/libs/_packery/packery.pkgd.min.js',
    '/js/libs/_soundcloud/api.js',
    '/js/imagify.js',        
    '/js/widgets.js',
    '/js/effectify.js',
    '/js/libs/_truncate/truncate.min.js',
    '/js/scripts.js',
    ]);
