<?php get_header(); ?>

    <? INCLUDES()->data('hello', 'Hello World!')->show('test'); ?>

    <? INCLUDES()->cache(true)->show('time'); ?>

    <div class="block">
        <h2>SVG TEST (Inline)</h2>
        <?=SVG()->show('icon-check'); ?>
    </div>

    <div class="block">
        <h2>SVG TEST (Image)</h2>
        <?=SVG()->img('icon-check', ['class'=>'check']); ?>
    </div>

    <div class="block">
        <h2>FEATURED IMAGE TEST</h2>
        <?=IMAGE()->classes('dolly_1')->img(get_post_thumbnail_id()); ?>
    </div>

    <div class="block">
        <h2>IMAGE TEST (IMG)</h2>
        <?=IMAGE()->classes('dolly_1')->img(get_field('image')); ?>
        <?=IMAGE()->classes('dolly_2')->img(get_field('image')); ?>
        <?=IMAGE()->wrap('dolly_2_wrapper')->classes('dolly_2')->img(get_field('image')); ?>
        <?=IMAGE()->classes('dolly_1')->img(get_field('image'), false, true); ?>
    </div>

    <div class="block">
        <h2>IMAGE TEST (IMG Alpha)</h2>
        <?=IMAGE()->classes('dolly_3 lazy')->alpha(true)->img(get_field('image')); ?>
        <p>Even though SRC is initially alpha, this will appear because of browser processing srcset.</p>
    </div>

    <div class="block">
        <h2>IMAGE TEST (DIV)</h2>
        <?=IMAGE()->classes('dolly_4 lazy')->div(get_field('image')); ?>
        <?=IMAGE()->wrap('dolly_2_wrapper')->classes('dolly_4 lazy')->div(get_field('image')); ?>
        <p>You won't see anyting, no lazyload JS installed. View source.</p>
        <p>For fading on a lazy load DIV, you should wrap it in container sized correctly.</p>
    </div>

    <div class="block">
        <h2>MODULES TEST</h2>
        <?=MODULES()->auto('content_modules');?>
    </div>

    <br/><br/><br/><br/>

    <div class="block">
        <h2>DEBUG: Current Environment</h2>
        <? pr(detect_environment()); ?>
    </div>
    <div class="block">
        <h2>DEBUG: Current Configuration</h2>
        <? pr(CONFIG()->dump()); ?>
    </div>

<?php get_footer(); ?>