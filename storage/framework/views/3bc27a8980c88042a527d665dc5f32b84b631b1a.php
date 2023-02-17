<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
  <header><a href=<?php echo e(route('home')); ?>>True Games</a>
    <div>
      <a href=<?php echo e(route('aboutUs')); ?>>О нас</a>
      <a href=<?php echo e(route('catalog')); ?>>Каталог</a>
      <a href=<?php echo e(route('whereToFind')); ?>>Где нас найти?</a>
    </div>
    <div>
    <?php if(!auth()->user()): ?>
    <a href=<?php echo e(route('register')); ?>>Зарегистрироваться</a> <a href=<?php echo e(route('login')); ?>>Войти</a>
    <?php else: ?>
    <a href=<?php echo e(route('logout')); ?>>Выйти</a>
    <?php endif; ?>
  </div></header>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\OpenServer\domains\localhost\resources\views/layout.blade.php ENDPATH**/ ?>