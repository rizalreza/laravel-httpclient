<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	

            <table class="table" >
           
                  <thead>
                    <tr>
                      <th><center>Jabatan</center></th>
                      <th><center>Jobdesk</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <?php $__currentLoopData = $contentjabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datajabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td style="width:20%"><?php echo e($datajabatan->jabatan); ?></td>
                      <td style="width:25%"><?php echo e($datajabatan->jobdesk); ?></td>
                      <td style="width:6%"><center>
                       
                        <a href="<?php echo e(URL('jabatan/' . $datajabatan->id . '/edit')); ?>" class="btn btn-primary">Update</a>

                      </center></td>
                      <td style="width:6%"><center>
                            <form onclick="return confirm('Are you sure?')" action="<?php echo e(route('jabatan.destroy', [$datajabatan->id])); ?>" method="post">
                             <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                       </center></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>