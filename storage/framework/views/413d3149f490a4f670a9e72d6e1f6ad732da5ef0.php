<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	

            <table class="table" >
           
                  <thead>
                    <tr>
                      <th><center>Nama</center></th>
                      <th><center>NIP</center></th>
                      <th><center>Jabatan ID</center></th>
                      <th><center>Jabatan</center></th>
                      <th><center>Jobdesk</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <?php $__currentLoopData = $contentjoin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td style="width:20%"><?php echo e($data->nama); ?></td>
                      <td style="width:15%"><?php echo e($data->nip); ?></td>
                      <td style="width:20%"><?php echo e($data->jabatan_id); ?></td> 
                      <td style="width:15%"><?php echo e($data->jabatan); ?></td> 
                      <td style="width:25%"><?php echo e($data->jobdesk); ?></td> 
                      
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>