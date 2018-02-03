<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	

            <table class="table" >
           
                  <thead>
                    <tr>
                      <th><center>Nama</center></th>
                      <th><center>NIP</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>No HP</center></th>
                      <th><center>Email</center></th>
                      <th><center>Jabatan Id</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td style="width:15%"><?php echo e($data->nama); ?></td>
                      <td style="width:15%"><?php echo e($data->nip); ?></td>
                      <td style="width:20%"><?php echo e($data->alamat); ?></td>
                      <td style="width:10%"><?php echo e($data->hp); ?></td>
                      <td style="width:15%"><?php echo e($data->email); ?></td> 
                      <td style="width:15%"><?php echo e($data->jabatan_id); ?></td> 
                      <td style="width:5%"><center>
                       
                        <a href="<?php echo e(URL('post/' . $data->id . '/edit')); ?>" class="btn btn-primary">Update</a>

                      </center></td>
                      <td style="width:6%"><center>
                            <form onclick="return confirm('Are you sure?')" action="<?php echo e(route('post.destroy', [$data->id])); ?>" method="post">
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