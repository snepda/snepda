

<?php $__env->startSection('title', 'Регистрация'); ?>

<?php $__env->startSection('content'); ?>
<h1><span>Регистрация</span></h1>

<div>
    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" id="name" name="name" placeholder="Ваше имя" pattern="^[А-Яа-яЁё\s-]+$" required>
        <input type="text" id="surname" name="surname" placeholder="Ваше фамилия" pattern="^[А-Яа-яЁё\s-]+$" required>
        <input type="text" id="patronymic" name="patronymic" placeholder="Ваше отчество" pattern="^[А-Яа-яЁё\s-]+$">
        <input type="text" id="login" name="login" placeholder="Ваш Логин" pattern="^[a-zA-Z.]+$" required>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
        <input type="password" id="password" name="password" placeholder="Ваш Пароль" required>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение Пароля" required>
        <div><input type="checkbox" id="check" name="check" required><label for="check">Согласие с правилами регистрации</label></div>
        <button class="submit">Зарегистрироваться</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/register.blade.php ENDPATH**/ ?>