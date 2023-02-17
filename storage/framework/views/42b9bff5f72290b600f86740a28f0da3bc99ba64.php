

<?php $__env->startSection('title', 'Логин'); ?>

<?php $__env->startSection('content'); ?>
<h1><span>Авторизация</span></h1>
            <div>
                <form action="/login" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" id="login" name="login" placeholder="Ваш Логин" required>
                    <input type="password" id="password" name="password" placeholder="Ваш Пароль" required>

                    <button class="submit">Войти</button>
                </form>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/login.blade.php ENDPATH**/ ?>