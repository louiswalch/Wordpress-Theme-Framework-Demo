<div class="module">
    <h4>Test Module 3</h4>
    <? if (get_module_var('image')): ?>
        <?=IMAGE()->classes('dolly_2')->img(get_module_var('image')); ?>
    <? endif; ?>
</div>