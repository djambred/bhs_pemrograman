<?php
    use Filament\Support\Enums\Alignment;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions' => [],
    'alignment' => Alignment::Start,
    'fullWidth' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions' => [],
    'alignment' => Alignment::Start,
    'fullWidth' => false,
]); ?>
<?php foreach (array_filter(([
    'actions' => [],
    'alignment' => Alignment::Start,
    'fullWidth' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    if (is_array($actions)) {
        $actions = array_filter(
            $actions,
            fn ($action): bool => $action->isVisible(),
        );
    }

    if (! $alignment instanceof Alignment) {
        $alignment = filled($alignment) ? (Alignment::tryFrom($alignment) ?? $alignment) : null;
    }

    $hasActions = false;

    $hasSlot = ! \Filament\Support\is_slot_empty($slot);
    $actionsAreHtmlable = $actions instanceof \Illuminate\Contracts\Support\Htmlable;

    if ($hasSlot) {
        $hasActions = true;
    } elseif ($actionsAreHtmlable) {
        $hasActions = ! \Filament\Support\is_slot_empty($actions);
    } else {
        $hasActions = filled($actions);
    }
?>

<!--[if BLOCK]><![endif]--><?php if($hasActions): ?>
    <div
        <?php echo e($attributes->class([
                'fi-ac gap-3',
                'flex flex-wrap items-center' => ! $fullWidth,
                match ($alignment) {
                    Alignment::Start, Alignment::Left => 'justify-start',
                    Alignment::Center => 'justify-center',
                    Alignment::End, Alignment::Right => 'flex-row-reverse',
                    Alignment::Between, Alignment::Justify => 'justify-between',
                    default => $alignment,
                } => ! $fullWidth,
                'grid grid-cols-[repeat(auto-fit,minmax(0,1fr))]' => $fullWidth,
            ])); ?>

    >
        <!--[if BLOCK]><![endif]--><?php if($hasSlot): ?>
            <?php echo e($slot); ?>

        <?php elseif($actionsAreHtmlable): ?>
            <?php echo e($actions); ?>

        <?php else: ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($action); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /var/www/html/vendor/filament/support/src/../resources/views/components/actions.blade.php ENDPATH**/ ?>