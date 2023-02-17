

<?php $__env->startSection('title', 'Каталог'); ?>

<?php $__env->startSection('content'); ?>
        <div>
          <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div style="max-width: 250px;">
              <h1><?php echo e($product->name); ?></h1>
              <img style="max-width: 100%; height: auto" src="<?php echo e(url('/images', $product->imageUrl)); ?>" alt="">
              <p><?php echo e($product->price); ?></p>
              <a href="<?php echo e(route('product', $product->id)); ?>">see</a>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>no items</p>
          <?php endif; ?>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/catalog.blade.php ENDPATH**/ ?>