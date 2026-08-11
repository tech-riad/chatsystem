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
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="d-flex justify-content-between align-items-center mb-3">

                <h4 class="mb-0">Domain Registrations</h4>

                <button class="btn btn-outline-primary"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#domainSearchFilter"
                    aria-expanded="false">

                    <i class="ti ti-search me-1"></i> Search / Filter

                </button>

            </div>

            <div class="collapse mb-4" id="domainSearchFilter">

                <div class="card">

                    <div class="card-header border-bottom">
                        <h5 class="card-title mb-0">Search / Filter</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{route('admin.domain.search')}}" method="post">
                            @csrf


                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label class="form-label">Domain</label>
                                    <input type="text" name="domain" class="form-control" placeholder="Enter domain name">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="">Any</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Pending Registration">Pending Registration</option>
                                        <option value="Pending Transfer">Pending Transfer</option>
                                        <option value="Active">Active</option>
                                        <option value="Grace">Grace Period (Expired)</option>
                                        <option value="Redemption">Redemption Period (Expired)</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Transferred Away">Transferred Away</option>
                                        <option value="Cancelled">Cancelled</option>
                                        <option value="Fraud">Fraud</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Registrar</label>
                                    <select name="registrar" class="form-select">
                                        <option value="">Any</option>
                                        <option value="none">None</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Client Name</label>
                                    <input type="text" name="clientname" class="form-control"
                                        placeholder="Enter client name">
                                </div>

                            </div>

                            <div class="mt-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-search me-1"></i> Search
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Search / Filter Card -->

            <!-- Records Info -->
            {{-- <div class="card mb-4">
                <div class="card-body">
                    <form id="frmRecordsFound" method="post" action="/admin/index.php?rp=/admin/domains&filter=1">
                        <input type="hidden" name="token" value="e586174072a6d9de2d53944dd45da0f931a4c443">
                        <input type="hidden" name="show_hidden" value="0">
                        <input type="hidden" name="page" value="1">

                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                            <div>
                                <span class="fw-semibold">4 Records Found</span>,
                                <span class="text-muted">Showing 1 to 4</span>
                            </div>

                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" id="checkboxShowHidden" checked>
                                    <label class="form-check-label" for="checkboxShowHidden">
                                        Hide Inactive Clients (1)
                                    </label>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <label class="mb-0">Jump to Page:</label>
                                    <select class="form-select form-select-sm w-auto">
                                        <option selected>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}

            <!-- Domains Table -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Domain List</h5>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th width="20">
                                    <input type="checkbox" class="form-check-input" id="checkall0">
                                </th>
                                <th>ID</th>
                                <th>Domain</th>
                                <th>Client Name</th>
                                <th>Reg Period</th>
                                <th>Registrar</th>
                                <th>Price</th>
                                <th>Next Due Date</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                                <th width="60">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mainDomains as $item)
                                @php
                                    $detailId = 'domain-detail-' . $item['id'];

                                    $statusClass = match(strtolower($item['status'])) {
                                        'active' => 'success',
                                        'pending' => 'warning',
                                        'expired' => 'danger',
                                        'cancelled' => 'secondary',
                                        'fraud' => 'dark',
                                        default => 'primary'
                                    };
                                @endphp

                                {{-- Main Row --}}
                                <tr class="domain-main-row" data-target="{{ $detailId }}">
                                    <td>
                                        <input type="checkbox" name="selectedclients[]" value="{{ $item['id'] }}" class="form-check-input row-check">
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.domain.details', ['clientid' => $item['userid'], 'domainid' => $item['id']]) }}"
                                        class="fw-medium">
                                            {{ $item['id'] }}
                                        </a>
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.users.domains', ['clientid' => $item['userid']]) }}" class="text-primary">
                                            {{ $item['domainname'] }}
                                        </a>
                                    </td>

                                    <td>
                                        <a href="{{route('admin.users.details', ['client_id' => $item['id']])}}">
                                            {{ $item['client'] ['fullname']  }}
                                        </a>
                                    </td>

                                    <td>{{ $item['regperiod'] ?? 0 }} Year</td>

                                    <td>{{ $item['registrar'] ?: '-' }}</td>

                                    <td>${{ number_format((float)($item['recurringamount'] ?? 0), 2) }} USD</td>

                                    <td>
                                        @if(!empty($item['nextduedate']) && $item['nextduedate'] !== '0000-00-00')
                                            {{ \Carbon\Carbon::parse($item['nextduedate'])->format('d/m/Y') }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                    <td>
                                        @if(!empty($item['expirydate']) && $item['expirydate'] !== '0000-00-00')
                                            {{ \Carbon\Carbon::parse($item['expirydate'])->format('d/m/Y') }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                    <td>
                                        <span class="badge bg-label-{{ $statusClass }} domain-status-toggle cursor-pointer"
                                            data-target="{{ $detailId }}"
                                            style="cursor:pointer;">
                                            {{ $item['status'] }}
                                        </span>
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-text-secondary toggle-detail-btn" data-bs-toggle="modal" data-bs-target="#domain_details_{{ $detailId }}">
                                             <i class="ti ti-plus"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-sm btn-icon btn-text-secondary toggle-detail-btn"
                                                data-target="{{ $detailId }}">

                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="domain_details_{{ $detailId }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="domain_details_{{ $detailId }}Label">{{ $item['domainname'] }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-3">
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <div class="border rounded p-3 h-100">
                                                            <h6 class="mb-2">Order Information</h6>
                                                            <div class="small">
                                                                <div class="mb-1">
                                                                    <strong>Order #:</strong>
                                                                    {{ $item['order'] ['ordernum'] ?? '-' }}
                                                                </div>
                                                                <div class="mb-1">
                                                                    <strong>Registration Date:</strong>
                                                                    @if(!empty($item['regdate']) && $item['regdate'] !== '0000-00-00')
                                                                        {{ \Carbon\Carbon::parse($item['regdate'])->format('d/m/Y') }}
                                                                    @else
                                                                        -
                                                                    @endif
                                                                </div>
                                                                <div>
                                                                    <strong>Order Type:</strong>
                                                                    {{ $item['regtype'] ?? '-' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="border rounded p-3 h-100">
                                                            <h6 class="mb-2">Domain Features</h6>
                                                            <div class="small">
                                                                <div class="mb-1">
                                                                    <strong>DNS Management:</strong>
                                                                    {{ !empty($item['dnsmanagement']) ? 'Yes' : 'No' }}
                                                                </div>
                                                                <div class="mb-1">
                                                                    <strong>Email Forwarding:</strong>
                                                                    {{ !empty($item['emailforwarding']) ? 'Yes' : 'No' }}
                                                                </div>
                                                                <div class="mb-1">
                                                                    <strong>ID Protection:</strong>
                                                                    {{ !empty($item['idprotection']) ? 'Yes' : 'No' }}
                                                                </div>
                                                                <div>
                                                                    <strong>Auto Renew:</strong>
                                                                    {{ !empty($item['donotrenew']) ? 'No' : 'Yes' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="border rounded p-3 h-100">
                                                            <h6 class="mb-2">Billing</h6>
                                                            <div class="small">
                                                                <div class="mb-1">
                                                                    <strong>Payment Method:</strong>
                                                                    {{ $item['paymentmethodname'] ?? ($item['paymentmethod'] ?? '-') }}
                                                                </div>
                                                                <div class="mb-1">
                                                                    <strong>First Payment:</strong>
                                                                    ${{ number_format((float)($item['firstpaymentamount'] ?? 0), 2) }} USD
                                                                </div>
                                                                <div class="mb-1">
                                                                    <strong>Recurring Amount:</strong>
                                                                    ${{ number_format((float)($item['recurringamount'] ?? 0), 2) }} USD
                                                                </div>
                                                                <div>
                                                                    <strong>Notes:</strong>
                                                                    {{ $item['notes'] ?: '-' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>


                            @empty
                                <tr>
                                    <td colspan="11" class="text-center text-muted py-4">
                                        No Records Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- / Content -->

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

                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                            class="footer-link me-4">Documentation</a>

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
