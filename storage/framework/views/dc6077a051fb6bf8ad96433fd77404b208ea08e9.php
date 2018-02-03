<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row center">
            <div class="col-sm-6 col-sm-offset-3">
            <form class="" action="<?php echo e(url('/post/update')); ?>/<?php echo e($content->id); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="hidden" class="form-control" name="_method" value="PUT">
                    <input type="text" class="form-control" name="nama" value="<?php echo e($content->nama); ?>">
                </div>

                <div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" class="form-control" name="nip" value="<?php echo e($content->nip); ?>">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo e($content->alamat); ?>">
                </div>

                <div class="form-group">
                    <label for="">HP</label>
                    <input type="text" class="form-control" name="hp" value="<?php echo e($content->hp); ?>">
                </div>
                    
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo e($content->email); ?>">
                </div>

                <div class="form-group">
                    <label for="">Id Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_id" value="<?php echo e($content->jabatan_id); ?>">
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