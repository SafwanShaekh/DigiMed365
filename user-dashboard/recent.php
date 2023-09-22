<?php
include('layout/header.php');
include('../config.php');
?>

<!-- main content ends here -->
<div class="main-content">
<div class="page-content">
                <div class="container-fluid">

                    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                        <div class="file-manager-sidebar">
                            <div class="p-3 d-flex flex-column h-100">
                                <div class="mb-3">
                                    <h5 class="mb-0 fw-semibold fs-16">My Drive</h5>
                                </div>
                                <div class="search-box">
                                    <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                                <div class="mt-3 mx-n4 px-4 file-menu-sidebar-scroll" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 24px;">
                                    <ul class="list-unstyled file-manager-menu">
                                        <li>
                                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                                <i class="ri-folder-2-line align-bottom me-2"></i> <span class="file-list-link">My Drive</span>
                                            </a>
                                            <div class="collapse show" id="collapseExample">
                                                <ul class="sub-menu list-unstyled">
                                                    <!-- <li>
                                                        <a href="#!">Assets</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">Marketing</a>
                                                    </li> -->
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="documents.php"><i class="ri-file-list-2-line align-bottom me-2"></i> <span class="file-list-link">Documents</span></a>
                                        </li>
                                        <li>
                                            <a href="media.php"><i class="ri-image-2-line align-bottom me-2"></i> <span class="file-list-link">Media</span></a>
                                        </li>
                                        <li>
                                                        <a href="qr-code.php"><i
                                                                class="ri-qr-code-line align-bottom me-2"></i> <span
                                                                class="file-list-link">QR-code</span></a>
                                                    </li>
                                        <li>
                                            <a href="recent.php"><i class="ri-history-line align-bottom me-2"></i> <span class="file-list-link">Recents</span></a>
                                        </li>
                                        <li>
                                            <a href="important.php"><i class="ri-star-line align-bottom me-2"></i> <span class="file-list-link">Important</span></a>
                                        </li>
                                        
                                        <li>
                                            <a href="removed_files.php"><i class="ri-delete-bin-line align-bottom me-2"></i> <span class="file-list-link">Deleted</span></a>
                                        </li>
                                    </ul>
                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 398px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>

                            </div>
                        </div>
                        <!-- main content begins here -->
                        <div class="file-manager-content w-100 p-3 py-0">
                            <div class="mx-n3 pt-4 px-4 file-manager-content-scroll" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px -24px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px 24px 0px;">
                                <div id="folder-list" class="mb-2">
                                    
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><a href="vault.php"><b>&larr; Back</b></a> </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                <li class="breadcrumb-item active">Cards</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">

                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                        <div class="col">
                            <div class="card card-body">
                                <div class="d-flex mb-4 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-1.jpg" alt=""
                                            class="avatar-sm rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="card-title mb-1">Oliver Phillips</h5>
                                        <p class="text-muted mb-0">Digital Marketing</p>
                                    </div>
                                </div>
                                <h6 class="mb-1">$15,548</h6>
                                <p class="card-text text-muted">Expense Account</p>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm">See Details</a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

        <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-lg-6">
                                            <div class="row g-2">
                                                <div class="col">
                                                    <div class="position-relative mb-3">
                                                        <input type="text" class="form-control form-control-lg bg-light border-light" placeholder="Search here.." value="Admin Dashboard">
                                                        <a class="btn btn-link link-success btn-lg position-absolute end-0 top-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="ri-mic-fill"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light"><i class="mdi mdi-magnify me-1"></i> Search</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <h5 class="fs-16 fw-semibold text-center mb-0">Showing results for "<span class="text-primary fw-medium fst-italic">Admin Dashboard</span> "</h5>
                                        </div>
                                    </div>
                                    <!--end row-->

                                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-body">
                                            <button type="button" class="btn-close text-reset float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            <div class="d-flex flex-column h-100 justify-content-center align-items-center">
                                                <div class="search-voice">
                                                    <i class="ri-mic-fill align-middle"></i>
                                                    <span class="voice-wave"></span>
                                                    <span class="voice-wave"></span>
                                                    <span class="voice-wave"></span>
                                                </div>
                                                <h4>Talk to me, what can I do for you?</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab" aria-selected="false" tabindex="-1">
                                                <i class="ri-search-2-line text-muted align-bottom me-1"></i> All Results
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" id="images-tab" href="#images" role="tab" aria-selected="true">
                                                <i class="ri-image-fill text-muted align-bottom me-1"></i> Images
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#news" role="tab" aria-selected="false" tabindex="-1">
                                                <i class="ri-list-unordered text-muted align-bottom me-1"></i> News
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#video" role="tab" aria-selected="false" tabindex="-1">
                                                <i class="ri-video-line text-muted align-bottom me-1"></i> Videos
                                            </a>
                                        </li>
                                        <li class="nav-item ms-auto" role="presentation">
                                            <div class="dropdown">
                                                <a class="nav-link fw-medium text-reset mb-n1" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" aria-selected="false" tabindex="-1">
                                                    <i class="ri-settings-4-line align-middle me-1"></i> Settings
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <li><a class="dropdown-item" href="#">Search Settings</a></li>
                                                    <li><a class="dropdown-item" href="#">Advanced Search</a></li>
                                                    <li><a class="dropdown-item" href="#">Search History</a></li>
                                                    <li><a class="dropdown-item" href="#">Search Help</a></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="#">Dark Mode:Off</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane" id="all" role="tabpanel">
                                            <div class="pb-3">
                                                <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Velzon - Responsive Bootstrap 5 Admin Dashboard</a></h5>
                                                <p class="text-success mb-2">https://themesbrand.com/velzon/dashboard.php</p>
                                                <p class="text-muted mb-2">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <span class="fw-semibold">bootstrap 5</span> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>
                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>10</li>
                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>8</li>
                                                    <li class="list-inline-item">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="ri-user-line"></i>
                                                            </div>
                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                <span class="fw-medium">Themesbrand</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="border border-dashed"></div>

                                            <div class="py-3">
                                                <h5 class="fs-13 mb-3 text-muted fst-italic">Showing results Images</h5>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-10">
                                                        <div class="row g-2">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div>
                                                                    <a href="assets/images/small/img-1.jpg" class="image-popup d-block">
                                                                        <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid d-block rounded">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div>
                                                                    <a href="assets/images/small/img-3.jpg" class="image-popup d-block">
                                                                        <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid d-block rounded">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div>
                                                                    <a href="assets/images/small/img-4.jpg" class="image-popup d-block">
                                                                        <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid d-block rounded">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="search-more-results rounded">
                                                                    <a href="javascript:void(0);" onclick="myFunction()" class="d-block">
                                                                        <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid d-block rounded">

                                                                        <div class="bg-overlay"></div>
                                                                        <div class="nav-icon">
                                                                            <i class="ri-image-fill align-middle me-1"></i> 99+
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                            <div class="border border-dashed"></div>

                                            <div class="py-3">
                                                <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Skote - Admin &amp; Dashboard Template by Themesbrand</a></h5>
                                                <p class="text-success mb-2">https://themesbrand.com/skote/</p>
                                                <p class="text-muted mb-2">Skote is an admin dashboard template that is a beautifully crafted, clean &amp; minimal designed admin template with Dark, Light Layouts with RTL options. You can build any type of web application like Saas based interface, eCommerce, Crypto, CRM, CMS, Project management apps, Admin Panels, etc.</p>
                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>485</li>
                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>167</li>
                                                    <li class="list-inline-item">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="ri-user-line"></i>
                                                            </div>
                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                <span class="fw-medium">Themesbrand</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="border border-dashed"></div>

                                            <div class="py-3">
                                                <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Minia - React Js Admin &amp; Dashboard Template</a></h5>
                                                <p class="text-success mb-2">https://themesbrand.com/minia/react/</p>
                                                <p class="text-muted mb-2">Minia react is a simple and beautiful admin template built with Bootstrap ^5.1.3. It has <span class="fw-semibold">5+ different layouts and 3 modes</span> ( Dark, Light &amp; RTL ) which are managed by SCSS only. You can simply change to any layouts or mode by changing a couple of lines code.</p>
                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>69</li>
                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>43</li>
                                                    <li class="list-inline-item">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="ri-user-line"></i>
                                                            </div>
                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                <span class="fw-medium">Themesbrand</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="border border-dashed"></div>

                                            <div class="py-3">
                                                <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Doson - Angular Admin &amp; Dashboard Template by Themesbrand</a></h5>
                                                <p class="text-success mb-2">https://themesbrand.com/dason/angular/</p>
                                                <p class="text-muted mb-2">Dason is a simple and beautiful admin template built with Bootstrap ^5.1.3. It has 5+ different layouts and 3 modes ( Dark, Light &amp; RTL ) which are managed by SCSS only. You can simply change to any layouts or mode by changing a couple of lines code.</p>
                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>102</li>
                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>36</li>
                                                    <li class="list-inline-item">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="ri-user-line"></i>
                                                            </div>
                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                <span class="fw-medium">Themesbrand</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div>
                                                <ul class="pagination pagination-separated justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="javascript:void(0);" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane active show" id="images" role="tabpanel" aria-labelledby="#images-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="swiper images-menu mb-3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                                        <div class="swiper-wrapper" id="swiper-wrapper-34c34a9d31aaf7d10" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-12.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Bootstrap</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-11.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Website</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="3 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-10.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Responsive</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="4 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-9.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Design</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="5 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-8.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">eCommerce</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="6 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-7.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Templates</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="7 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-6.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Admin Panal</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="8 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-5.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Simple</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide" role="group" aria-label="9 / 9" style="margin-right: 10px;">
                                                                <div class="d-flex align-items-center border border-dashed rounded p-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="assets/images/small/img-3.jpg" alt="" width="65" class="rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-2">
                                                                        <a href="javascript:void(0);" class="stretched-link fw-medium">Dark</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                </div>
                                            </div>
                                            <div class="gallery-light">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Ron Mackie</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-2.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-2.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Working at a coffee shop</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Nancy Martino</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-3.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-3.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Photo was taken in Beach</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Elwood Arter</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-4.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-4.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Drawing a sketch</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Jason McQuaid</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-5.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-5.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Working from home little spot</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Henry Baird</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-6.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-6.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Project discussion with team</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Erica Kernan</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-7.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-7.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Sunrise above a beach</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">James Ballard</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-8.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-8.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Ruby Griffin</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-9.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-9.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Dramatic clouds at the Golden Gate Bridge</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Ron Mackie</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-10.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-10.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Fun day at the Hill Station</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Henry Baird</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-11.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-11.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">Cycling in the countryside</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Nancy Martino</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card">
                                                            <div class="gallery-container">
                                                                <a class="image-popup" href="assets/images/small/img-12.jpg" title="">
                                                                    <img class="gallery-img img-fluid mx-auto" src="assets/images/small/img-12.jpg" alt="">
                                                                    <div class="gallery-overlay">
                                                                        <h5 class="overlay-caption">A mix of friends and strangers heading off to find an adventure.</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="d-flex align-items-center mt-2">
                                                                    <div class="flex-grow-1 text-muted">by <a href="#" class="text-body text-truncate">Erica Kernan</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                            </button>
                                                                            <button type="button" class="btn btn-sm fs-13 btn-link text-body text-decoration-none px-0">
                                                                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                                <div class="mt-4">
                                                    <ul class="pagination pagination-separated justify-content-center mb-0">
                                                        <li class="page-item disabled">
                                                            <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="javascript:void(0);" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="javascript:void(0);" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="javascript:void(0);" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="javascript:void(0);" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="javascript:void(0);" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="news" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-1.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-secondary fs-12">Business</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">A mix of friends and strangers heading off to find an adventure</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> James Ballard</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-2.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-warning fs-12">Development</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">How to get creative in your work ?</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Ruby Griffin</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-3.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-info fs-12">Fashion</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">How to become a best sale marketer in a year!</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Elwood Arter</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-4.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-primary fs-12">Product</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">Manage white space in responsive layouts ?</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Nancy Martino</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-5.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-secondary fs-12">Business</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">Stack designer Olivia Murphy offers freelancing advice</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Erica Kernan</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 11 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-6.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-danger fs-12">Design</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">A day in the of a professional fashion designer</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Jason McQuaid</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 14 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-7.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-danger fs-12">Design</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">Design your apps in your own way</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Henry Baird</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 19 Nov, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-6">
                                                    <div class="card border">
                                                        <div class="card-body">
                                                            <div class="d-sm-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-8.jpg" alt="" width="115" class="rounded-1">
                                                                </div>
                                                                <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                                                                    <ul class="list-inline mb-2">
                                                                        <li class="list-inline-item"><span class="badge badge-soft-warning fs-12">Development</span></li>
                                                                    </ul>
                                                                    <h5><a href="javascript:void(0);">How apps is changing the IT world</a></h5>
                                                                    <ul class="list-inline mb-0">
                                                                        <li class="list-inline-item"><i class="ri-user-3-fill text-success align-middle me-1"></i> Elwood Arter</li>
                                                                        <li class="list-inline-item"><i class="ri-calendar-2-fill text-success align-middle me-1"></i> 10 Aug, 2021</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->

                                            <div class="mt-4">
                                                <ul class="pagination pagination-separated justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="javascript:void(0);" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="video" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-12 video-list">
                                                    <div class="list-element">
                                                        <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Admin dashboard templates - Material Design for Velzon</a></h5>
                                                        <p class="text-success">https://themesbrand.com/velzon/dashboard.php</p>
                                                        <div class="d-flex flex-column flex-sm-row">
                                                            <div class="flex-shrink-0">
                                                                <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                            </div>
                                                            <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                <p class="text-muted mb-0">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <b>bootstrap 5</b> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>
                                                                <div class="border border-dashed mb-1 mt-3"></div>
                                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>335</li>
                                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>102</li>
                                                                    <li class="list-inline-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-user-line"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                                <span class="fw-medium">Themesbrand</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end list-element-->

                                                    <div class="list-element mt-4">
                                                        <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Create Responsive Admin Dashboard using Html CSS</a></h5>
                                                        <p class="text-success">https://themesbrand.com/velzon/dashboard.php</p>
                                                        <div class="d-flex flex-column flex-sm-row">
                                                            <div class="flex-shrink-0">
                                                                <iframe src="https://www.youtube.com/embed/Z-fV2lGKnnU" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                            </div>
                                                            <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                <p class="text-muted mb-0">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <b>bootstrap 5</b> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>
                                                                <div class="border border-dashed mb-1 mt-3"></div>
                                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>485</li>
                                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>167</li>
                                                                    <li class="list-inline-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-user-line"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                                <span class="fw-medium">Themesbrand</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end list-element-->

                                                    <div class="list-element mt-4">
                                                        <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Velzon - The Most Popular Bootstrap 5 HTML, Angular &amp; React Js Admin</a></h5>
                                                        <p class="text-success">https://themesbrand.com/velzon/dashboard.php</p>
                                                        <div class="d-flex flex-column flex-sm-row">
                                                            <div class="flex-shrink-0">
                                                                <iframe src="https://www.youtube.com/embed/2RZQN_ko0iU" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                            </div>
                                                            <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                <p class="text-muted mb-0">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <b>bootstrap 5</b> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>
                                                                <div class="border border-dashed mb-1 mt-3"></div>
                                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>122</li>
                                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>51</li>
                                                                    <li class="list-inline-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-user-line"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                                <span class="fw-medium">Themesbrand</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end list-element-->

                                                    <div class="list-element mt-4">
                                                        <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Velzon Admin Dashboard (website analytics) with Bootstrap 5</a></h5>
                                                        <p class="text-success">https://themesbrand.com/velzon/dashboard.php</p>
                                                        <div class="d-flex flex-column flex-sm-row">
                                                            <div class="flex-shrink-0">
                                                                <iframe src="https://www.youtube.com/embed/Z-fV2lGKnnU" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                            </div>
                                                            <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                <p class="text-muted mb-0">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <b>bootstrap 5</b> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>
                                                                <div class="border border-dashed mb-1 mt-3"></div>
                                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>485</li>
                                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>69</li>
                                                                    <li class="list-inline-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-user-line"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                                <span class="fw-medium">Themesbrand</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end list-element-->

                                                    <div class="list-element mt-4">
                                                        <h5 class="fs-16 mb-1"><a href="javascript:void(0);">Dashboard Admin Basics - YouTube</a></h5>
                                                        <p class="text-success">https://themesbrand.com/velzon/dashboard.php</p>
                                                        <div class="d-flex flex-column flex-sm-row">
                                                            <div class="flex-shrink-0">
                                                                <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen="" class="rounded"></iframe>
                                                            </div>
                                                            <div class="flex-grow-1 ms-sm-3 mt-2 mt-sm-0">
                                                                <p class="text-muted mb-0">Velzon admin is super flexible, powerful, clean, modern &amp; responsive admin template based on <b>bootstrap 5</b> stable with unlimited possibilities. You can simply change to any layout or mode by changing a couple of lines of code. You can start small and large projects or update design in your existing project using Velzon it is very quick and easy as it is beautiful, adroit, and delivers the ultimate user experience.</p>
                                                                <div class="border border-dashed mb-1 mt-3"></div>
                                                                <ul class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-0">
                                                                    <li class="list-inline-item me-3"><i class="ri-thumb-up-line align-middle me-1"></i>58</li>
                                                                    <li class="list-inline-item me-3"><i class="ri-question-answer-line align-middle me-1"></i>24</li>
                                                                    <li class="list-inline-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-shrink-0">
                                                                                <i class="ri-user-line"></i>
                                                                            </div>
                                                                            <div class="flex-grow-1 fs-13 ms-1">
                                                                                <span class="fw-medium">Themesbrand</span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end list-element-->

                                                </div>
                                                <!--end col-->
                                                <div class="text-center">
                                                    <button id="loadmore" class="btn btn-link text-success mt-2"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </button>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                    <!--end tab-content-->

                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card -->
                        </div>
                        <!--end card -->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 686px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 415px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                        </div>
                        <div class="file-manager-detail-content p-3 py-0">
                            <div class="mx-n3 pt-3 px-3 file-detail-content-scroll" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -16px -16px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 16px 16px 0px;">
                                <div id="folder-overview">
                                    <div class="d-flex align-items-center pb-3 border-bottom border-bottom-dashed">
                                        <h5 class="flex-grow-1 fw-semibold mb-0">Overview</h5>
                                        <div>
                                            <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-overview">
                                                <i class="ri-close-fill align-bottom"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="simple_dount_chart" data-colors="[&quot;--vz-info&quot;, &quot;--vz-danger&quot;, &quot;--vz-primary&quot;, &quot;--vz-success&quot;]" class="apex-charts mt-3" dir="ltr" style="min-height: 330px;"><div id="apexchartswyqq6tma" class="apexcharts-canvas apexchartswyqq6tma" style="width: 0px; height: 330px;"><svg id="SvgjsSvg1034" width="0" height="330" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1037" class="apexcharts-annotations"></g><g id="SvgjsG1036" class="apexcharts-inner apexcharts-graphical"><defs id="SvgjsDefs1035"></defs></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="mt-4">
                                        <ul class="list-unstyled vstack gap-4">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title rounded bg-soft-secondary text-secondary">
                                                                <i class="ri-file-text-line fs-17"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="mb-1 fs-15">Documents</h5>
                                                        <p class="mb-0 fs-12 text-muted">2348 files</p>
                                                    </div>
                                                    <b>27.01 GB</b>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title rounded bg-soft-success text-success">
                                                                <i class="ri-gallery-line fs-17"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="mb-1 fs-15">Media</h5>
                                                        <p class="mb-0 fs-12 text-muted">12480 files</p>
                                                    </div>
                                                    <b>20.87 GB</b>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title rounded bg-soft-warning text-warning">
                                                                <i class="ri-folder-2-line fs-17"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="mb-1 fs-15">Projects</h5>
                                                        <p class="mb-0 fs-12 text-muted">349 files</p>
                                                    </div>
                                                    <b>4.10 GB</b>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title rounded bg-soft-primary text-primary">
                                                                <i class="ri-error-warning-line fs-17"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="mb-1 fs-15">Others</h5>
                                                        <p class="mb-0 fs-12 text-muted">9873 files</p>
                                                    </div>
                                                    <b>33.54 GB</b>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pb-3 mt-auto">
                                        <div class="alert alert-danger d-flex align-items-center mb-0">
                                            <div class="flex-shrink-0">
                                                <i class="ri-cloud-line text-danger align-bottom display-5"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="text-danger fs-14">Upgrade to Pro</h5>
                                                <p class="text-muted mb-2">Get more space for your...</p>
                                                <button class="btn btn-sm btn-danger"><i class="ri-upload-cloud-line align-bottom"></i> Upgrade Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="file-overview" class="h-100">
                                    <div class="d-flex h-100 flex-column">
                                        <div class="d-flex align-items-center pb-3 border-bottom border-bottom-dashed mb-3 gap-2">
                                            <h5 class="flex-grow-1 fw-semibold mb-0">File Preview</h5>
                                            <div>
                                                <button type="button" class="btn btn-ghost-primary btn-icon btn-sm fs-16 favourite-btn">
                                                    <i class="ri-star-fill align-bottom"></i>
                                                </button>
                                                <button type="button" class="btn btn-soft-danger btn-icon btn-sm fs-16 close-btn-overview">
                                                    <i class="ri-close-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="pb-3 border-bottom border-bottom-dashed mb-3">
                                            <div class="file-details-box bg-light p-3 text-center rounded-3 border border-light mb-3">
                                                <div class="display-4 file-icon">
                                                    <i class="ri-file-text-fill text-secondary"></i>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-success float-end fs-16"><i class="ri-share-forward-line"></i></button>
                                            <h5 class="fs-16 mb-1 file-name">html.docx</h5>
                                            <p class="text-muted mb-0 fs-12"><span class="file-size">0.3 KB</span>, <span class="create-date">19 Apr, 2022</span></p>
                                        </div>
                                        <div>
                                            <h5 class="fs-12 text-uppercase text-muted mb-3">File Description :</h5>

                                            <div class="table-responsive">
                                                <table class="table table-borderless table-nowrap table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="width: 35%;">File Name :</th>
                                                            <td class="file-name">html.docx</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">File Type :</th>
                                                            <td class="file-type">Documents</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Size :</th>
                                                            <td class="file-size">0.3 KB</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Created :</th>
                                                            <td class="create-date">19 Apr, 2022</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Path :</th>
                                                            <td class="file-path"><div class="user-select-all text-truncate">*:\projects\src\assets\images</div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div>
                                                <h5 class="fs-12 text-uppercase text-muted mb-3">Share Information:</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-nowrap table-sm">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" style="width: 35%;">Share Name :</th>
                                                                <td class="share-name">\\*\Projects</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Share Path :</th>
                                                                <td class="share-path">velzon:\Documents\</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-auto border-top border-top-dashed py-3">
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-soft-primary w-100"><i class="ri-download-2-line align-bottom me-1"></i> Download</button>
                                                <button type="button" class="btn btn-soft-danger w-100 remove-file-overview" data-remove-id="" data-bs-toggle="modal" data-bs-target="#removeFileItemModal"><i class="ri-close-fill align-bottom me-1"></i> Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
</div>
<?php
include('layout/footer.php');
?>