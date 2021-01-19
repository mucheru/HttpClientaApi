<h1>User Data</h1>
<table border="2"> 
    <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Profile Photo</td>
    </tr>

<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <td><?php echo e($data['id']); ?></td>
            <td><?php echo e($data['first_name'].$data['last_name']); ?></td>
            <td><?php echo e($data['email']); ?></td>
            <td><img src="<?php echo e($data['avatar']); ?>"></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH /home/steve/Http_client/resources/views/users.blade.php ENDPATH**/ ?>