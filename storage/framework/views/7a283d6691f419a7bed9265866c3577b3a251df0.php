<?php echo e(Form::open(['route' => ['projects.expenses.store',$project->id],'id' => 'create_expense','enctype' => 'multipart/form-data'])); ?>

<div class="row">
    <div class="col-12 col-md-12">
        <div class="form-group">
            <?php echo e(Form::label('name', __('Name'),['class' => 'form-control-label'])); ?>

            <?php echo e(Form::text('name', null, ['class' => 'form-control','required'=>'required'])); ?>

        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-group">
            <?php echo e(Form::label('date', __('Date'),['class' => 'form-control-label'])); ?>

            <?php echo e(Form::date('date', null, ['class' => 'form-control'])); ?>

        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-group">
            <?php echo e(Form::label('amount', __('Amount'),['class' => 'form-control-label'])); ?>

            <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo e($project->currency); ?></span>
                </div>
                <?php echo e(Form::number('amount', null, ['class' => 'form-control','required' => 'required','min' => '0'])); ?>

            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="form-group">
            <?php echo e(Form::label('task_id', __('Task'),['class' => 'form-control-label'])); ?>

            <select class="form-control" name="task_id" id="task_id">
                <option value="0"></option>
                <?php $__currentLoopData = $project->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($task->id); ?>"><?php echo e($task->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="col-12 col-md-12">
        <div class="form-group">
            <?php echo e(Form::label('description', __('Description'),['class' => 'form-control-label'])); ?>

            <small class="form-text text-muted mb-2 mt-0"><?php echo e(__('This textarea will autosize while you type')); ?></small>
            <?php echo e(Form::textarea('description', null, ['class' => 'form-control','rows' => '1','data-toggle' => 'autosize'])); ?>

        </div>
    </div>

    <div class="col-12 col-md-12">
        <div class="form-group">
            <?php echo e(Form::label('attachment', __('Attachment'),['class' => 'form-control-label'])); ?>

            <input type="file" name="attachment" id="attachment" class="custom-input-file"/>
            <label for="attachment">
                <i class="fa fa-upload"></i>
                <span><?php echo e(__('Choose a file…')); ?></span>
            </label>
        </div>
    </div>
</div>

<div class="text-right">
    <?php echo e(Form::button(__('Save'), ['type' => 'submit','class' => 'btn btn-sm btn-primary rounded-pill'])); ?>

    <button type="button" class="btn btn-sm btn-secondary rounded-pill" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH C:\Users\Frederick\Desktop\UCA\main_file\ProjectManagmentSystem\resources\views/expenses/create.blade.php ENDPATH**/ ?>