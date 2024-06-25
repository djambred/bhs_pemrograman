<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'method' => 'post',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'method' => 'post',
]); ?>
<?php foreach (array_filter(([
    'method' => 'post',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form
    method="<?php echo e($method); ?>"
    x-data="{ isProcessing: false }"
    x-on:submit="if (isProcessing) $event.preventDefault()"
    x-on:form-processing-started="isProcessing = true"
    x-on:form-processing-finished="isProcessing = false"
    <?php echo e($attributes->class(['fi-form grid gap-y-6'])); ?>

>
    <?php echo e($slot); ?>

</form>
<?php /**PATH /var/www/html/vendor/filament/filament/src/../resources/views/components/form/index.blade.php ENDPATH**/ ?>