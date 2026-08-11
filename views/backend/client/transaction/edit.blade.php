@extends('backend.layouts.app')

@section('content')

<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <!-- Menu -->
        <div class="menu-mobile-toggler d-xl-none rounded-1">
            <a href="javascript:void(0);"
                class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
                <i class="ti tabler-menu icon-base"></i>
                <i class="ti tabler-chevron-right icon-base"></i>
            </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                    <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                        <i class="icon-base ti tabler-menu-2 icon-md"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                                href="javascript:void(0);">
                                <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                            </a>
                        </div>
                    </div>

                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <i class="icon-base ti tabler-language icon-22px text-heading"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="en"
                                        data-text-direction="ltr">
                                        <span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr"
                                        data-text-direction="ltr">
                                        <span>French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="ar"
                                        data-text-direction="rtl">
                                        <span>Arabic</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="de"
                                        data-text-direction="ltr">
                                        <span>German</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Language -->

                        <!-- Style Switcher -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                                id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                                <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                                <li>
                                    <button type="button" class="dropdown-item align-items-center active"
                                        data-bs-theme-value="light" aria-pressed="false">
                                        <span><i class="icon-base ti tabler-sun icon-22px me-3"
                                                data-icon="sun"></i>Light</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="true">
                                        <span><i class="icon-base ti tabler-moon-stars icon-22px me-3"
                                                data-icon="moon-stars"></i>Dark</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item align-items-center"
                                        data-bs-theme-value="system" aria-pressed="false">
                                        <span><i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3"
                                                data-icon="device-desktop-analytics"></i>System</span>
                                    </button>
                                </li>
                            </ul>
                        </li>
                        <!-- / Style Switcher-->

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                                href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false">
                                <i class="icon-base ti tabler-layout-grid-add icon-22px text-heading"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                                        <a href="javascript:void(0)"
                                            class="dropdown-shortcuts-add py-2 btn btn-text-secondary rounded-pill btn-icon"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                                class="icon-base ti tabler-plus icon-20px text-heading"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-calendar icon-26px text-heading"></i>
                                            </span>
                                            <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                            <small>Appointments</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-file-dollar icon-26px text-heading"></i>
                                            </span>
                                            <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                            <small>Manage Accounts</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-user icon-26px text-heading"></i>
                                            </span>
                                            <a href="app-user-list.html" class="stretched-link">User App</a>
                                            <small>Manage Users</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-users icon-26px text-heading"></i>
                                            </span>
                                            <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                            <small>Permission</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i
                                                    class="icon-base ti tabler-device-desktop-analytics icon-26px text-heading"></i>
                                            </span>
                                            <a href="index.html" class="stretched-link">Dashboard</a>
                                            <small>User Dashboard</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-settings icon-26px text-heading"></i>
                                            </span>
                                            <a href="pages-account-settings-account.html"
                                                class="stretched-link">Setting</a>
                                            <small>Account Settings</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-help-circle icon-26px text-heading"></i>
                                            </span>
                                            <a href="pages-faq.html" class="stretched-link">FAQs</a>
                                            <small>FAQs & Articles</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                                <i class="icon-base ti tabler-square icon-26px text-heading"></i>
                                            </span>
                                            <a href="modal-examples.html" class="stretched-link">Modals</a>
                                            <small>Useful Popups</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                            <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                                href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false">
                                <span class="position-relative">
                                    <i class="icon-base ti tabler-bell icon-22px text-heading"></i>
                                    <span
                                        class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h6 class="mb-0 me-auto">Notification</h6>
                                        <div class="d-flex align-items-center h6 mb-0">
                                            <span class="badge bg-label-primary me-2">8 New</span>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-all p-2 btn btn-icon"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Mark all as read"><i
                                                    class="icon-base ti tabler-mail-opened text-heading"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/1.png" alt
                                                            class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                    <small class="mb-1 d-block text-body">Won the monthly best seller
                                                        gold badge</small>
                                                    <small class="text-body-secondary">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Charles Franklin</h6>
                                                    <small class="mb-1 d-block text-body">Accepted your
                                                        connection</small>
                                                    <small class="text-body-secondary">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/2.png" alt
                                                            class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">New Message ✉️</h6>
                                                    <small class="mb-1 d-block text-body">You have new message from
                                                        Natalie</small>
                                                    <small class="text-body-secondary">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                class="icon-base ti tabler-shopping-cart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                                                    <small class="mb-1 d-block text-body">ACME Inc. made new order
                                                        $1,154</small>
                                                    <small class="text-body-secondary">1 day ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/9.png" alt
                                                            class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Application has been approved 🚀</h6>
                                                    <small class="mb-1 d-block text-body">Your ABC project application
                                                        has been approved.</small>
                                                    <small class="text-body-secondary">2 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                class="icon-base ti tabler-chart-pie"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Monthly report is generated</h6>
                                                    <small class="mb-1 d-block text-body">July monthly financial report
                                                        is generated </small>
                                                    <small class="text-body-secondary">3 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/5.png" alt
                                                            class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Send connection request</h6>
                                                    <small class="mb-1 d-block text-body">Peter sent you connection
                                                        request</small>
                                                    <small class="text-body-secondary">4 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/6.png" alt
                                                            class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">New message from Jane</h6>
                                                    <small class="mb-1 d-block text-body">Your have new message from
                                                        Jane</small>
                                                    <small class="text-body-secondary">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                                class="icon-base ti tabler-alert-triangle"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">CPU is running high</h6>
                                                    <small class="mb-1 d-block text-body">CPU Utilization Percent is
                                                        currently at 88.63%,</small>
                                                    <small class="text-body-secondary">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="icon-base ti tabler-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="border-top">
                                    <div class="d-grid p-4">
                                        <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                            <small class="align-middle">View all notifications</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar avatar-online">
                                                    <img src="../../assets/img/avatars/1.png" alt
                                                        class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">John Doe</h6>
                                                <small class="text-body-secondary">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1 mx-n2"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="icon-base ti tabler-user me-3 icon-md"></i><span
                                            class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="icon-base ti tabler-settings me-3 icon-md"></i><span
                                            class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                                        <span class="d-flex align-items-center align-middle">
                                            <i
                                                class="flex-shrink-0 icon-base ti tabler-file-dollar me-3 icon-md"></i><span
                                                class="flex-grow-1 align-middle">Billing</span>
                                            <span
                                                class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider my-1 mx-n2"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-pricing.html">
                                        <i class="icon-base ti tabler-currency-dollar me-3 icon-md"></i><span
                                            class="align-middle">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-faq.html">
                                        <i class="icon-base ti tabler-question-mark me-3 icon-md"></i><span
                                            class="align-middle">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="d-grid px-2 pt-2 pb-1">
                                        <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html"
                                            target="_blank">
                                            <small class="align-middle">Logout</small>
                                            <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->

            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- Header -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-6">
                                {{-- <div class="user-profile-header-banner">
                                <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
                                </div> --}}
                                <div
                                    class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
                                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                        <img src="../../assets/img/avatars/1.png" alt="user image"
                                            class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img" />
                                    </div>
                                    <div class="flex-grow-1 mt-3 mt-lg-5">
                                        <div
                                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                                            <div class="user-profile-info">
                                                <h4 class="mb-2 mt-lg-6">John Doe</h4>
                                                <ul
                                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 my-2">
                                                    <li class="list-inline-item d-flex gap-2 align-items-center">
                                                        <i class="icon-base ti tabler-palette icon-lg"></i><span
                                                            class="fw-medium">UX Designer</span>
                                                    </li>
                                                    <li class="list-inline-item d-flex gap-2 align-items-center">
                                                        <i class="icon-base ti tabler-map-pin  icon-lg"></i><span
                                                            class="fw-medium">Vatican City</span>
                                                    </li>
                                                    <li class="list-inline-item d-flex gap-2 align-items-center">
                                                        <i class="icon-base ti tabler-calendar  icon-lg"></i><span
                                                            class="fw-medium"> Joined April 2021</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-primary mb-1">
                                                <i class="icon-base ti tabler-user-check icon-xs me-2"></i>Connected
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Header -->

                    <!-- Navbar pills -->
                    @include('backend.client.nav')

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!--/ Navbar pills -->

                    <!-- User Profile Content -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <!-- About User -->
                            <div class="card">
                                <div class="tab-pane fade show active" id="profileContent">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Edit Transaction</h5>
                                        </div>

                                        <div class="card-body">
                                            <form method="post"
                                                action="{{ route('admin.users.transaction.update', ['clientid' => $client['id'], 'transactionid' => $transaction['id']]) }}">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="rate" value="{{ old('rate', $transaction['rate'] ?? '1.00000') }}">

                                                <div class="row g-3">

                                                       @php
                                                            $rawDate = $transaction['date'] ?? null;

                                                            $formattedDate = (
                                                                !empty($rawDate) &&
                                                                $rawDate !== '0000-00-00 00:00:00' &&
                                                                $rawDate !== '0000-00-00'
                                                            )
                                                                ? date('d/m/Y', strtotime($rawDate))
                                                                : date('d/m/Y');
                                                        @endphp

                                                    <div class="col-md-6">
                                                        <label class="form-label">Date</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                                <i class="ti ti-calendar"></i>
                                                            </span>
                                                            <input type="text"
                                                                id="transactionDate"
                                                                name="date"
                                                                value="{{ old('date', $formattedDate) }}"
                                                                class="form-control flatpickr-date"
                                                                placeholder="dd/mm/yyyy"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>

                                                    <script>
                                                        window.addEventListener('load', function () {
                                                            const el = document.querySelector('#transactionDate');

                                                            if (el && typeof flatpickr !== 'undefined') {
                                                                flatpickr(el, {
                                                                    dateFormat: 'd/m/Y',
                                                                    allowInput: true,
                                                                    defaultDate: el.value || null
                                                                });
                                                            }
                                                        });
                                                    </script>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Amount In</label>
                                                        <input type="text"
                                                            name="amountin"
                                                            class="form-control"
                                                            placeholder="0.00"
                                                            value="{{ old('amountin', $transaction['amountin'] ?? '') }}">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Description</label>
                                                        <input type="text"
                                                            name="description"
                                                            class="form-control"
                                                            placeholder="Enter description"
                                                            value="{{ old('description', $transaction['description'] ?? '') }}">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Fees</label>
                                                        <input type="text"
                                                            name="fees"
                                                            class="form-control"
                                                            placeholder="0.00"
                                                            value="{{ old('fees', $transaction['fees'] ?? '') }}">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Transaction ID</label>
                                                        <input type="text"
                                                            name="transid"
                                                            class="form-control"
                                                            placeholder="Enter transaction id"
                                                            value="{{ old('transid', $transaction['transid'] ?? '') }}">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Amount Out</label>
                                                        <input type="text"
                                                            name="amountout"
                                                            class="form-control"
                                                            placeholder="0.00"
                                                            value="{{ old('amountout', $transaction['amountout'] ?? '') }}">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Invoice ID</label>
                                                        <input type="text"
                                                            name="invoiceid"
                                                            class="form-control"
                                                            placeholder="Enter invoice id"
                                                            value="{{ old('invoiceid', $transaction['invoiceid'] ?? '') }}">
                                                    </div>

                                                    <div class="col-md-6 d-flex align-items-end">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input"
                                                                type="checkbox"
                                                                id="addcredit"
                                                                name="addcredit"
                                                                value="1"
                                                                {{ old('addcredit', $transaction['addcredit'] ?? false) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="addcredit">
                                                                Add to Client's Credit Balance
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Payment Method</label>
                                                        <select name="paymentmethod" class="form-select">
                                                            <option value="">None</option>
                                                            @foreach($paymethodMethods as $m)
                                                                @php
                                                                    $methodValue = $m['module'] ?? $m['displayname'];
                                                                    $selectedMethod = old('paymentmethod', $transaction['gateway'] ?? $transaction['paymentmethod'] ?? '');
                                                                @endphp
                                                                <option value="{{ $methodValue }}" {{ $selectedMethod == $methodValue ? 'selected' : '' }}>
                                                                    {{ $m['displayname'] ?? $m['module'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="mt-4 text-end">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="ti ti-device-floppy me-1"></i> Update Transaction
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/ User Profile Content -->
                </div>


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                            <div class="text-body">
                                &#169;
                                <script>
                                    document.write(new Date().getFullYear());

                                </script>
                                , made with ❤️ by <a href="https://pixinvent.com" target="_blank"
                                    class="footer-link">Pixinvent</a>
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://themeforest.net/user/pixinvent/portfolio" target="_blank"
                                    class="footer-link me-4">More Themes</a>

                                <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://pixinvent.ticksy.com/" target="_blank"
                                    class="footer-link d-none d-sm-inline-block">Support</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>

            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>


@endsection
@push('scripts')


@endpush
