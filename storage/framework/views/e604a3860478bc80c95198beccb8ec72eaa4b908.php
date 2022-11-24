

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Site Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .doc-img>a,
        .theme-color>a {
            position: relative;
            width: 35px;
            height: 25px;
            border-radius: 3px;
            display: inline-block;
            background: #f8f9fd;
            overflow: hidden;
            box-shadow: 0 1px 2px rgb(0 0 0 / 28%);
        }
    </style>
<?php $__env->stopPush(); ?>

<?php
$logo = \App\Models\Utility::get_file('logo/');
$path_imgs = \App\Models\Utility::get_file('/');
?>
<?php
if ($settings['color']) {
    $color = $settings['color'];
}
?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-4 order-lg-2">
            <div class="card">
                <div class="list-group list-group-flush" id="tabs">
                    <div data-href="#tabs-9" class="list-group-item text-primary">
                        <div class="media">
                            <i class="fas fa-cog pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Color Setting')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('Set owner color')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-1" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-cog pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Invoice Setting')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('Detail of your Invoice.')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-4" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-money-check-alt pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Payment Settings')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('Details about your Payment setting information')); ?></p>
                            </div>
                        </div>
                    </div>

                    <div data-href="#tabs-2" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-file pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('My Billing Detail')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('This detail will show in your Invoice.')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-3" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-percent pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Tax')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('You can manage your tax rate here.')); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php if(Auth::user()->type == 'owner'): ?>
                        <div data-href="#tabs-10" class="list-group-item">
                            <div class="media">
                                <i class="fas fa-cog pt-1"></i>
                                <div class="media-body ml-3">
                                    <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Contract type')); ?></a>
                                    <p class="mb-0 text-sm"><?php echo e(__('You can manage your Contract type here.')); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div data-href="#tabs-5" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-stopwatch pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Tracker')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('You can manage your tracker interval time here.')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-6" class="list-group-item">
                        <div class="media">
                            <i class="fas fa-stopwatch pt-1"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Zoom Meeting')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('You can manage your Meeting setting Information.')); ?></p>
                            </div>
                        </div>
                    </div>
                    <div data-href="#tabs-7" class="list-group-item">
                        <div class="media">
                            <i class="fab fa-slack"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Slack Notification')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('You can manage your slack setting information.')); ?></p>
                            </div>
                        </div>
                    </div>

                    <div data-href="#tabs-8" class="list-group-item">
                        <div class="media">
                            <i class="fa fa-paper-plane"></i>
                            <div class="media-body ml-3">
                                <a href="#" class="stretched-link h6 mb-1"><?php echo e(__('Telegram Notification')); ?></a>
                                <p class="mb-0 text-sm"><?php echo e(__('You can manage your telegram setting information.')); ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8 order-lg-1"> 

            <div id="tabs-9" class="tabs-card">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Basic Setting')); ?></h5>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'], 'id' => 'update_setting', 'enctype' => 'multipart/form-data'])); ?>


                        <div class="row">

                            <div class="col-4">
                                <h6 class="">
                                    <i data-feather="credit-card" class="me-2"></i><?php echo e(__('Primary color settings')); ?>

                                </h6>
                                <hr class="my-2" />
                                <div class="theme-color themes-color">


                                    <a href="#!" class="theme-2 <?php echo e($color == '#6fd943' ? 'active_color' : ''); ?>"
                                        data-value="#6fd943" onclick="check_theme('#6fd943')"></a>
                                    <input type="radio" class="theme_color " name="color" value="#6fd943"
                                        style="display: none;">

                                    <a href="#!" class="theme-1 <?php echo e($color == '#a83f85' ? 'active_color' : ''); ?>"
                                        data-value="#a83f85" onclick="check_theme('#a83f85')"></a>
                                    <input type="radio" class="theme_color " name="color" value="#a83f85"
                                        style="display: none;">

                                    <a href="#!" class="theme-3 <?php echo e($color == 'theme-3' ? 'active_color' : ''); ?>"
                                        data-value="theme-3" onclick="check_theme('#449fc6')"></a>
                                    <input type="radio" class="theme_color " name="color" value="#449fc6"
                                        style="display: none;">

                                    <a href="#!" class="theme-4 <?php echo e($color == '#51459d' ? 'active_color' : ''); ?>"
                                        data-value="theme-4" onclick="check_theme('#51459d')"></a>
                                    <input type="radio" class="theme_color " name="color" value="#51459d"
                                        style="display: none;">

                                </div>
                            </div>


                        </div>
                        <hr />

                        <div class="text-right">
                            <?php echo e(Form::hidden('from', 'site_setting')); ?>

                            <button type="submit"
                                class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
            
            <div id="tabs-1" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Invoice Setting')); ?></h5>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'], 'id' => 'update_setting', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('light_logo', __('Light Logo'), ['class' => 'form-control-label'])); ?>

                                    <input type="file" name="light_logo" id="light_logo" class="custom-input-file"
                                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" />
                                    <label for="light_logo">
                                        <i class="fa fa-upload"></i>
                                        <span><?php echo e(__('Choose a file…')); ?></span>
                                    </label>
                                    <?php $__errorArgs = ['light_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="light_logo" role="alert">
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-5">
                                <?php if(!empty($details['light_logo'])): ?>
                                    <a href="<?php echo e($path_imgs.$details['light_logo']); ?>" target="_blank">
                                        <img src="<?php echo e($path_imgs.$details['light_logo']); ?>" id="blah"
                                            class="img_setting" />
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e($logo.'logo.png'); ?>" target="_blank">
                                        <img src="<?php echo e($logo.'logo.png'); ?>" class="img_setting" />
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('dark_logo', __('Dark Logo'), ['class' => 'form-control-label'])); ?>

                                    <input type="file" name="dark_logo" id="dark_logo" class="custom-input-file"
                                        onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])" />
                                    <label for="dark_logo">
                                        <i class="fa fa-upload"></i>
                                        <span><?php echo e(__('Choose a file…')); ?></span>
                                    </label>
                                    <?php $__errorArgs = ['dark_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="dark_logo" role="alert">
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-5">
                                <?php if(!empty($details['dark_logo'])): ?>
                                    <a href="<?php echo e($path_imgs.$details['dark_logo']); ?>" target="_blank">
                                        <img src="<?php echo e($path_imgs.$details['dark_logo']); ?>" id="blah1"
                                            class="img_setting" />
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e($logo.'logo.png'); ?>" target="_blank">
                                        <img src="<?php echo e($logo.'logo.png'); ?>" id="blah1"
                                            class="img_setting" />
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('invoice_footer_title', __('Invoice Footer Title'), ['class' => 'form-control-label'])); ?>

                                    <input type="text" name="invoice_footer_title" id="invoice_footer_title"
                                        class="form-control" value="<?php echo e($details['invoice_footer_title']); ?>" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('invoice_footer_note', __('Invoice Footer Note'), ['class' => 'form-control-label'])); ?>

                                    <small
                                        class="form-text text-muted mb-2 mt-0"><?php echo e(__('This textarea will autosize while you type')); ?></small>
                                    <?php echo e(Form::textarea('invoice_footer_note', $details['invoice_footer_note'], ['class' => 'form-control', 'rows' => '1', 'data-toggle' => 'autosize'])); ?>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-3">
                                <a href="<?php echo e(route('invoice.template.setting')); ?>"
                                    class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Invoice Template Setting')); ?></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-right pt-3">
                                <?php echo e(Form::hidden('from', 'invoice_setting')); ?>

                                <button type="submit"
                                    class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>

            <div id="tabs-2" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('My Billing Detail')); ?></h5>
                        <small><?php echo e(__('This detail will show in your Invoice.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'], 'id' => 'update_billing_setting', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('address', __('Address'), ['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('address', $details['address'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('city', __('City'), ['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('city', $details['city'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('state', __('State'), ['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('state', $details['state'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('zipcode', __('Zip/Post Code'), ['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('zipcode', $details['zipcode'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('country', __('Country'), ['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('country', $details['country'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo e(Form::label('telephone', __('Telephone'), ['class' => 'form-control-label'])); ?>

                                    <?php echo e(Form::text('telephone', $details['telephone'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <?php echo e(Form::hidden('from', 'billing_setting')); ?>

                            <button type="submit"
                                class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>

            <div id="tabs-3" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-0"><?php echo e(__('Tax')); ?></h6>
                            </div>
                            <div class="col-auto">
                                <div class="actions">
                                    <a href="#" class="action-item" data-url="<?php echo e(route('taxes.create')); ?>"
                                        data-ajax-popup="true" data-size="md" data-title="<?php echo e(__('Add Tax')); ?>">
                                        <i class="fas fa-plus"></i>
                                        <span class="d-sm-inline-block"><?php echo e(__('Add')); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Rate %')); ?></th>
                                        <th class="w-25"><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(Auth::user()->taxes->count() > 0): ?>
                                        <?php $__currentLoopData = Auth::user()->taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($tax->name); ?></td>
                                                <td><?php echo e($tax->rate); ?></td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#" class="action-item px-2"
                                                            data-url="<?php echo e(route('taxes.edit', $tax)); ?>"
                                                            data-ajax-popup="true" data-size="md"
                                                            data-title="<?php echo e(__('Edit')); ?>" data-toggle="tooltip"
                                                            data-original-title="<?php echo e(__('Edit')); ?>">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="action-item text-danger px-2"
                                                            data-toggle="tooltip"
                                                            data-original-title="<?php echo e(__('Delete')); ?>"
                                                            data-confirm="<?php echo e(__('Are You Sure?')); ?>|<?php echo e(__('This action can not be undone. Do you want to continue?')); ?>"
                                                            data-confirm-yes="document.getElementById('delete-tax-<?php echo e($tax->id); ?>').submit();">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                    <?php echo Form::open(['method' => 'DELETE', 'route' => ['taxes.destroy', $tax->id], 'id' => 'delete-tax-' . $tax->id]); ?>

                                                    <?php echo Form::close(); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <th scope="col" colspan="3">
                                                <h6 class="text-center"><?php echo e(__('No Taxes Found.')); ?></h6>
                                            </th>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php if(Auth::user()->type == 'owner'): ?>
                <div id="tabs-10" class="tabs-card d-none">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="mb-0"><?php echo e(__('Contract type')); ?></h6>
                                </div>
                                <div class="col-auto">
                                    <div class="actions">
                                        <a href="#" class="action-item" data-url="<?php echo e(route('contract.create')); ?>"
                                            data-ajax-popup="true" data-size="md"
                                            data-title="<?php echo e(__('Add Contract Type')); ?>">
                                            <i class="fas fa-plus"></i>
                                            <span class="d-sm-inline-block"><?php echo e(__('Add')); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th><?php echo e(__('Name')); ?></th>
                                            <th class="w-25"><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if(Auth::user()->contracttype->count() > 0): ?>
                                            <?php $__currentLoopData = Auth::user()->contracttype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>

                                                    <td><?php echo e($contract->name); ?></td>

                                                    <td>
                                                        <div class="actions">
                                                            <a href="#" class="action-item px-2"
                                                                data-url="<?php echo e(route('contract.edit', $contract)); ?>"
                                                                data-ajax-popup="true" data-size="md"
                                                                data-title="<?php echo e(__('Edit')); ?>" data-toggle="tooltip"
                                                                data-original-title="<?php echo e(__('Edit')); ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="#" class="action-item text-danger px-2"
                                                                data-toggle="tooltip"
                                                                data-original-title="<?php echo e(__('Delete')); ?>"
                                                                data-confirm="<?php echo e(__('Are You Sure?')); ?>|<?php echo e(__('This action can not be undone. Do you want to continue?')); ?>"
                                                                data-confirm-yes="document.getElementById('delete-contract-<?php echo e($contract->id); ?>').submit();">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                        <?php echo Form::open([
                                                            'method' => 'DELETE',
                                                            'route' => ['contract.destroy', $contract->id],
                                                            'id' => 'delete-contract-' . $contract->id,
                                                        ]); ?>

                                                        <?php echo Form::close(); ?>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <th scope="col" colspan="3">
                                                    <h6 class="text-center"><?php echo e(__('No Contract Found.')); ?></h6>
                                                </th>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div id="tabs-4" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Payment Settings')); ?></h5>
                        <small><?php echo e(__('This detail will use for collect payment on invoice from clients. On invoice client will find out pay now button based on your below configuration.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'], 'id' => 'update_setting'])); ?>

                        <div class="row">
                            <div class="col-12">
                                <div id="payment-gateways" class="accordion accordion-spaced">
                                    <!-- Stripe -->
                                    <div class="card">
                                        <div class="card-header py-4" id="stripe-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-stripe" aria-expanded="false"
                                            aria-controls="collapse-stripe">
                                            <h6 class="mb-0"><i class="far fa-credit-card mr-3"></i><?php echo e(__('Stripe')); ?>

                                            </h6>
                                        </div>
                                        <div id="collapse-stripe" class="collapse" aria-labelledby="stripe-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Stripe')); ?></h5>
                                                        <small><?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="enable_stripe" id="enable_stripe"
                                                                <?php echo e(isset($payment_detail['enable_stripe']) && $payment_detail['enable_stripe'] == 'on' ? 'checked' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="enable_stripe"><?php echo e(__('Enable Stripe')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group">
                                                            <?php echo e(Form::label('stripe_key', __('Stripe Key'), ['class' => 'form-control-label'])); ?>

                                                            <?php echo e(Form::text('stripe_key', isset($payment_detail['stripe_key']) && !empty($payment_detail['stripe_key']) ? $payment_detail['stripe_key'] : '', ['class' => 'form-control', 'placeholder' => __('Stripe Key')])); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group">
                                                            <?php echo e(Form::label('stripe_secret', __('Stripe Secret'), ['class' => 'form-control-label'])); ?>

                                                            <?php echo e(Form::text('stripe_secret', isset($payment_detail['stripe_secret']) && !empty($payment_detail['stripe_secret']) ? $payment_detail['stripe_secret'] : '', ['class' => 'form-control', 'placeholder' => __('Stripe Secret')])); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Paypal -->
                                    <div class="card">
                                        <div class="card-header py-4" id="paypal-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-paypal" aria-expanded="false"
                                            aria-controls="collapse-paypal">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Paypal')); ?></h6>
                                        </div>
                                        <div id="collapse-paypal" class="collapse" aria-labelledby="paypal-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('PayPal')); ?></h5>
                                                        <small><?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="enable_paypal" id="enable_paypal"
                                                                <?php echo e(isset($payment_detail['enable_paypal']) && $payment_detail['enable_paypal'] == 'on' ? 'checked' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="enable_paypal"><?php echo e(__('Enable Paypal')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pb-4">
                                                        <label class="paypal-label form-control-label"
                                                            for="paypal_mode"><?php echo e(__('Paypal Mode')); ?></label> <br>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(!isset($payment_detail['paypal_mode']) || empty($payment_detail['paypal_mode']) || $payment_detail['paypal_mode'] == 'sandbox' ? 'active' : ''); ?>">
                                                                <input type="radio" name="paypal_mode" value="sandbox"
                                                                    <?php echo e(!isset($payment_detail['paypal_mode']) || empty($payment_detail['paypal_mode']) || $payment_detail['paypal_mode'] == 'sandbox' ? 'checked' : ''); ?>><?php echo e(__('Sandbox')); ?>

                                                            </label>
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['paypal_mode']) && $payment_detail['paypal_mode'] == 'live' ? 'active' : ''); ?>">
                                                                <input type="radio" name="paypal_mode" value="live"
                                                                    <?php echo e(isset($payment_detail['paypal_mode']) && $payment_detail['paypal_mode'] == 'live' ? 'checked' : ''); ?>><?php echo e(__('Live')); ?>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group">
                                                            <?php echo e(Form::label('paypal_client_id', __('Client ID'), ['class' => 'form-control-label'])); ?>

                                                            <?php echo e(Form::text('paypal_client_id', isset($payment_detail['paypal_client_id']) ? $payment_detail['paypal_client_id'] : '', ['class' => 'form-control', 'placeholder' => __('Client ID')])); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group">
                                                            <?php echo e(Form::label('paypal_secret_key', __('Secret Key'), ['class' => 'form-control-label'])); ?>

                                                            <?php echo e(Form::text('paypal_secret_key', isset($payment_detail['paypal_secret_key']) ? $payment_detail['paypal_secret_key'] : '', ['class' => 'form-control', 'placeholder' => __('Secret Key')])); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Paystack -->
                                    <div class="card">
                                        <div class="card-header py-4" id="paystack-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-paystack" aria-expanded="false"
                                            aria-controls="collapse-paystack">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Paystack')); ?></h6>
                                        </div>
                                        <div id="collapse-paystack" class="collapse" aria-labelledby="paystack-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Paystack')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_paystack_enabled" id="is_paystack_enabled"
                                                                <?php echo e(isset($payment_detail['is_paystack_enabled']) && $payment_detail['is_paystack_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_paystack_enabled"><?php echo e(__('Enable Paystack')); ?></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paypal_client_id"><?php echo e(__('Public Key')); ?></label>
                                                            <input type="text" name="paystack_public_key"
                                                                id="paystack_public_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['paystack_public_key']) ? $payment_detail['paystack_public_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Public Key')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paystack_secret_key"><?php echo e(__('Secret Key')); ?></label>
                                                            <input type="text" name="paystack_secret_key"
                                                                id="paystack_secret_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['paystack_secret_key']) ? $payment_detail['paystack_secret_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Secret Key')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FLUTTERWAVE -->
                                    <div class="card">
                                        <div class="card-header py-4" id="flutterwave-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-flutterwave" aria-expanded="false"
                                            aria-controls="collapse-flutterwave">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Flutterwave')); ?></h6>
                                        </div>
                                        <div id="collapse-flutterwave" class="collapse"
                                            aria-labelledby="flutterwave-payment" data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Flutterwave')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_flutterwave_enabled" id="is_flutterwave_enabled"
                                                                <?php echo e(isset($payment_detail['is_flutterwave_enabled']) && $payment_detail['is_flutterwave_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_flutterwave_enabled"><?php echo e(__('Enable Flutterwave')); ?></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paypal_client_id"><?php echo e(__('Public Key')); ?></label>
                                                            <input type="text" name="flutterwave_public_key"
                                                                id="flutterwave_public_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['flutterwave_public_key']) ? $payment_detail['flutterwave_public_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Public Key')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paystack_secret_key"><?php echo e(__('Secret Key')); ?></label>
                                                            <input type="text" name="flutterwave_secret_key"
                                                                id="flutterwave_secret_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['flutterwave_secret_key']) ? $payment_detail['flutterwave_secret_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Secret Key')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Razorpay -->
                                    <div class="card">
                                        <div class="card-header py-4" id="razorpay-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-razorpay" aria-expanded="false"
                                            aria-controls="collapse-razorpay">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Razorpay')); ?></h6>
                                        </div>
                                        <div id="collapse-razorpay" class="collapse" aria-labelledby="razorpay-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Razorpay')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_razorpay_enabled" id="is_razorpay_enabled"
                                                                <?php echo e(isset($payment_detail['is_razorpay_enabled']) && $payment_detail['is_razorpay_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_razorpay_enabled"><?php echo e(__('Enable Razorpay')); ?></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paypal_client_id"><?php echo e(__('Public Key')); ?></label>
                                                            <input type="text" name="razorpay_public_key"
                                                                id="razorpay_public_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['razorpay_public_key']) ? $payment_detail['razorpay_public_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Public Key')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paystack_secret_key"><?php echo e(__('Secret Key')); ?></label>
                                                            <input type="text" name="razorpay_secret_key"
                                                                id="razorpay_secret_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['razorpay_secret_key']) ? $payment_detail['razorpay_secret_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Secret Key')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mercado Pago-->
                                    <div class="card">
                                        <div class="card-header py-4" id="mercado_pago-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-mercado_pago" aria-expanded="false"
                                            aria-controls="collapse-mercado_pago">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Mercado Pago')); ?></h6>
                                        </div>
                                        <div id="collapse-mercado_pago" class="collapse"
                                            aria-labelledby="mercado_pago-payment" data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Mercado Pago')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="hidden" name="is_mercado_enabled"
                                                                value="off">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_mercado_enabled" id="is_mercado_enabled"
                                                                <?php echo e(isset($payment_detail['is_mercado_enabled']) && $payment_detail['is_mercado_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_mercado_enabled"><?php echo e(__('Enable Mercado Pago')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-4">
                                                        <label class="coingate-label form-control-label"
                                                            for="mercado_mode"><?php echo e(__('Mercado Mode')); ?></label> <br>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['mercado_mode']) && $payment_detail['mercado_mode'] == 'sandbox' ? 'active' : ''); ?>">
                                                                <input type="radio" name="mercado_mode" value="sandbox"
                                                                    <?php echo e((isset($payment_detail['mercado_mode']) && $payment_detail['mercado_mode'] == '') || (isset($payment_detail['mercado_mode']) && $payment_detail['mercado_mode'] == 'sandbox') ? 'checked="checked"' : ''); ?>><?php echo e(__('Sandbox')); ?>

                                                            </label>
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['mercado_mode']) && $payment_detail['mercado_mode'] == 'live' ? 'active' : ''); ?>">
                                                                <input type="radio" name="mercado_mode" value="live"
                                                                    <?php echo e(isset($payment_detail['mercado_mode']) && $payment_detail['mercado_mode'] == 'live' ? 'checked="checked"' : ''); ?>><?php echo e(__('Live')); ?>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="mercado_access_token"><?php echo e(__('Access Token')); ?></label>
                                                            <input type="text" name="mercado_access_token"
                                                                id="mercado_access_token" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['mercado_access_token']) ? $payment_detail['mercado_access_token'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Access Token')); ?>" />
                                                            <?php if($errors->has('mercado_secret_key')): ?>
                                                                <span class="invalid-feedback d-block">
                                                                    <?php echo e($errors->first('mercado_access_token')); ?>

                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Paytm -->
                                    <div class="card">
                                        <div class="card-header py-4" id="paytm-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-paytm" aria-expanded="false"
                                            aria-controls="collapse-paytm">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Paytm')); ?></h6>
                                        </div>
                                        <div id="collapse-paytm" class="collapse" aria-labelledby="paytm-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Paytm')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_paytm_enabled" id="is_paytm_enabled"
                                                                <?php echo e(isset($payment_detail['is_paytm_enabled']) && $payment_detail['is_paytm_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_paytm_enabled"><?php echo e(__('Enable Paytm')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-4">
                                                        <label class="paypal-label form-control-label"
                                                            for="paypal_mode"><?php echo e(__('Paytm Environment')); ?></label> <br>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['paytm_mode']) && $payment_detail['paytm_mode'] == 'local' ? 'active' : ''); ?>">
                                                                <input type="radio" name="paytm_mode" value="local"
                                                                    <?php echo e((isset($payment_detail['paytm_mode']) && $payment_detail['paytm_mode'] == '') || (isset($payment_detail['paytm_mode']) && $payment_detail['paytm_mode'] == 'local') ? 'checked="checked"' : ''); ?>><?php echo e(__('Local')); ?>

                                                            </label>
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['paytm_mode']) && $payment_detail['paytm_mode'] == 'live' ? 'active' : ''); ?>">
                                                                <input type="radio" name="paytm_mode"
                                                                    value="production"
                                                                    <?php echo e(isset($payment_detail['paytm_mode']) && $payment_detail['paytm_mode'] == 'production' ? 'checked="checked"' : ''); ?>><?php echo e(__('Production')); ?>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paytm_public_key"><?php echo e(__('Merchant ID')); ?></label>
                                                            <input type="text" name="paytm_merchant_id"
                                                                id="paytm_merchant_id" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['paytm_merchant_id']) ? $payment_detail['paytm_merchant_id'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Merchant ID')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paytm_secret_key"><?php echo e(__('Merchant Key')); ?></label>
                                                            <input type="text" name="paytm_merchant_key"
                                                                id="paytm_merchant_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['paytm_merchant_key']) ? $payment_detail['paytm_merchant_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Merchant Key')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="paytm_industry_type"><?php echo e(__('Industry Type')); ?></label>
                                                            <input type="text" name="paytm_industry_type"
                                                                id="paytm_industry_type" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['paytm_industry_type']) ? $payment_detail['paytm_industry_type'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Industry Type')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mollie -->
                                    <div class="card">
                                        <div class="card-header py-4" id="mollie-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-mollie" aria-expanded="false"
                                            aria-controls="collapse-mollie">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Mollie')); ?></h6>
                                        </div>
                                        <div id="collapse-mollie" class="collapse" aria-labelledby="mollie-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Mollie')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_mollie_enabled" id="is_mollie_enabled"
                                                                <?php echo e(isset($payment_detail['is_mollie_enabled']) && $payment_detail['is_mollie_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_mollie_enabled"><?php echo e(__('Enable Mollie')); ?></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="mollie_api_key"><?php echo e(__('Mollie Api Key')); ?></label>
                                                            <input type="text" name="mollie_api_key"
                                                                id="mollie_api_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['mollie_api_key']) ? $payment_detail['mollie_api_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Mollie Api Key')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="mollie_profile_id"><?php echo e(__('Mollie Profile Id')); ?></label>
                                                            <input type="text" name="mollie_profile_id"
                                                                id="mollie_profile_id" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['mollie_profile_id']) ? $payment_detail['mollie_profile_id'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Mollie Profile Id')); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="mollie_partner_id"><?php echo e(__('Mollie Partner Id')); ?></label>
                                                            <input type="text" name="mollie_partner_id"
                                                                id="mollie_partner_id" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['mollie_partner_id']) ? $payment_detail['mollie_partner_id'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Mollie Partner Id')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Skrill -->
                                    <div class="card">
                                        <div class="card-header py-4" id="skrill-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-skrill" aria-expanded="false"
                                            aria-controls="collapse-skrill">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('Skrill')); ?></h6>
                                        </div>
                                        <div id="collapse-skrill" class="collapse" aria-labelledby="skrill-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('Skrill')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_skrill_enabled" id="is_skrill_enabled"
                                                                <?php echo e(isset($payment_detail['is_skrill_enabled']) && $payment_detail['is_skrill_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_skrill_enabled"><?php echo e(__('Enable Skrill')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="mollie_api_key"><?php echo e(__('Skrill Email')); ?></label>
                                                            <input type="email" name="skrill_email" id="skrill_email"
                                                                class="form-control"
                                                                value="<?php echo e(isset($payment_detail['skrill_email']) ? $payment_detail['skrill_email'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Skrill Email')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CoinGate -->
                                    <div class="card">
                                        <div class="card-header py-4" id="coingate-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-coingate" aria-expanded="false"
                                            aria-controls="collapse-coingate">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('CoinGate')); ?></h6>
                                        </div>
                                        <div id="collapse-coingate" class="collapse" aria-labelledby="coingate-payment"
                                            data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">
                                                        <h5 class="h5"><?php echo e(__('CoinGate')); ?></h5>
                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_coingate_enabled" id="is_coingate_enabled"
                                                                <?php echo e(isset($payment_detail['is_coingate_enabled']) && $payment_detail['is_coingate_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_coingate_enabled"><?php echo e(__('Enable CoinGate')); ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-4">
                                                        <label class="coingate-label form-control-label"
                                                            for="coingate_mode"><?php echo e(__('CoinGate Mode')); ?></label> <br>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['coingate_mode']) && $payment_detail['coingate_mode'] == 'sandbox' ? 'active' : ''); ?>">
                                                                <input type="radio" name="coingate_mode"
                                                                    value="sandbox"
                                                                    <?php echo e((isset($payment_detail['coingate_mode']) && $payment_detail['coingate_mode'] == '') || (isset($payment_detail['coingate_mode']) && $payment_detail['coingate_mode'] == 'sandbox') ? 'checked="checked"' : ''); ?>><?php echo e(__('Sandbox')); ?>

                                                            </label>
                                                            <label
                                                                class="btn btn-primary btn-sm <?php echo e(isset($payment_detail['coingate_mode']) && $payment_detail['coingate_mode'] == 'live' ? 'active' : ''); ?>">
                                                                <input type="radio" name="coingate_mode" value="live"
                                                                    <?php echo e(isset($payment_detail['coingate_mode']) && $payment_detail['coingate_mode'] == 'live' ? 'checked="checked"' : ''); ?>><?php echo e(__('Live')); ?>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label"
                                                                for="coingate_auth_token"><?php echo e(__('CoinGate Auth Token')); ?></label>
                                                            <input type="text" name="coingate_auth_token"
                                                                id="coingate_auth_token" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['coingate_auth_token']) ? $payment_detail['coingate_auth_token'] : ''); ?>"
                                                                placeholder="<?php echo e(__('CoinGate Auth Token')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Paymentwall -->
                                    <div class="card">
                                        <div class="card-header py-4" id="paymentwall-payment" data-toggle="collapse"
                                            role="button" data-target="#collapse-paymentwall" aria-expanded="false"
                                            aria-controls="collapse-paymentwall">
                                            <h6 class="mb-0"><i
                                                    class="far fa-credit-card mr-3"></i><?php echo e(__('PaymentWall')); ?></h6>
                                        </div>
                                        <div id="collapse-paymentwall" class="collapse"
                                            aria-labelledby="paymentwall-payment" data-parent="#payment-gateways">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6 py-2">

                                                        <small>
                                                            <?php echo e(__('Note: This detail will use for make checkout of plan.')); ?></small>
                                                    </div>
                                                    <div class="col-6 py-2 text-right">
                                                        <div class="custom-control custom-switch float-right">
                                                            <input type="hidden" name="is_paymentwall_enabled"
                                                                value="off">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="is_paymentwall_enabled" id="is_paymentwall_enabled"
                                                                <?php echo e(isset($payment_detail['is_paymentwall_enabled']) && $payment_detail['is_paymentwall_enabled'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                            <label class="custom-control-label form-control-label"
                                                                for="is_paymentwall_enabled"><?php echo e(__('Enable PaymentWall')); ?></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="paymentwall_public_key"
                                                                class="form-control-label"><?php echo e(__('Public Key')); ?></label>
                                                            <input type="text" name="paymentwall_public_key"
                                                                id="paymentwall_public_key" class="form-control"
                                                                value="<?php echo e(isset($payment_detail['paymentwall_public_key']) ? $payment_detail['paymentwall_public_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Public Key')); ?>" />
                                                            <?php if($errors->has('paymentwall_public_key')): ?>
                                                                <span class="invalid-feedback d-block">
                                                                    <?php echo e($errors->first('paymentwall_public_key')); ?>

                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="paymentwall_private_key"
                                                                class="form-control-label"><?php echo e(__('Private Key')); ?></label>
                                                            <input type="text" name="paymentwall_private_key"
                                                                id="paymentwall_private_key"
                                                                class="form-control form-control-label"
                                                                value="<?php echo e(isset($payment_detail['paymentwall_private_key']) ? $payment_detail['paymentwall_private_key'] : ''); ?>"
                                                                placeholder="<?php echo e(__('Private Key')); ?>" />
                                                            <?php if($errors->has('flutterwave_secret_key')): ?>
                                                                <span class="invalid-feedback d-block">
                                                                    <?php echo e($errors->first('paymentwall_private_key')); ?>

                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="text-right">
                                <?php echo e(Form::hidden('from', 'payment')); ?>

                                <button type="submit"
                                    class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                            </div>
                        </div>
                    </div>

                    <?php echo e(Form::close()); ?>

                </div>
            </div>

            <div id="tabs-5" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Tracker Manage')); ?></h5>
                        <small><?php echo e(__('You can manage your tracker interval time here.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => ['settings.store'], 'id' => 'update_billing_setting', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('address', __('URL'), ['class' => 'form-control-label'])); ?>

                                    
                                    <input type="text" value="<?php echo e(url('')); ?>" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('interval_time', __('Tracking Interval'), ['class' => 'form-control-label'])); ?>

                                    <small
                                        class="ml-2"><?php echo e(__('Image Screenshort Take Interval time ( 1 = 1 min)')); ?></small>
                                    <?php echo e(Form::number('interval_time', $details['interval_time'], ['class' => 'form-control', 'required' => 'required'])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <?php echo e(Form::hidden('from', 'tracker')); ?>

                            <button type="submit"
                                class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>

            <div id="tabs-6" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Zoom Meeting')); ?></h5>
                        <small><?php echo e(__('You can manage your Zoom Meeting Information.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['url' => route('setting.ZoomSettings'), 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('zoom_api_key', __('Zoom API Key'), ['class' => 'form-control-label'])); ?>

                                    
                                    <input type="text" name="zoom_api_key" placeholder="Zoom API Key"
                                        value="<?php echo e(!empty($settings['zoom_api_key']) ? $settings['zoom_api_key'] : ''); ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('zoom_secret_key', __('Zoom Secret Key'), ['class' => 'form-control-label'])); ?>

                                    <input type="text" name="zoom_secret_key" class="form-control"
                                        placeholder="Zoom Secret Key"
                                        value="<?php echo e(!empty($settings['zoom_secret_key']) ? $settings['zoom_secret_key'] : ''); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit"
                                class="btn btn-sm btn-primary rounded-pill"><?php echo e(__('Save changes')); ?></button>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>

            <div id="tabs-7" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Slack Notification')); ?></h5>
                        <small><?php echo e(__('You can manage your slack notification Information.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => 'slack.setting', 'id' => 'slack-setting', 'method' => 'post', 'class' => 'd-contents'])); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="small-title"><?php echo e(__('Slack Webhook URL')); ?></h6>
                                <div class="col-md-12">
                                    <?php echo e(Form::text('slack_webhook', isset($settings['slack_webhook']) ? $settings['slack_webhook'] : '', ['class' => 'form-control w-100', 'placeholder' => __('Enter Slack Webhook URL'), 'required' => 'required'])); ?>

                                </div>
                            </div>

                            <div class="col-md-12 mt-4 mb-2">
                                <h6 class="small-title"><?php echo e(__('Module Setting')); ?></h6>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Project create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            
                                            <?php echo e(Form::checkbox('is_project_enabled', '1', isset($settings['is_project_enabled']) && $settings['is_project_enabled'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'is_project_enabled'])); ?>

                                            <label class="custom-control-label" for="is_project_enabled"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Task create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('task_notification', '1', isset($settings['task_notification']) && $settings['task_notification'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'task_notification'])); ?>

                                            <label class="custom-control-label" for="task_notification"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Invoice create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('invoice_notificaation', '1', isset($settings['invoice_notificaation']) && $settings['invoice_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'invoice_notificaation'])); ?>

                                            <label class="custom-control-label" for="invoice_notificaation"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Task move')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('task_move_notificaation', '1', isset($settings['task_move_notificaation']) && $settings['task_move_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'task_move_notificaation'])); ?>

                                            <label class="custom-control-label" for="task_move_notificaation"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span> <?php echo e(__('Milestone create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('mileston_notificaation', '1', isset($settings['mileston_notificaation']) && $settings['mileston_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'mileston_notificaation'])); ?>

                                            <label class="custom-control-label" for="mileston_notificaation"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span> <?php echo e(__('Milestone status updated')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('milestone_status_notificaation', '1', isset($settings['milestone_status_notificaation']) && $settings['milestone_status_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'milestone_status_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="milestone_status_notificaation"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span> <?php echo e(__('Invoice status changes')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('invoice_status_notificaation', '1', isset($settings['invoice_status_notificaation']) && $settings['invoice_status_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'invoice_status_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="invoice_status_notificaation"></label>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-right mt-5">
                            <input class="btn btn-sm btn-primary rounded-pill" type="submit" value="Save Changes">
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>

            <div id="tabs-8" class="tabs-card d-none">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h6 mb-0"><?php echo e(__('Telegram Notification')); ?></h5>
                        <small><?php echo e(__('You can manage your Telegram notification Information.')); ?></small>
                    </div>
                    <div class="card-body">
                        <?php echo e(Form::open(['route' => 'telegram.setting', 'id' => 'telegram-setting', 'method' => 'post', 'class' => 'd-contents'])); ?>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label mb-0"><?php echo e(__('Telegram AccessToken')); ?></label> <br>
                                <?php echo e(Form::text('telegram_accestoken', isset($settings['telegram_accestoken']) ? $settings['telegram_accestoken'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Telegram AccessToken')])); ?>

                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-control-label mb-0"><?php echo e(__('Telegram ChatID')); ?></label> <br>
                                <?php echo e(Form::text('telegram_chatid', isset($settings['telegram_chatid']) ? $settings['telegram_chatid'] : '', ['class' => 'form-control', 'placeholder' => __('Enter Telegram ChatID')])); ?>

                            </div>

                            <div class="col-md-12 mt-4 mb-2">
                                <h6 class="small-title"><?php echo e(__('Module Setting')); ?></h6>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Project create')); ?></span>
                                        <div class="custom-control custom-switch float-right">

                                            <?php echo e(Form::checkbox('telegram_is_project_enabled', '1', isset($settings['telegram_is_project_enabled']) && $settings['telegram_is_project_enabled'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_is_project_enabled'])); ?>

                                            <label class="custom-control-label" for="telegram_is_project_enabled"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Task create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('telegram_task_notification', '1', isset($settings['telegram_task_notification']) && $settings['telegram_task_notification'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_task_notification'])); ?>

                                            <label class="custom-control-label" for="telegram_task_notification"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Invoice create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('telegram_invoice_notificaation', '1', isset($settings['telegram_invoice_notificaation']) && $settings['telegram_invoice_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_invoice_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="telegram_invoice_notificaation"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span><?php echo e(__('Task move')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('telegram_task_move_notificaation', '1', isset($settings['telegram_task_move_notificaation']) && $settings['telegram_task_move_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_task_move_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="telegram_task_move_notificaation"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span> <?php echo e(__('Milestone create')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('telegram_mileston_notificaation', '1', isset($settings['telegram_mileston_notificaation']) && $settings['telegram_mileston_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_mileston_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="telegram_mileston_notificaation"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span> <?php echo e(__('Milestone status updated')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('telegram_milestone_status_notificaation', '1', isset($settings['telegram_milestone_status_notificaation']) && $settings['telegram_milestone_status_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_milestone_status_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="telegram_milestone_status_notificaation"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span> <?php echo e(__('Invoice status changes')); ?></span>
                                        <div class="custom-control custom-switch float-right">
                                            <?php echo e(Form::checkbox('telegram_invoice_status_notificaation', '1', isset($settings['telegram_invoice_status_notificaation']) && $settings['telegram_invoice_status_notificaation'] == '1' ? 'checked' : '', ['class' => 'custom-control-input', 'id' => 'telegram_invoice_status_notificaation'])); ?>

                                            <label class="custom-control-label"
                                                for="telegram_invoice_status_notificaation"></label>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-right mt-5">
                            <input class="btn btn-sm btn-primary rounded-pill" type="submit" value="Save Changes">
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        // For Sidebar Tabs
        $(document).ready(function() {
            $('.list-group-item').on('click', function() {
                var href = $(this).attr('data-href');
                $('.tabs-card').addClass('d-none');
                $(href).removeClass('d-none');
                $('#tabs .list-group-item').removeClass('text-primary');
                $(this).addClass('text-primary');
            });
        });

        $(document).on('click', '.custom-control-input', function() {
            var pp = $(this).parents('.tabs-card').removeClass('d-none');
        });
    </script>

    <script>
        function check_theme(color_val) {
            // alert(color_val);
            $('input[value="' + color_val + '"]').prop('checked', true);
            $('input[value="' + color_val + '"]').attr('checked', true);
            $('a[data-value]').removeClass('active_color');
            $('a[data-value="' + color_val + '"]').addClass('active_color');
        }
    </script>

    <script>
        $(document).on('change', '.email-template-checkbox', function() {
            var url = $(this).data('url');
            var chbox = $(this);
        
            $.ajax({
                url: url,
                type: 'GET',
                data: {_token: $('meta[name="csrf-token"]').attr('content'), status: chbox.val()},
                success: function(data) {

                },
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Frederick\Desktop\UCA\main_file\ProjectManagmentSystem\resources\views/users/owner_setting.blade.php ENDPATH**/ ?>