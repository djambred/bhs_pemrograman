<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'inlinePrefix' => false,
    'inlineSuffix' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'inlinePrefix' => false,
    'inlineSuffix' => false,
]); ?>
<?php foreach (array_filter(([
    'inlinePrefix' => false,
    'inlineSuffix' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<input
    <?php echo e($attributes->class([
            'fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6',
            // A fully transparent white background color is used
            // instead of transparent to fix a Safari bug
            // where the date/time input "placeholder" colors too dark.
            //
            // https://github.com/filamentphp/filament/issues/7087
            'bg-white/0',
            'ps-0' => $inlinePrefix,
            'ps-3' => ! $inlinePrefix,
            'pe-0' => $inlineSuffix,
            'pe-3' => ! $inlineSuffix,
        ])); ?>

/>
<?php /**PATH /var/www/html/vendor/filament/support/src/../resources/views/components/input/index.blade.php ENDPATH**/ ?>