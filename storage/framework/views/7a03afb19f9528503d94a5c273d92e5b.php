<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['listing']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['listing']); ?>
<?php foreach (array_filter((['listing']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')); ?>" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/listings/<?php echo e($listing->id); ?>"><?php echo e($listing->title); ?></a>
      </h3>
      <div class="text-xl font-bold mb-4"><?php echo e($listing->company); ?></div>
      <?php if (isset($component)) { $__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-tags','data' => ['tagsCsv' => $listing->tags]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('listing-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tagsCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing->tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3)): ?>
<?php $attributes = $__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3; ?>
<?php unset($__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3)): ?>
<?php $component = $__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3; ?>
<?php unset($__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3); ?>
<?php endif; ?>
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

      </div>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?><?php /**PATH C:\Users\Zxpert\Documents\laravel\laragigs\resources\views/components/listing-card.blade.php ENDPATH**/ ?>