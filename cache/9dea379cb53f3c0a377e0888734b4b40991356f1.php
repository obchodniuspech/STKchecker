<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<a href="<?php echo e($router->generate('new.car')); ?>"><button class="btn btn-primary mb-3">Přidat vozidlo</button></a>
	<table class="table table-striped">
	<thead>
		<th>Název</th>
		<th>Registrační značka</th>
		<th>Platnost STK</th>
	</thead>
	<tbody>	
		<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><a href="<?php echo e($router->generate('get.car', ['id' => $car['id']])); ?>"><?php echo e($car['name']); ?></a></td>
				<td><?php echo e($car['rz']); ?></td>
				<td><?php echo e($car['stk']); ?></td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	
	</table>


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/michalpesat/Documents/GitHub/STKchecker/view/carsAll.blade.php ENDPATH**/ ?>