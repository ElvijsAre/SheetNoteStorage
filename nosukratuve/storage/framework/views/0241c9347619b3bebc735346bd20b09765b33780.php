<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/mekle')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input type="title" class="form-control" name="title" value="<?php echo e(old('title')); ?>">

                                <?php if($errors->has('title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('Text') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Text</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="text">

                                <?php if($errors->has('text')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('text')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-post"></i>Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>