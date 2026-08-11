@extends('backend.layouts.app')

@section('content')

<div class="menu-mobile-toggler d-xl-none rounded-1">
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
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
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
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
                                <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark"
                                aria-pressed="true">
                                <span><i class="icon-base ti tabler-moon-stars icon-22px me-3"
                                        data-icon="moon-stars"></i>Dark</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system"
                                aria-pressed="false">
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
                                    <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
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
                            <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h6 class="mb-0 me-auto">Notification</h6>
                                <div class="d-flex align-items-center h6 mb-0">
                                    <span class="badge bg-label-primary me-2">8 New</span>
                                    <a href="javascript:void(0)" class="dropdown-notifications-all p-2 btn btn-icon"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
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
                                                <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                            <small class="mb-1 d-block text-body">Won the monthly best seller gold
                                                badge</small>
                                            <small class="text-body-secondary">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                    class="icon-base ti tabler-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Charles Franklin</h6>
                                            <small class="mb-1 d-block text-body">Accepted your connection</small>
                                            <small class="text-body-secondary">12hr ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                    class="icon-base ti tabler-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/2.png" alt class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">New Message ✉️</h6>
                                            <small class="mb-1 d-block text-body">You have new message from
                                                Natalie</small>
                                            <small class="text-body-secondary">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
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
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                    class="icon-base ti tabler-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/9.png" alt class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Application has been approved 🚀</h6>
                                            <small class="mb-1 d-block text-body">Your ABC project application has been
                                                approved.</small>
                                            <small class="text-body-secondary">2 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
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
                                            <small class="mb-1 d-block text-body">July monthly financial report is
                                                generated </small>
                                            <small class="text-body-secondary">3 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                    class="icon-base ti tabler-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/5.png" alt class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Send connection request</h6>
                                            <small class="mb-1 d-block text-body">Peter sent you connection
                                                request</small>
                                            <small class="text-body-secondary">4 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                    class="icon-base ti tabler-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/6.png" alt class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">New message from Jane</h6>
                                            <small class="mb-1 d-block text-body">Your have new message from
                                                Jane</small>
                                            <small class="text-body-secondary">5 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
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
                                            <small class="mb-1 d-block text-body">CPU Utilization Percent is currently
                                                at 88.63%,</small>
                                            <small class="text-body-secondary">5 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
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
                                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
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
                                <i class="icon-base ti tabler-user me-3 icon-md"></i><span class="align-middle">My
                                    Profile</span>
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
                                    <i class="flex-shrink-0 icon-base ti tabler-file-dollar me-3 icon-md"></i><span
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
                                <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
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
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="fw-bold mb-1">Shared Hosting</h4>
                    <p class="text-muted mb-0">Manage shared hosting services and filter records easily.</p>
                </div>
            </div>

            <!-- Search / Filter Card -->
            <div class="card mb-4">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Search / Filter</h5>
                </div>
                <div class="card-body">
                    <form action="/admin/index.php?rp=/admin/services" method="post">
                        <input type="hidden" name="token" value="bad17ad8233993e9700e851acbb3d6e915070e19">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Product Type</label>
                                <select name="type" class="form-select">
                                    <option value="">Any</option>
                                    <option value="hostingaccount" selected>Shared Hosting</option>
                                    <option value="reselleraccount">Reseller Hosting</option>
                                    <option value="server">VPS/Server</option>
                                    <option value="other">Product/Service</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Server</label>
                                <select name="server" class="form-select">
                                    <option value="">Any</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Product/Service</label>
                                <select name="package" class="form-select">
                                    <option value="">Any</option>
                                    <optgroup label="Drew Ashley">
                                        <option value="1">Olga Hudson</option>
                                        <option value="2">Maxwell Clark</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Payment Method</label>
                                <select name="paymentmethod" class="form-select">
                                    <option value="">Any</option>
                                    <option value="mailin">Mail In Payment</option>
                                    <option value="paypal_ppcpv">PayPal</option>
                                    <option value="paypal_acdc">Credit/Debit Card</option>
                                    <option value="banktransfer">Bank Transfer</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Billing Cycle</label>
                                <select name="billingcycle" class="form-select">
                                    <option value="">Any</option>
                                    <option value="Free Account">Free</option>
                                    <option value="One Time">One Time</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Semi-Annually">Semi-Annually</option>
                                    <option value="Annually">Annually</option>
                                    <option value="Biennially">Biennially</option>
                                    <option value="Triennially">Triennially</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Any</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Active">Active</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Suspended">Suspended</option>
                                    <option value="Terminated">Terminated</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Fraud">Fraud</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Domain</label>
                                <input type="text" name="domain" class="form-control" placeholder="Enter domain">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Custom Field</label>
                                <select name="customfield" class="form-select">
                                    <option value="0">Any</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Client Name</label>
                                <input type="text" name="clientname" class="form-control" placeholder="Enter client name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Custom Field Value</label>
                                <input type="text" name="customfieldvalue" class="form-control" placeholder="Enter custom field value">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-search me-1"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Records Top Bar -->
            <form id="frmRecordsFound" method="post" action="/admin/index.php?rp=/admin/services/shared&amp;filter=1">
                <input type="hidden" name="token" value="bad17ad8233993e9700e851acbb3d6e915070e19">
                <input type="hidden" name="show_hidden" value="0">
                <input type="hidden" name="page" value="1">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row align-items-center g-3">
                            <div class="col-md-6">
                                <h6 class="mb-0">25 Records Found, Showing 1 to 25</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-md-end align-items-center flex-wrap gap-3">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkboxShowHidden" checked>
                                        <label class="form-check-label" for="checkboxShowHidden">
                                            Hide Inactive Clients (3)
                                        </label>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <label class="mb-0">Jump to Page:</label>
                                        <select class="form-select form-select-sm" style="width: 90px;">
                                            <option selected>1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Table Card -->
            <form method="post" action="/admin/sendmessage.php?type=product&amp;multiple=true&amp;filter=1">
                <input type="hidden" name="token" value="bad17ad8233993e9700e851acbb3d6e915070e19">

                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th width="20">
                                        <input type="checkbox" class="form-check-input" id="checkall0">
                                    </th>
                                    <th>ID</th>
                                    <th>Product/Service</th>
                                    <th>Domain</th>
                                    <th>Client Name</th>
                                    <th>Price</th>
                                    <th>Billing Cycle</th>
                                    <th>Next Due Date</th>
                                    <th>Status</th>
                                    <th width="50">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $p)

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="selectedclients[]" value="{{ $p['id'] }}" class="form-check-input">
                                        </td>

                                        <td>
                                            <a href="/admin/clientsservices.php?userid={{ $p['clientid'] }}&id={{ $p['id'] }}">
                                                {{ $p['id'] }}
                                            </a>
                                        </td>

                                        <td>
                                            {{ $p['product_details']['name'] ?? $p['name'] }}
                                        </td>

                                        <td>
                                            <a href="/admin/clientsservices.php?userid={{ $p['clientid'] }}&id={{ $p['id'] }}">
                                                {{ $p['domain'] }}
                                            </a>

                                            @if(!empty($p['domain']))
                                            <a href="https://{{ $p['domain'] }}" target="_blank" class="text-danger small ms-1">
                                                www
                                            </a>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="/admin/clientssummary.php?userid={{ $p['clientid'] }}">
                                                Client #{{ $p['clientid'] }}
                                            </a>
                                        </td>

                                        <td>
                                            ${{ number_format($p['firstpaymentamount'],2) }} USD
                                        </td>

                                        <td>
                                            {{ $p['billingcycle'] }}
                                        </td>

                                        <td>
                                            {{ $p['nextduedate'] != '0000-00-00' ? $p['nextduedate'] : '-' }}
                                        </td>

                                        <td>
                                            @if($p['status'] == 'Active')
                                                <span class="badge bg-label-success">Active</span>
                                            @elseif($p['status'] == 'Pending')
                                                <span class="badge bg-label-warning">Pending</span>
                                            @elseif($p['status'] == 'Cancelled')
                                                <span class="badge bg-label-danger">Cancelled</span>
                                            @else
                                                <span class="badge bg-label-secondary">{{ $p['status'] }}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <button class="btn btn-sm btn-icon btn-outline-primary"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#detailRow{{ $p['id'] }}">
                                                <i class="ti ti-chevron-down"></i>
                                            </button>
                                        </td>
                                    </tr>


                                    <tr class="collapse" id="detailRow{{ $p['id'] }}">
                                        <td colspan="10" class="bg-lighter">
                                            <div class="row g-3 p-3">

                                                <div class="col-md-4">
                                                    <strong>Order #:</strong> {{ $p['ordernumber'] ?? '-' }} <br>
                                                    <strong>Registration Date:</strong> {{ $p['regdate'] ?? '-' }}
                                                </div>

                                                <div class="col-md-4">
                                                    <strong>Server:</strong> {{ $p['servername'] ?? '-' }} <br>
                                                    <strong>Dedicated IP:</strong> {{ $p['dedicatedip'] ?: '-' }} <br>
                                                    <strong>Username:</strong> {{ $p['username'] ?: '-' }}
                                                </div>

                                                <div class="col-md-4">
                                                    <strong>Payment Method:</strong> {{ $p['paymentmethodname'] ?? '-' }} <br>
                                                    <strong>Promotion Code:</strong> {{ $p['promoid'] ?: '-' }}
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                                <!-- You can repeat rows dynamically here -->
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body border-top">
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div>
                                With Selected:
                                <button type="submit" class="btn btn-outline-primary btn-sm ms-2">
                                    <i class="ti ti-send me-1"></i> Send Message
                                </button>
                            </div>

                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled">
                                        <span class="page-link">« Previous</span>
                                    </li>
                                    <li class="page-item active">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item disabled">
                                        <span class="page-link">Next »</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- Content wrapper -->
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    function toggleDetailRow(targetId) {
        const detailRow = document.getElementById(targetId);
        if (!detailRow) return;

        const mainRow = document.querySelector(`tr.domain-main-row[data-target="${targetId}"]`);
        const button = document.querySelector(`.toggle-detail-btn[data-target="${targetId}"] i`);

        const isHidden = detailRow.classList.contains('d-none');

        if (isHidden) {
            detailRow.classList.remove('d-none');
            if (button) {
                button.classList.remove('ti-plus');
                button.classList.add('ti-minus');
            }
            if (mainRow) {
                mainRow.classList.add('table-active');
            }
        } else {
            detailRow.classList.add('d-none');
            if (button) {
                button.classList.remove('ti-minus');
                button.classList.add('ti-plus');
            }
            if (mainRow) {
                mainRow.classList.remove('table-active');
            }
        }
    }

    document.querySelectorAll('.toggle-detail-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            toggleDetailRow(this.dataset.target);
        });
    });

    document.querySelectorAll('.domain-status-toggle').forEach(status => {
        status.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            toggleDetailRow(this.dataset.target);
        });
    });

    document.getElementById('checkall0')?.addEventListener('change', function () {
        document.querySelectorAll('.row-check').forEach(item => {
            item.checked = this.checked;
        });
    });

});
</script>

@endpush
