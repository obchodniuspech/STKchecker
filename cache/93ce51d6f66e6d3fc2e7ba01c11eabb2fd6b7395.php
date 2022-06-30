<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Upravit vozidlo</h1>
<form action="<?php echo e($router->generate('save.car')); ?>" method="post">
	<?php echo e($form->hidden('id', $car['id'])); ?>

	<?php echo e($form->required = '*'); ?>

	<?php echo e($form->text('name', 'Název vozidla', $car['name'], 'name', 'placeholder="Název vozidla"')); ?>

	<?php echo e($form->text('rz', 'RZ vozidla', $car['rz'], 'rz', 'placeholder="Registrační značka"')); ?>

	<?php echo e($form->date('stk', 'Platnost STK', $car['stk'], 'stk', 'placeholder="Platnost STK"')); ?>

	<?php echo e($form->submit_button('Ulož vozidlo','submit')); ?>


</form>

<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/michalpesat/Documents/GitHub/STKchecker/view/cars/edit.blade.php ENDPATH**/ ?>