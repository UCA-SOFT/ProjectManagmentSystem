<!doctype html>
<?php
    $SITE_RTL = Cookie::get('SITE_RTL');
    $logo = \App\Models\Utility::get_file('logo/');
?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" <?php echo e(($SITE_RTL == 'on') ? 'dir="rtl"' : ''); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e(config('app.name')); ?></title>
    <link rel="icon" href="<?php echo e($logo.'favicon.png'); ?>" type="image/png">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('landing/libs/@fortawesome/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('landing/libs/swiper/dist/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('landing/css/site-blue-light.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('landing/css/custom.css')); ?>">
    <?php if($SITE_RTL == 'on'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-rtl.css')); ?>">
    <?php endif; ?>
</head>
<body class="application application-offset">

<nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-gradient-dark navbar-border py-3" id="navbar-main">
    <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="<?php echo e(url('home')); ?>">
            <img src="<?php echo e($logo.'logo.png'); ?>" id="navbar-logo" style="height: 25px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="#features" data-scroll-to="">Caracteristicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews" data-scroll-to="">Testimonios</a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">



                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('home')); ?>" class="nav-link d-lg-none"><?php echo e(__('Dashboard')); ?></a>
                            <a href="<?php echo e(route('home')); ?>" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="fas fa-home"></i></span>
                                <span class="btn-inner--text"><?php echo e(__('Dashboard')); ?></span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('login')); ?>/es" class="nav-link d-lg-none"><?php echo e(__('Login')); ?></a>
                            <a href="<?php echo e(route('login')); ?>/es" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="fas fa-sign-in-alt"></i></span>
                                <span class="btn-inner--text"><?php echo e(__('Login')); ?></span>
                            </a>
                        </li>
                        <?php if(Utility::getValByName('SIGNUP') == 'on'): ?>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item mr-0">
                                    <a href="<?php echo e(route('register')); ?>" class="nav-link d-lg-none"><?php echo e(__('Register')); ?></a>
                                    <a href="<?php echo e(route('register')); ?>" class="btn btn-sm btn-primary btn-icon rounded-pill d-none d-lg-inline-flex">
                                        <span class="btn-inner--icon"><i class="fas fa-user-plus"></i></span>
                                        <span class="btn-inner--text"><?php echo e(__('Register')); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Main content -->
<div class="main-content">
    <!-- Header (v12) -->
    <section class="slice slice-lg bg-gradient-dark" data-offset-top="#header-main" style="padding-top: 147.188px;">
        <!-- SVG background -->
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
            <figure class="w-100 d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="1016px" height="732px" viewBox="0 0 1016 732" version="1.1" class="injected-svg svg-inject">
                    <g id="Page-6" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Circles" transform="translate(508.000000, 366.000000) scale(-1, 1) translate(-508.000000, -366.000000) ">
                            <circle id="Oval-4-Copy-3" fill="#48B5AC" cx="942.5" cy="378.5" r="6.5"></circle>
                            <circle id="Oval-4-Copy-5" fill="#476EF0" cx="560" cy="11" r="11"></circle>
                            <circle id="Oval-4" fill="#51E9B4" cx="635" cy="613" r="26"></circle>
                            <circle id="Oval-4-Copy" fill="#2A4BB9" cx="1011" cy="454" r="5"></circle>
                            <circle id="Oval-4-Copy-2" fill="#158DFF" cx="281.5" cy="725.5" r="6.5"></circle>
                            <circle id="Oval-4-Copy-4" fill="#51E9B4" cx="911.5" cy="129.5" r="11.5"></circle>
                            <circle id="Oval-4-Copy-9" fill="#51E9B4" cx="15" cy="500" r="15"></circle>
                            <circle id="Oval-4-Copy-8" fill="#2A4BB9" cx="71" cy="454" r="5"></circle>
                            <circle id="Oval-4-Copy-6" fill="#2E96FB" cx="14.5" cy="244.5" r="6.5"></circle>
                        </g>
                    </g>
                </svg>
            </figure>
        </div>
        <div class="container position-relative zindex-100">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-8">
                    <div class="pt-6 text-center">
                        <h1 class="text-white mb-3">Prueba hoy mismo!</h1>
                        <p class="lead text-white lh-180 w-75 mx-auto">Construimos una aplicacion sencilla y moderna para gestionar tus proyectos</p>
                        <a href="<?php echo e(route('login')); ?>/es" data-scroll-to class="btn btn-white btn-white btn-icon rounded-pill hover-translate-y-n3 mt-4">
                            <span class="btn-inner--text">Inicia hoy!</span>
                            <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                        </a>
                    </div>
                    <div class="mt-5 mb--100 d-none d-lg-block">
                        <div class="frame-laptop swiper-js-container">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/macbook.svg')); ?>" class="img-fluid">
                            <div class="frame-inner">
                                <div class="swiper-container h-100 swiper-container-initialized swiper-container-horizontal" data-swiper-items="1" data-swiper-space-between="0" style="cursor: grab;">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active">
                                            <div class="bg-img-holder top-0 right-0 col-12" data-bg-size="cover" style="background-image: url('<?php echo e(asset('landing/img/taskgo-saas-pic-1.png')); ?>'); background-position: initial; background-size: cover; opacity: 1; height: 100%;">
                                                <img alt="Image placeholder" src="<?php echo e(asset('landing/img/taskgo-saas-pic-1.png')); ?>">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bg-img-holder top-0 right-0 col-12" data-bg-size="cover" style="background-image: url('<?php echo e(asset('landing/img/laptop-banner.png')); ?>'); background-position: initial; background-size: cover; opacity: 1; height: 100%;">
                                                <img alt="Image placeholder" src="<?php echo e(asset('landing/img/taskgo-saas-pic-1.png')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-container" data-shape-style="curve" data-shape-position="bottom" style="height: 183.797px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="injected-svg svg-inject fill-section-secondary">
                <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
            </svg>
        </div>
    </section>
    <!-- Clients (v3) -->
    <section class="slice bg-section-secondary delimiter-bottom">
        <div class="container">
            <div class="mb-5 text-center">
                <h3 class=" mt-4">Respaldados por más de 1000 usuarios</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">Desde estudiantes, freelancer hasta instituciones publicas!!!</p>
                </div>
            </div>
            <div class="hover-blurable">
                <a href="#reviews" data-scroll-to>
                    <div class="blurable-item client-group row justify-content-center">
                        <div class="client col-lg-2 col-md-3 col-4 py-3">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/amazon-gray.svg')); ?>">
                        </div>
                        <div class="client col-lg-2 col-md-3 col-4 py-3">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/spotify-gray.svg')); ?>">
                        </div>
                        <div class="client col-lg-2 col-md-3 col-4 py-3">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/airbnb-gray.svg')); ?>">
                        </div>
                        <div class="client col-lg-2 col-md-3 col-4 py-3">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/paypal-gray.svg')); ?>">
                        </div>
                        <div class="client col-lg-2 col-md-3 col-4 py-3">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/slack-gray.svg')); ?>">
                        </div>
                        <div class="client col-lg-2 col-md-3 col-4 py-3">
                            <img alt="Image placeholder" src="<?php echo e(asset('landing/img/airbnb-gray.svg')); ?>">
                        </div>
                    </div>
                    <span class="blurable-hidden btn btn-sm btn-primary rounded-pill">Mira nuestros más importantes clientes</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Features (v15) -->
    <section class="slice slice-lg" id="features">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5">
                    <div class="">
                        <h5 class=" h3">Gestión de proyectos</h5>
                        <p class="lead my-4">La pestaña Proyecto le permite ver sus proyectos en cuadrícula y vista de lista. Te permite filtrar los proyectos a través de diferentes opciones. La opción marcada le permite buscar proyectos en función de su estado. También te permite invitar a miembros a diferentes proyectos.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img alt="Image placeholder" src="<?php echo e(asset('landing/img/taskgo-saas-dark-mode.png')); ?>" class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v15) -->















    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5">
                    <div class="">
                        <h5 class=" h3">Listado de usuarios</h5>
                        <p class="lead my-4">Obtiene una visión detallada de la hoja de tiempo, las tareas, las habilidades, los proyectos, los archivos adjuntos, las tareas vencidas y los detalles de las redes sociales de los usuarios en una sola página. Se puede acceder fácilmente a una visualización gráfica de la hoja de tiempo de cada usuario.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img alt="Image placeholder" src="<?php echo e(asset('landing/img/taskgo-saas-members.png')); ?>" class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class=" pr-lg-4">
                        <h5 class=" h3">Gestión de horas trabajadas</h5>
                        <p class="lead my-4">Puede administrar la hoja de tiempo de cada proyecto agregando tareas. Esto garantizaría la finalización del proyecto a tiempo y sabrá qué usuario trabajó cuánto tiempo en cada tarea.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img alt="Image placeholder" src="<?php echo e(asset('landing/img/taskgo-saas-timesheet.png')); ?>" class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v11) -->
    <section class="slice slice delimiter-top delimiter-bottom">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-lg-3 col-6 mb-5 mb-lg-0">
                    <div class="text-center mb-5 mb-lg-0">
                        <div class="icon icon-lg text-danger">
                            <i class="fas fa-heart"></i>
                        </div>
                        <span class="d-block mt-4 h3 text-danger">97%</span>
                        <span class="d-block mt-2 h6">Clientes satisfechos</span>
                    </div>
                </div>


                <div class="col-lg-3 col-6 mb-5 mb-lg-0">
                    <div class="text-center">
                        <div class="icon icon-lg text-info">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <span class="d-block mt-4 h2 text-info">100%</span>
                        <span class="d-block mt-2 h6">Auto administrable</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials (v1) -->
    <section class="slice slice-lg" id="reviews">
        <div class="container">
            <div class="mb-5 text-center">
                <h3 class=" mt-4">Lo que dicen nuestros clientes</h3>
                <div class="fluid-paragraph mt-3">

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="swiper-js-container row align-items-center">
                        <div class="col-xl-12">
                            <div class="swiper-container swiper-container-initialized swiper-container-horizontal" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" style="cursor: grab;">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide p-4 swiper-slide-active" style="width: 333.5px;">
                                        <!-- Testimonial entry 1 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('landing/img/team-1-800x800.jpg')); ?>" class="avatar  rounded-circle">
                                                    </div>
                                                    <div class="pl-3">
                                                        <h5 class="h6 mb-0">Beatriz salazar</h5>
                                                        <small class="d-block text-muted">Google</small>
                                                    </div>
                                                </div>
                                                <p class="mt-4 lh-180">Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño.</p>
                                                <span class="static-rating static-rating-sm">
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-4 swiper-slide-next" style="width: 333.5px;">
                                        <!-- Testimonial entry 2 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('landing/img/team-2-800x800.jpg')); ?>" class="avatar  rounded-circle">
                                                    </div>
                                                    <div class="pl-3">
                                                        <h5 class="h6 mb-0">Monroe Parker</h5>
                                                        <small class="d-block text-muted">Apple</small>
                                                    </div>
                                                </div>
                                                <p class="mt-4 lh-180">Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño.</p>
                                                <span class="static-rating static-rating-sm">
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-4" style="width: 333.5px;">
                                        <!-- Testimonial entry 3 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('landing/img/team-3-800x800.jpg')); ?>" class="avatar  rounded-circle">
                                                    </div>
                                                    <div class="pl-3">
                                                        <h5 class="h6 mb-0">John Sullivan</h5>
                                                        <small class="d-block text-muted">Amazon</small>
                                                    </div>
                                                </div>
                                                <p class="mt-4 lh-180">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                                                <span class="static-rating static-rating-sm">
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide p-4" style="width: 333.5px;">
                                        <!-- Testimonial entry 1 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('landing/img/team-1-800x800.jpg')); ?>" class="avatar  rounded-circle">
                                                    </div>
                                                    <div class="pl-3">
                                                        <h5 class="h6 mb-0">Heather Wright</h5>
                                                        <small class="d-block text-muted">Google</small>
                                                    </div>
                                                </div>
                                                <p class="mt-4 lh-180">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                                <span class="static-rating static-rating-sm">
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-4" style="width: 333.5px;">
                                        <!-- Testimonial entry 2 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('landing/img/team-2-800x800.jpg')); ?>" class="avatar  rounded-circle">
                                                    </div>
                                                    <div class="pl-3">
                                                        <h5 class="h6 mb-0">Monroe Parker</h5>
                                                        <small class="d-block text-muted">Apple</small>
                                                    </div>
                                                </div>
                                                <p class="mt-4 lh-180">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <span class="static-rating static-rating-sm">
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                            <i class="star fas fa-star voted"></i>
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-4" style="width: 333.5px;">
                                        <!-- Testimonial entry 3 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('landing/img/team-3-800x800.jpg')); ?>" class="avatar  rounded-circle">
                                                    </div>
                                                    <div class="pl-3">
                                                        <h5 class="h6 mb-0">John Sullivan</h5>
                                                        <small class="d-block text-muted">Amazon</small>
                                                    </div>
                                                </div>
                                                <p class="mt-4 lh-180">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                                <span class="static-rating static-rating-sm">
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                    <i class="star fas fa-star voted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination w-100 pt-4 d-flex align-items-center justify-content-center swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="slice slice-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100">
                    <div class="card-body py-5">
                        <div class="d-flex align-items-start">
                            <div class="icon">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="text-white h4">Páginas atractivas</h3>
                                <p class="text-white mb-0">Estos casos son perfectamente simples y sencillos de distinguir. En una hora libre, cuando nuestro poder de elección está libre y cuando nada lo impide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>















        </div>
    </div>
</section>
<footer id="footer-main">
    <div class="footer footer-dark bg-gradient-primary footer-rotate">
        <div class="container">

































            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        © 2022-2023 <a href="#" class="font-weight-bold"><?php echo e(env('APP_NAME')); ?></a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<!-- Scripts -->
<script src="<?php echo e(asset('landing/js/site.core.js')); ?>"></script>
<script src="<?php echo e(asset('landing/libs/swiper/dist/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('landing/js/site.js')); ?>"></script>
</html>
<?php /**PATH C:\Users\Frederick\Desktop\UCA\main_file\ProjectManagmentSystem\resources\views/layouts/landing.blade.php ENDPATH**/ ?>