<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row center">
            <div class="col-sm-6 col-sm-offset-3">
            <form class="" action="<?php echo e(url('/jabatan/update')); ?>/<?php echo e($contentjabatan->id); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="hidden" class="form-control" name="_method" value="PUT">
                    <input type="text" class="form-control" name="jabatan" value="<?php echo e($contentjabatan->jabatan); ?>">
                </div>

                <div class="form-group">
                    <label for="">Jobdesk</label>
                    <input type="text" class="form-control" name="jobdesk" value="<?php echo e($contentjabatan->jobdesk); ?>">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save" name="">
                     
                </div>
                
            </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>