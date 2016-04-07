<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sludinājums</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/post')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Virsraksts</label>

                            <div class="col-md-6">
                                <input type="title" class="form-control" name="title" value="<?php echo e(old('title')); ?>">

                                <?php if($errors->has('title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('catagory') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Kategorija</label>

                            <div class="col-md-6">
                                <select type="category" class="form-control" name="category" value="<?php echo e(old('category')); ?>">
                                    <?php foreach($categories as $category): ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <?php if($errors->has('category')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('category')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-pasts</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Telefons</label>

                            <div class="col-md-6">
                                <input type="phone" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>">

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group<?php echo e($errors->has('text') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Teksts</label>

                            <div class="col-md-6">
                                <textarea  type="text" class="form-control" name="text"></textarea> 

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
                                    <i class="fa fa-btn fa-post"></i>Iesūtīt
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