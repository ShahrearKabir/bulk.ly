<?php $__env->startSection('content'); ?>

<div class="container-fluid app-body">
    
    
    <h3>History Page 
        <div id="app_root">
            <history></history>
        </div>
    </h3>

    <div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr>
                        <th>Group Name</th> 
                        <th>Group Type</th> 
                        <th>Account Name</th> 
                        <th>Post Text</th> 
                        <th>Time</th> 
                    </tr> 
				</thead> 
				<tbody> 
                    <?php $__currentLoopData = $bufferPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bufferPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <tr>
                            
                            <!-- <td>>  <?php echo e($bufferPost); ?> </td> -->
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<script>
    
</script>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>