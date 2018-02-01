<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	

        	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($post->title); ?>


                    <div class="pull-right">
                        <a href="<?php echo e(route('post.edit', $post)); ?>" class="btn btn-xs btn-default">Edit</a>
                        <form class="" action="<?php echo e(route('post.destroy', $post)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>

                <div class="panel-body">
                    <p><?php echo e($post->content); ?></p>
                        
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>