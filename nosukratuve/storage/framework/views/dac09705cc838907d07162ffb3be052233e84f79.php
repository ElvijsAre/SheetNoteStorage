<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Visi sludinājumi!</div>

                <div class="panel-body">
                    <?php $__empty_1 = true; foreach($posts as $post): $__empty_1 = false; ?>
                    <div class="well">
                        <div class="media">
                            <h4 class="media-heading"><?php echo e($post->title); ?></h4>
                            <p> 
                                <span style="float: left"><?php echo e($post->category->name); ?></span>
                                <span style="float: right"> Autors: <?php echo e($post->user->name); ?></span>
                            </p>
                            <br>
                            <p><?php echo e($post->text); ?></p>
                            <h6>
                                <span style="float: left"><?php echo e($post->phone); ?> | <?php echo e($post->email); ?></span>
                            </h6>
                            <br>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyhicon-calendar"><?php echo e($post->created_at->diffForHumans()); ?></i></span></li>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; if ($__empty_1): ?>
                    <p>Nav atrasti ieraksti</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>