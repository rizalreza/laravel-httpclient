<?php $__env->startSection('content'); ?>
	<div class="container">
		<form class="" action="<?php echo e(route('post.store')); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Post title">
				
			</div>
			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" class="form-control">
					<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>				
			</div>

			<div class="form-group">
				<label for="">Content</label>
				<textarea name="content" rows="5" cols="89" class="form-control" placeholder="Post content"></textarea>
				
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save" name="">
			</div>
			
		</form>
		
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>