
<?php if (isset($component)) { $__componentOriginal8001c520f4b7dcb40a16cd3b411856d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Page Title -->
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('admin::app.products.create.title'); ?>
     <?php $__env->endSlot(); ?>

    <?php echo view_render_event('admin.products.create.form.before'); ?>


    <?php if (isset($component)) { $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['action' => route('admin.products.store'),'method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.products.store')),'method' => 'POST']); ?>
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-between rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300">
                <div class="flex flex-col gap-2">
                    <?php echo view_render_event('admin.products.create.breadcrumbs.before'); ?>


                    <!-- Breadcrumbs -->
                    <?php if (isset($component)) { $__componentOriginal477735b45b070062c5df1d72c43d48f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal477735b45b070062c5df1d72c43d48f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.breadcrumbs.index','data' => ['name' => 'products.create']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'products.create']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal477735b45b070062c5df1d72c43d48f5)): ?>
<?php $attributes = $__attributesOriginal477735b45b070062c5df1d72c43d48f5; ?>
<?php unset($__attributesOriginal477735b45b070062c5df1d72c43d48f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal477735b45b070062c5df1d72c43d48f5)): ?>
<?php $component = $__componentOriginal477735b45b070062c5df1d72c43d48f5; ?>
<?php unset($__componentOriginal477735b45b070062c5df1d72c43d48f5); ?>
<?php endif; ?>

                    <?php echo view_render_event('admin.products.create.breadcrumbs.after'); ?>

                    
                    <div class="text-xl font-bold dark:text-white">
                        <?php echo app('translator')->get('admin::app.products.create.title'); ?>
                    </div>
                </div>

                <div class="flex items-center gap-x-2.5">
                    <div class="flex items-center gap-x-2.5">
                        <?php echo view_render_event('admin.products.create.save_button.before'); ?>


                        <!-- Create button for Product -->
                        <?php if(bouncer()->hasPermission('settings.user.groups.create')): ?>
                            <button
                                type="submit"
                                class="primary-button"
                            >
                                <?php echo app('translator')->get('admin::app.products.create.save-btn'); ?>
                            </button>
                        <?php endif; ?>

                        <?php echo view_render_event('admin.products.create.save_button.after'); ?>

                    </div>
                </div>
            </div>

            <div class="flex gap-2.5 max-xl:flex-wrap">
                <!-- Left sub-component -->
                <div class="flex flex-1 flex-col gap-2 max-xl:flex-auto">
                    <div class="box-shadow rounded-lg border border-gray-200 bg-white p-4 dark:border-gray-800 dark:bg-gray-900">
                        <p class="mb-4 text-base font-semibold text-gray-800 dark:text-white">
                            <?php echo app('translator')->get('admin::app.products.create.general'); ?>
                        </p>

                        <?php echo view_render_event('admin.products.create.attributes.before'); ?>


                        <?php if (isset($component)) { $__componentOriginal454997736aeabbf070177223ed7ce374 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal454997736aeabbf070177223ed7ce374 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.attributes.index','data' => ['customAttributes' => app('Webkul\Attribute\Repositories\AttributeRepository')->findWhere([
                                'entity_type' => 'products',
                                ['code', 'NOTIN', ['price', 'quantity']],
                            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::attributes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['custom-attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(app('Webkul\Attribute\Repositories\AttributeRepository')->findWhere([
                                'entity_type' => 'products',
                                ['code', 'NOTIN', ['price', 'quantity']],
                            ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal454997736aeabbf070177223ed7ce374)): ?>
<?php $attributes = $__attributesOriginal454997736aeabbf070177223ed7ce374; ?>
<?php unset($__attributesOriginal454997736aeabbf070177223ed7ce374); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal454997736aeabbf070177223ed7ce374)): ?>
<?php $component = $__componentOriginal454997736aeabbf070177223ed7ce374; ?>
<?php unset($__componentOriginal454997736aeabbf070177223ed7ce374); ?>
<?php endif; ?>

                        <?php echo view_render_event('admin.products.create.attributes.after'); ?>

                    </div>
                </div>

                <!-- Right sub-component -->
                <div class="flex w-[360px] max-w-full flex-col gap-2 max-sm:w-full">
                    <?php echo view_render_event('admin.products.create.accordion.before'); ?>


                    <?php if (isset($component)) { $__componentOriginale6717d929d3edd1e7d9927d6c11ccc02 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6717d929d3edd1e7d9927d6c11ccc02 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.accordion.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('header', null, []); ?> 
                            <?php echo view_render_event('admin.products.create.accordion.header.before'); ?>


                            <div class="flex items-center justify-between">
                                <p class="p-2.5 text-base font-semibold text-gray-800 dark:text-white">
                                    <?php echo app('translator')->get('admin::app.products.create.price'); ?>
                                </p>
                            </div>

                            <?php echo view_render_event('admin.products.create.accordion.header.after'); ?>

                         <?php $__env->endSlot(); ?>

                         <?php $__env->slot('content', null, []); ?> 
                            <?php echo view_render_event('admin.products.create.accordion.content.attributes.before'); ?>


                            <?php if (isset($component)) { $__componentOriginal454997736aeabbf070177223ed7ce374 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal454997736aeabbf070177223ed7ce374 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.attributes.index','data' => ['customAttributes' => app('Webkul\Attribute\Repositories\AttributeRepository')->findWhere([
                                    'entity_type' => 'products',
                                    ['code', 'IN', ['price', 'quantity']],
                                ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::attributes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['custom-attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(app('Webkul\Attribute\Repositories\AttributeRepository')->findWhere([
                                    'entity_type' => 'products',
                                    ['code', 'IN', ['price', 'quantity']],
                                ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal454997736aeabbf070177223ed7ce374)): ?>
<?php $attributes = $__attributesOriginal454997736aeabbf070177223ed7ce374; ?>
<?php unset($__attributesOriginal454997736aeabbf070177223ed7ce374); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal454997736aeabbf070177223ed7ce374)): ?>
<?php $component = $__componentOriginal454997736aeabbf070177223ed7ce374; ?>
<?php unset($__componentOriginal454997736aeabbf070177223ed7ce374); ?>
<?php endif; ?>

                            <?php echo view_render_event('admin.products.create.accordion.content.attributes.after'); ?>

                         <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6717d929d3edd1e7d9927d6c11ccc02)): ?>
<?php $attributes = $__attributesOriginale6717d929d3edd1e7d9927d6c11ccc02; ?>
<?php unset($__attributesOriginale6717d929d3edd1e7d9927d6c11ccc02); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6717d929d3edd1e7d9927d6c11ccc02)): ?>
<?php $component = $__componentOriginale6717d929d3edd1e7d9927d6c11ccc02; ?>
<?php unset($__componentOriginale6717d929d3edd1e7d9927d6c11ccc02); ?>
<?php endif; ?>

                    <?php echo view_render_event('admin.products.create.accordion.before'); ?>

                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $attributes = $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $component = $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>

    <?php echo view_render_event('admin.products.create.form.after'); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1)): ?>
<?php $attributes = $__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1; ?>
<?php unset($__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8001c520f4b7dcb40a16cd3b411856d1)): ?>
<?php $component = $__componentOriginal8001c520f4b7dcb40a16cd3b411856d1; ?>
<?php unset($__componentOriginal8001c520f4b7dcb40a16cd3b411856d1); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dbms_p\packages\Webkul\Admin\src/resources/views/products/create.blade.php ENDPATH**/ ?>