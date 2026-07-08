<?php if(isset($attribute)): ?>
    <v-price-component
        :attribute="<?php echo e(json_encode($attribute)); ?>"
        :validations="'<?php echo e($validations); ?>'"
        :value="<?php echo e(json_encode(old($attribute->code) ?? $value)); ?>"
    >
    </v-price-component>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('014acb74-7eaf-4773-836f-201f8ea84a00')): $__env->markAsRenderedOnce('014acb74-7eaf-4773-836f-201f8ea84a00');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-price-component-template"
    >
        <?php if (isset($component)) { $__componentOriginal53af403f6b2179a3039d488b8ab2a267 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53af403f6b2179a3039d488b8ab2a267 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text',':id' => 'attribute.code',':value' => 'value',':name' => 'attribute.code',':rules' => 'validations',':label' => 'attribute.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text',':id' => 'attribute.code',':value' => 'value',':name' => 'attribute.code',':rules' => 'validations',':label' => 'attribute.name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53af403f6b2179a3039d488b8ab2a267)): ?>
<?php $attributes = $__attributesOriginal53af403f6b2179a3039d488b8ab2a267; ?>
<?php unset($__attributesOriginal53af403f6b2179a3039d488b8ab2a267); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53af403f6b2179a3039d488b8ab2a267)): ?>
<?php $component = $__componentOriginal53af403f6b2179a3039d488b8ab2a267; ?>
<?php unset($__componentOriginal53af403f6b2179a3039d488b8ab2a267); ?>
<?php endif; ?>
    </script>

    <script type="module">
        app.component('v-price-component', {
            template: '#v-price-component-template',

            props: ['validations', 'attribute', 'value'],
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\xampp\htdocs\dbms_p\packages\Webkul\Admin\src/resources/views/components/attributes/edit/price.blade.php ENDPATH**/ ?>