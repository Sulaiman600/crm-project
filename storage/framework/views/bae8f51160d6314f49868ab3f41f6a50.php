<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['isMultiRow' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['isMultiRow' => false]); ?>
<?php foreach (array_filter((['isMultiRow' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <?php if (isset($component)) { $__componentOriginal53a6a59aff92302e5d442819eff9928e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53a6a59aff92302e5d442819eff9928e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.toolbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53a6a59aff92302e5d442819eff9928e)): ?>
<?php $attributes = $__attributesOriginal53a6a59aff92302e5d442819eff9928e; ?>
<?php unset($__attributesOriginal53a6a59aff92302e5d442819eff9928e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53a6a59aff92302e5d442819eff9928e)): ?>
<?php $component = $__componentOriginal53a6a59aff92302e5d442819eff9928e; ?>
<?php unset($__componentOriginal53a6a59aff92302e5d442819eff9928e); ?>
<?php endif; ?>

    <div class="flex">
        <div class="w-full">
            <div class="table-responsive box-shadow grid w-full overflow-hidden rounded border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">
                <?php if (isset($component)) { $__componentOriginalc107096d39100b5f7264e4f2087676a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc107096d39100b5f7264e4f2087676a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.head','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc107096d39100b5f7264e4f2087676a5)): ?>
<?php $attributes = $__attributesOriginalc107096d39100b5f7264e4f2087676a5; ?>
<?php unset($__attributesOriginalc107096d39100b5f7264e4f2087676a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc107096d39100b5f7264e4f2087676a5)): ?>
<?php $component = $__componentOriginalc107096d39100b5f7264e4f2087676a5; ?>
<?php unset($__componentOriginalc107096d39100b5f7264e4f2087676a5); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal601d211589286a2faeaa4f7f9edf9405 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal601d211589286a2faeaa4f7f9edf9405 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.body','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal601d211589286a2faeaa4f7f9edf9405)): ?>
<?php $attributes = $__attributesOriginal601d211589286a2faeaa4f7f9edf9405; ?>
<?php unset($__attributesOriginal601d211589286a2faeaa4f7f9edf9405); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal601d211589286a2faeaa4f7f9edf9405)): ?>
<?php $component = $__componentOriginal601d211589286a2faeaa4f7f9edf9405; ?>
<?php unset($__componentOriginal601d211589286a2faeaa4f7f9edf9405); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\dbms_p\packages\Webkul\Admin\src/resources/views/components/shimmer/datagrid/index.blade.php ENDPATH**/ ?>