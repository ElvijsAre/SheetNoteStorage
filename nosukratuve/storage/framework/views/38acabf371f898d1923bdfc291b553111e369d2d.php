<?php $__env->startSection('content'); ?>

 
        <table class="table table-bordered table-hover" >
            <thead>
                <th>Visraksts</th>
                <th>Kategorija</th>
                <th>Teksts</th>
                <th>Lietotajs</th>
                <th>Tel. numurs</th>
                <th>E-pasts</th>
                <th>Tiešais laiks</th>
                <th>Pirms</th>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->category->name); ?></td>
                    <td><?php echo e($post->text); ?></td>
                    <td><?php echo e($post->user->name); ?></td>
                    <td><?php echo e($post->phone); ?></td>
                    <td><?php echo e($post->email); ?></td>
                    <td><?php echo e($post->created_at); ?></td>
                    <td><?php echo e($post->created_at->diffForHumans()); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>