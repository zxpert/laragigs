

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
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
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="<?php echo e(asset('images/no-image.png')); ?>"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2"><?php echo e($listing->title); ?></h3>
                        <div class="text-xl font-bold mb-4"><?php echo e($listing->company); ?></div>
                        <ul class="flex">
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">API</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i><?php echo e($listing->location); ?>

                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Job Description
                            </h3>
                            <div class="text-lg space-y-6">
                               <?php echo e($listing->description); ?>


                                <a
                                    href="mailto:<?php echo e($listing->email); ?>"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a>

                                <a
                                    href="https://test.com"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> <?php echo e($listing->website); ?> </a>
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
<?php endif; ?>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zxpert\Documents\laravel\laragigs\resources\views/listing.blade.php ENDPATH**/ ?>