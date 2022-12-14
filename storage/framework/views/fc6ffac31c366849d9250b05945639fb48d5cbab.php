<?php
$logo_path=\App\Models\Utility::get_file('/');
?>

<nav class="navbar navbar-main navbar-expand-lg navbar-border n-top-header" id="navbar-main">
    <div class="container-fluid">
        <button class="navbar-toggler responsive_none " type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-user d-lg-none">
            <ul class="navbar-nav flex-row align-items-center navbar_msg_responsive">
                <li class="nav-item ">
                    <a href="#" class="nav-link nav-link-icon sidenav-toggler text-white" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item dropdown dropdown-animate">
                    <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm rounded-circle">
                            
                                <?php if(Auth::user()->avatar): ?>
                                    <img  src="<?php echo e($logo_path.Auth::user()->avatar); ?>" class="avatar avatar-sm rounded-circle" >
                                <?php else: ?>
                                    <img class="avatar avatar-sm rounded-circle" <?php echo e(Auth::user()->img_avatar); ?>>
                                <?php endif; ?>
                          </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                        <h6 class="dropdown-header px-0"><?php echo e(__('Hi')); ?>, <?php echo e(Auth::user()->name); ?></h6>
                        <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            <span><?php echo e(__('My profile')); ?></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i>
                            <span><?php echo e(__('Logout')); ?></span>
                        </a>
                        <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>


























            </ul>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
            <ul class="navbar-nav align-items-center d-none d-lg-flex">




























            </ul>

            <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
                </li>
                <?php if(Auth::user()->type != 'admin'): ?>
                    <li class="nav-item text-white">
                        <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fas fa-search"></i></a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown dropdown-animate">
                    <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media media-pill align-items-center">
                        <span class="avatar rounded-circle">
                          <?php if(Auth::user()->avatar): ?>
                                <img  src="<?php echo e($logo_path.Auth::user()->avatar); ?>" class="avatar rounded-circle" >
                            <?php else: ?>
                                <img class="avatar rounded-circle" <?php echo e(Auth::user()->img_avatar); ?>>
                            <?php endif; ?>
                        </span>
                            <div class="ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm text-white"><?php echo e(Auth::user()->name); ?></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                        <h6 class="dropdown-header px-0"><?php echo e(__('Hi,')); ?> <?php echo e(Auth::user()->name); ?></h6>
                        <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            <span><?php echo e(__('Mi perfil')); ?></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span><?php echo e(__('Logout')); ?></span>
                        </a>
                    </div>
                </li>
            </ul>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>

        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Frederick\Desktop\UCA\main_file\ProjectManagmentSystem\resources\views/partials/admin/navbar.blade.php ENDPATH**/ ?>