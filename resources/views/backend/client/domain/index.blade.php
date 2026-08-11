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
                    <!--/ Navbar pills -->


                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-4">

                            <div class="col-12">

                                @if(empty($domain))
                                    <div class="card">
                                        <div class="card-body text-center py-5">
                                            <i class="ti ti-world-off text-warning mb-3" style="font-size: 42px;"></i>
                                            <h5 class="mb-2">No domains found for this user</h5>
                                            <p class="text-muted mb-3">
                                                This client does not currently have any domains.
                                            </p>
                                            
                                            <a href="{{ route('admin.orders.create',$client['id']) }}" class="btn btn-primary">
                                                Place New Order
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="card">
                                    <div class="card-body">

                                        <!-- Top Bar -->
                                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <form action="{{ route('admin.users.domains', ['clientid' => $client['id']]) }}"
                                                    method="get"
                                                    class="d-flex align-items-center gap-2 flex-wrap">
                                                    <label class="fw-semibold mb-0">Domains:</label>

                                                    <select name="id" onchange="this.form.submit()" class="form-select" style="min-width: 240px;">
                                                        @forelse($domains as $d)
                                                            <option value="{{ $d['id'] }}"
                                                                {{ (string)($domain['id'] ?? '') === (string)$d['id'] ? 'selected' : '' }}>
                                                                {{ $d['domainname'] ?? $d['domain'] ?? 'Unnamed Domain' }}
                                                            </option>
                                                        @empty
                                                            <option value="">No Domains Found</option>
                                                        @endforelse
                                                    </select>

                                                    <noscript>
                                                        <input type="submit" value="Go" class="btn btn-success btn-sm">
                                                    </noscript>
                                                </form>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <img src="/assets/img/ssl/ssl-inactive.png"
                                                    class="rounded"
                                                    style="width: 42px; height: 42px;"
                                                    data-bs-toggle="tooltip"
                                                    title="No SSL Detected.">

                                                <a class="btn btn-outline-primary"
                                                href="{{ url('clientsinvoices.php?userid=' . ($client['id'] ?? 0) . '&domainid=' . ($domain['id'] ?? 0)) }}">
                                                    <i class="ti ti-file-invoice me-1"></i>
                                                    View Invoices
                                                </a>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        More
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="ti ti-arrows-exchange me-2"></i>
                                                                Transfer Ownership
                                                            </a>
                                                        </li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalSendEmail">
                                                                <i class="ti ti-mail me-2"></i>
                                                                Send Message
                                                            </a>
                                                        </li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#modalDelete">
                                                                <i class="ti ti-trash me-2"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Domain Form -->
                                        <form method="post"
                                            action="{{ route('admin.users.domains.update', ['clientid' => $client['id'], 'domainid' => $domain['id'] ?? 0]) }}"
                                            id="frmSaveDomain">
                                            @csrf

                                            <div class="row g-4">

                                                <div class="col-md-6">
                                                    <label class="form-label">Order #</label>
                                                    <div class="form-control-plaintext">
                                                        @if(!empty($selectedOrder['id']))
                                                            {{ $selectedOrder['id'] }} -
                                                            <a href="{{ url('orders.php?action=view&id=' . $selectedOrder['id']) }}" class="text-decoration-none">
                                                                View Order
                                                            </a>
                                                        @elseif(!empty($domain['orderid']))
                                                            {{ $domain['orderid'] }}
                                                        @else
                                                            —
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Registration Period</label>
                                                    <div class="input-group">
                                                        <input type="number" name="regperiod" value="{{ old('regperiod', $domain['regperiod'] ?? 1) }}" class="form-control">
                                                        <span class="input-group-text">Years</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Order Type</label>
                                                    <div class="form-control-plaintext">
                                                        {{ old('type', $domain['type'] ?? 'Register') }}
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Registration Date</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="ti ti-calendar"></i></span>
                                                        <input id="inputRegDate" type="text" name="regdate"
                                                            value="{{ old('regdate', !empty($domain['regdate']) ? date('d/m/Y', strtotime($domain['regdate'])) : '') }}"
                                                            class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Domain</label>
                                                    <div class="input-group">
                                                        <input id="inputDomain" type="text" name="domain" class="form-control"
                                                            value="{{ old('domain', $domain['domainname'] ?? $domain['domain'] ?? '') }}">

                                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"></button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                href="https://www.{{ $domain['domainname'] ?? $domain['domain'] ?? '' }}"
                                                                target="_blank">www</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#" onclick="document.getElementById('frmWhois').submit(); return false;">
                                                                    whois
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                href="https://intodns.com/{{ $domain['domainname'] ?? $domain['domain'] ?? '' }}"
                                                                target="_blank">intoDNS</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Expiry Date</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="ti ti-calendar"></i></span>
                                                        <input id="inputExpiryDate" type="text" name="expirydate"
                                                            value="{{ old('expirydate', !empty($domain['expirydate']) && $domain['expirydate'] != '0000-00-00' ? date('d/m/Y', strtotime($domain['expirydate'])) : '') }}"
                                                            class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Registrar</label>
                                                    <select id="registrarsDropDown" name="registrar" class="form-select">
                                                        <option value="">None</option>
                                                        @if(!empty($domain['registrar']))
                                                            <option value="{{ $domain['registrar'] }}" selected>{{ $domain['registrar'] }}</option>
                                                        @endif
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Next Due Date</label>
                                                    <input type="hidden" name="oldnextduedate"
                                                        value="{{ old('oldnextduedate', !empty($domain['nextduedate']) ? date('d/m/Y', strtotime($domain['nextduedate'])) : '') }}">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="ti ti-calendar"></i></span>
                                                        <input id="inputNextDueDate" type="text" name="nextduedate"
                                                            value="{{ old('nextduedate', !empty($domain['nextduedate']) ? date('d/m/Y', strtotime($domain['nextduedate'])) : '') }}"
                                                            class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">First Payment Amount</label>
                                                    <input type="text" name="firstpaymentamount" class="form-control"
                                                        value="{{ old('firstpaymentamount', $domain['firstpaymentamount'] ?? '') }}">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Payment Method</label>
                                                    <select name="paymentmethod" class="form-select">
                                                        @foreach($paymentMethods as $method)
                                                            @php
                                                                $methodValue = $method['module'] ?? $method['displayname'] ?? '';
                                                                $methodLabel = $method['displayname'] ?? $method['module'] ?? '';
                                                                $selectedPayment = old('paymentmethod', $domain['paymentmethod'] ?? '');
                                                            @endphp
                                                            <option value="{{ $methodValue }}" {{ $selectedPayment == $methodValue ? 'selected' : '' }}>
                                                                {{ $methodLabel }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Recurring Amount</label>
                                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                                        <input type="text" id="inputRecurringAmount" name="recurringamount" class="form-control"
                                                            value="{{ old('recurringamount', $domain['recurringamount'] ?? '') }}"
                                                            style="max-width: 160px;">
                                                        <div class="form-check form-switch m-0">
                                                            <input class="form-check-input" type="checkbox" id="inputAutorecalc" name="autorecalc" value="1"
                                                                {{ old('autorecalc') ? 'checked' : '' }}>
                                                            <label class="form-check-label ms-2" for="inputAutorecalc">Recalculate on Save</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Status</label>
                                                    @php
                                                        $domainStatuses = [
                                                            'Pending',
                                                            'Pending Registration',
                                                            'Pending Transfer',
                                                            'Active',
                                                            'Grace',
                                                            'Redemption',
                                                            'Expired',
                                                            'Transferred Away',
                                                            'Cancelled',
                                                            'Fraud',
                                                        ];
                                                        $selectedStatus = old('status', $domain['status'] ?? 'Active');
                                                    @endphp
                                                    <select name="status" class="form-select">
                                                        @foreach($domainStatuses as $status)
                                                            <option value="{{ $status }}" {{ $selectedStatus == $status ? 'selected' : '' }}>
                                                                {{ $status }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Promotion Code</label>
                                                    <select name="promoid" class="form-select">
                                                        <option value="0" selected>None</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Subscription ID</label>
                                                    <input type="text" class="form-control" name="subscriptionid"
                                                        value="{{ old('subscriptionid', $domain['subscriptionid'] ?? '') }}">
                                                </div>

                                                <div class="col-12">
                                                    <label class="form-label">Management Tools</label>
                                                    <div class="d-flex flex-wrap gap-4">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" name="dnsmanagement" id="dnsmanagement" value="1"
                                                                {{ old('dnsmanagement', !empty($domain['dnsmanagement'])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="dnsmanagement">DNS Management</label>
                                                        </div>

                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" name="emailforwarding" id="emailforwarding" value="1"
                                                                {{ old('emailforwarding', !empty($domain['emailforwarding'])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="emailforwarding">Email Forwarding</label>
                                                        </div>

                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" name="idprotection" id="idprotection" value="1"
                                                                {{ old('idprotection', !empty($domain['idprotection'])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="idprotection">ID Protection</label>
                                                        </div>

                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" name="donotrenew" id="donotrenew" value="1"
                                                                {{ old('donotrenew', !empty($domain['donotrenew'])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="donotrenew">Disable Auto Renew</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label class="form-label">Domain Reminder History</label>
                                                    <div class="table-responsive border rounded">
                                                        <table class="table table-sm mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Reminder</th>
                                                                    <th>To</th>
                                                                    <th>Sent</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr align="center">
                                                                    <td colspan="4" class="text-muted">No Records Found</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label class="form-label">Admin Notes</label>
                                                    <textarea name="additionalnotes" rows="4" class="form-control">{{ old('additionalnotes', $domain['notes'] ?? '') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="mt-4 d-flex gap-2">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Cancel Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endif

                            </div>

                            <!-- Hidden Whois Form -->
                            <form method="post" action="whois.php" target="_blank" id="frmWhois">
                                @csrf
                                <input type="hidden" name="domain" value="{{ $domain['domainname'] ?? $domain['domain'] ?? '' }}">
                            </form>
                        </div>
                    </div>

                    <!-- Send Message Modal -->
                    <div class="modal fade" id="modalSendEmail" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="post" action="clientsemails.php?userid=9" name="frmSendEmail" id="frmSendEmail">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">Send Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="action" value="send">
                                        <input type="hidden" name="type" value="domain">
                                        <input type="hidden" name="id" value="2">

                                        <label class="form-label">Choose Message:</label>
                                        <select name="messageID" class="form-select">
                                            <option value="0">New Message</option>
                                            <option value="3">Domain Registration Confirmation</option>
                                            <option value="29">Domain Renewal Confirmation</option>
                                            <option value="82">Domain Transfer Completed</option>
                                            <option value="53">Domain Transfer Failed</option>
                                            <option value="28">Domain Transfer Initiated</option>
                                            <option value="61">Expired Domain Notice</option>
                                            <option value="30">Upcoming Domain Renewal Notice</option>
                                            <option value="92">Upcoming Free Domain Renewal Notice</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Simple Confirm Modals -->
                    <div class="modal fade" id="modalRenew" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Renew Domain</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">Are you sure you want to send the domain renewal request to the registrar?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location='?userid=9&id=2&regaction=renew&token=8b646f547aa32bd20ed197f94471fe1c24aaea8e'">Yes</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                            </div>
                        </div></div>
                    </div>

                    <div class="modal fade" id="modalGetEPP" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Request EPP Code</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">Are you sure you want to send the EPP Code request to the registrar?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location='?userid=9&id=2&regaction=eppcode&token=8b646f547aa32bd20ed197f94471fe1c24aaea8e'">Yes</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                            </div>
                        </div></div>
                    </div>

                    <div class="modal fade" id="modalRequestDelete" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Request Domain Deletion</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">Are you sure you want to send the domain registrar a deletion request?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location='?userid=9&id=2&regaction=reqdelete&token=8b646f547aa32bd20ed197f94471fe1c24aaea8e'">Yes</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                            </div>
                        </div></div>
                    </div>

                    <div class="modal fade" id="modalDelete" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Delete Domain</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">Are you sure you want to delete this domain?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" onclick="window.location='?userid=9&id=2&action=delete&token=8b646f547aa32bd20ed197f94471fe1c24aaea8e'">Yes</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                            </div>
                        </div></div>
                    </div>

                    <div class="modal fade" id="modalReleaseDomain" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Release Domain</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">
                                <p class="mb-3">Release this domain by entering the new tag below.</p>
                                <label class="form-label">Transfer Tag:</label>
                                <input type="text" id="transtag" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location='?userid=9&id=2&regaction=release&transtag=' + document.getElementById('transtag').value + '&token=8b646f547aa32bd20ed197f94471fe1c24aaea8e'">Submit</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div></div>
                    </div>

                    <div class="modal fade" id="modalCancelSubscription" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Cancel Subscription</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">Are you sure you wish to request the Subscription cancellation?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="cancelSubscription()">Yes</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                            </div>
                        </div></div>
                    </div>

                    <div class="modal fade" id="modalIdProtectToggle" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog"><div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title">Enable ID Protection</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <div class="modal-body">
                                Enabling ID Protection may cause charges at the registrar.
                                <br>
                                Are you sure you wish to enable ID Protection?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location='?userid=9&id=2&regaction=idtoggle&token=8b646f547aa32bd20ed197f94471fe1c24aaea8e'">Yes</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                            </div>
                        </div></div>
                    </div>

                </div>
                <!-- / Content -->

                <script>
                    document.addEventListener('DOMContentLoaded', function () {

                        document.addEventListener('click', function (e) {

                            const btn = e.target.closest('.js-invoice-action');
                            if (!btn) return;

                            e.preventDefault();

                            const action = btn.dataset.action;
                            const form = btn.closest('form');
                            const url = form.action;

                            const pretty = action.replaceAll('_', ' ')
                                                .replace(/\b\w/g, c => c.toUpperCase());

                            Swal.fire({
                                title: 'Confirm?',
                                text: `Are you sure you want to ${pretty}?`,
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, Confirm'
                            }).then((result) => {




                                if (!result.isConfirmed) return;

                                const formData = new FormData(form);
                                formData.append('action', action);

                                fetch(url, {
                                    method: 'POST',
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    },
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    console.log(data);

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: data.message ?? 'Action completed'
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                })
                                .catch(error => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Something went wrong'
                                    });
                                });

                            });

                        });

                    });
                </script>



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
