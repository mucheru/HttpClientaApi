<h1>Data list</h1>
<?php $__currentLoopData = $profiledata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <ul>
        <li>
        <h3><?php echo e($profile['title']); ?></h3><br>
        <?php echo e($profile['body']); ?>


        </li>

    </ul>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/steve/Http_client/resources/views/profiles.blade.php ENDPATH**/ ?>