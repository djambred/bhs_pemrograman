<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'tag' => 'td',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'tag' => 'td',
]); ?>
<?php foreach (array_filter(([
    'tag' => 'td',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<<?php echo e($tag); ?>

    <?php echo e($attributes->class(['fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3'])); ?>

>
    <?php echo e($slot); ?>

</<?php echo e($tag); ?>>
<?php /**PATH /var/www/html/vendor/filament/tables/src/../resources/views/components/cell.blade.php ENDPATH**/ ?>