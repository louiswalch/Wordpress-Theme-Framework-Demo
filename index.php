<?php get_header(); ?>

    <? INCLUDES()->data('hello', 'Passing in some data.')->show('test'); ?>

    <div>
        <p>Test SVG:</p>
        <?=SVG()->show('icon-check'); ?>
    </div>

    <? pr(detect_environment(), 'Environment'); ?>

    <? pr(CONFIG()->dump(), 'Site Configuration'); ?>

<?php get_footer(); ?>