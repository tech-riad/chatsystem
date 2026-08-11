@extends('backend.layouts.app')
@push('styles')
<style>
    /* ===== CRITICAL FIX: Prevent content from going behind menu ===== */
    .layout-page {
      margin-left: 0 !important;
      padding-left: 0 !important;
      width: 100% !important;
      position: relative !important;
    }

    .content-wrapper {
      width: 100% !important;
      overflow-x: hidden !important;
    }

    .container-p-y {
      width: 100% !important;
      max-width: 100% !important;
      padding-left: 1.5rem !important;
      padding-right: 1.5rem !important;
      box-sizing: border-box !important;
    }

    /* Fix for all screen sizes */
    @media (min-width: 1200px) {
      .layout-menu-fixed .layout-page {
        padding-left: 16.25rem !important; /* match menu width */
      }
    }

    @media (max-width: 1199.98px) {
      .layout-menu-fixed .layout-page {
        padding-left: 0 !important;
      }

      /* Ensure menu doesn't push content */
      .layout-menu {
        z-index: 1080 !important;
      }
    }

    /* ===== WHMCS FIELD STYLES ===== */
    .fieldlabel {
      background-color: #f8f9fa;
      font-weight: 600;
      padding: 0.75rem 1rem;
      vertical-align: middle;
      width: 20%;
      border: 1px solid #e9ecef;
    }
    .fieldarea {
      background-color: #ffffff;
      padding: 0.5rem 1rem;
      vertical-align: middle;
      border: 1px solid #e9ecef;
    }
    .service-field-inline {
      display: inline-block;
      margin-right: 8px;
    }
    .font-mouse {
      font-size: 0.85rem;
      color: #6c757d;
    }
    .input-100, .input-200, .input-300, .input-400 {
      max-width: 100%;
    }
    .input-200 { width: 200px; }
    .input-300 { width: 280px; }
    .input-400 { width: 380px; }

    /* date picker icon */
    .date-picker-prepend-icon { position: relative; }
    .field-icon { position: absolute; left: 8px; top: 8px; z-index: 3; color: #a1a5b7; }
    #inputRegdate, #inputNextduedate, #inputTermination_date, #inputOverideSuspendUntil { padding-left: 30px; }

    .addons-service-table { overflow-x: auto; }
    .tablebg .datatable { background: white; }

    /* ===== FULLY RESPONSIVE FIXES FOR ALL DEVICES ===== */
    /* Extra small devices (phones, < 576px) */
    @media screen and (max-width: 575.98px) {
      .container-p-y {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
      }

      .card-body {
        padding: 1rem !important;
      }

      /* make table elements block level */
      .form, .form tbody, .form tr, .form td {
        display: block;
        width: 100% !important;
        box-sizing: border-box;
      }
      .form td {
        padding: 0.5rem 0.5rem;
        border: none;
        border-bottom: 1px solid #e9ecef;
      }
      .form td.fieldlabel {
        background-color: #f1f3f5;
        font-weight: 700;
        border-bottom: 1px solid #dee2e6;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }
      .form td.fieldarea {
        background-color: #ffffff;
        border-bottom: 2px solid #e9ecef;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }
      .form tr {
        margin-bottom: 0.5rem;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        overflow: hidden;
      }
      /* input fields full width */
      .form-control, .input-group, .input-200, .input-300, .input-400 {
        width: 100% !important;
        max-width: 100% !important;
      }
      .input-group {
        display: flex;
        flex-wrap: wrap;
      }
      .input-group .form-control {
        width: calc(100% - 45px) !important;
        flex: 1 1 auto;
      }
      .input-group-btn {
        width: auto;
        flex: 0 0 auto;
      }
      /* inline elements stack */
      .service-field-inline {
        display: block;
        margin-right: 0;
        margin-bottom: 8px;
      }
      .btn-container {
        text-align: center;
      }
      /* module buttons stack */
      #modcmdbtns .btn {
        display: inline-block;
        width: calc(50% - 6px);
        margin-right: 0;
        margin-bottom: 6px;
        white-space: normal;
        font-size: 0.85rem;
        padding: 0.375rem 0.5rem;
      }
      #modcmdbtns .btn:nth-child(odd) {
        margin-right: 4px;
      }
      /* domain group fix */
      .dropdown-menu {
        position: absolute !important;
        transform: translate3d(0, 35px, 0) !important;
        min-width: 120px !important;
      }
      h4 {
        font-size: 1.25rem;
      }
    }

    /* Small devices (landscape phones, 576px - 767px) */
    @media screen and (min-width: 576px) and (max-width: 767.98px) {
      .container-p-y {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }

      .form, .form tbody, .form tr, .form td {
        display: block;
        width: 100% !important;
      }
      .form td.fieldlabel {
        background-color: #f1f3f5;
      }
      .input-200, .input-300, .input-400 {
        width: 100% !important;
        max-width: 100% !important;
      }
      #modcmdbtns .btn {
        margin-bottom: 5px;
        width: auto;
        min-width: 120px;
      }
    }

    /* Medium devices (tablets, 768px - 991px) */
    @media screen and (min-width: 768px) and (max-width: 991.98px) {
      .input-300, .input-400 {
        width: 100% !important;
        max-width: 100% !important;
      }
      .fieldlabel, .fieldarea {
        padding: 0.5rem;
        font-size: 0.9rem;
      }
      .form-control {
        font-size: 0.9rem;
      }
    }

    /* Large devices (desktops, 992px - 1199px) */
    @media screen and (min-width: 992px) and (max-width: 1199.98px) {
      .fieldlabel {
        width: 25% !important;
      }
      .fieldarea {
        width: 25% !important;
      }
    }

    /* module command buttons base */
    #modcmdbtns .btn {
      margin-right: 4px;
      margin-bottom: 4px;
    }

    /* modal header same as original */
    .modal-header { background-color: #f8f9fa; }
    .panel-primary { border-color: #e9ecef; }

    /* fix for very large screens */
    @media (min-width: 1400px) {
      .container-xxl {
        max-width: 1320px;
        margin-left: auto;
        margin-right: auto;
      }
    }

    /* ensure no overflow */
    .card {
      overflow-x: auto;
      overflow-y: visible;
    }

    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  </style>

@endpush

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
                <div class="container-xxl flex-grow-1 container-p-y">

                    <!-- ========== WHMCS PRODUCT MANAGE ========== -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Manage Product/Service</h4>
                            <div>
                                <a href="{{ route('admin.users.products',['clientId'=>$latestProduct['clientid']]) }}" class="btn btn-outline-secondary me-2">
                                    <i class="ti ti-arrow-left me-1"></i> Back to List
                                </a>

                            </div>
                        </div>
                        <div class="card-body">
                            <!-- main form -->
                            <form method="post" action="{{ route('admin.users.product.update',['clientid'=>$latestProduct['clientid'], 'productid'=>$latestProduct['id']]) }}">
                                @csrf

                                <input type="hidden" name="serviceid" value="{{ $latestProduct['id'] }}">
                                <input type="hidden" name="clientid" value="{{ $latestProduct['clientid'] }}">

                                <table class="form" width="100%" border="0" cellspacing="2" cellpadding="3">

                                    <!-- row 1 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Order #</td>
                                        <td class="fieldarea" width="30%">
                                            {{ $latestProduct['orderid'] ?? 7 }} - <a href="#">View Order</a>
                                        </td>
                                        <td class="fieldlabel" width="20%">Registration Date</td>
                                        <td class="fieldarea" width="30%">
                                            <div class="form-group date-picker-prepend-icon">
                                                <label for="inputRegdate" class="field-icon">
                                                    <i class="fal fa-calendar-alt"></i>
                                                </label>
                                                <input type="date" name="regdate"
                                                    value="{{ $latestProduct['regdate'] ?? '2026-02-17' }}" size="12"
                                                    class="form-control date-picker-single" id="inputRegdate" />
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 2 -->
                                    <tr>
                                        <td class="fieldlabel" rowspan="2" width="20%">Product/Service</td>
                                        <td class="fieldarea" width="30%" rowspan="2">
                                            <input type="hidden" name="oldpackageid"
                                                value="{{ $latestProduct['pid'] ?? '' }}" />

                                            <select name="pid[]" id="pid0" class="form-control select-inline-long pid"
                                                onchange="loadproductoptions(this)">
                                                <option value="">None</option>

                                                @foreach($mainproducts as $group => $items)
                                                <optgroup label="{{ $group }}">
                                                    @foreach($items as $p)
                                                    <option value="{{ $p['pid'] }}" @selected(($p['pid'] ??
                                                        null)==($latestProduct['pid'] ?? null))>
                                                        {{ $p['name'] }}
                                                    </option>
                                                    @endforeach
                                                </optgroup>
                                                @endforeach
                                            </select>
                                        </td>

                                        <td class="fieldlabel" width="20%">Quantity</td>
                                        <td class="fieldarea" width="30%">
                                            <input type="hidden" name="qty" value="{{ $latestProduct['qty'] ?? 1 }}" />
                                            <input type="number" name="qty" value="{{ $latestProduct['qty'] ?? 1 }}"
                                                size="30" disabled="disabled" class="form-control input-100"
                                                id="inputQty" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fieldlabel" width="20%">First Payment Amount</td>
                                        <td class="fieldarea" width="30%">
                                            <input type="text" name="firstpaymentamount"
                                                value="{{ $latestProduct['firstpaymentamount'] ?? '1.00' }}" size="20"
                                                class="form-control input-100" id="inputFirstpaymentamount" />
                                        </td>
                                    </tr>

                                    <!-- row 3 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Server</td>
                                        <td class="fieldarea" width="30%">
                                            <select name="server" onchange="submitServiceChange()"
                                                class="form-control select-inline">
                                                <option value="0" @selected(($latestProduct['serverid'] ?? 0)==0)>
                                                    None
                                                </option>

                                                {{-- যদি তোমার servers list থাকে, এখানে loop করে option add করবে --}}
                                                {{-- Example:
                                    @foreach($servers as $srv)
                                        <option value="{{ $srv['id'] }}" @selected(($latestProduct['serverid'] ?? 0) ==
                                                $srv['id'])>
                                                {{ $srv['name'] }}
                                                </option>
                                                @endforeach
                                                --}}
                                            </select>

                                            {{-- server name show (UI change না করে small text) --}}
                                            @if(!empty($latestProduct['servername']))
                                            <div class="text-muted small mt-1">Current:
                                                {{ $latestProduct['servername'] }}</div>
                                            @endif
                                        </td>

                                        <td class="fieldlabel" width="20%">Recurring Amount</td>
                                        <td class="fieldarea" width="30%">
                                            <div style="width: 100%">
                                                <div class="service-field-inline">
                                                    <input type="text" name="recurringamount"
                                                        value="{{ $latestProduct['recurringamount'] ?? '0.00' }}"
                                                        size="20" class="form-control input-100" id="inputAmount" />
                                                </div>
                                                <div class="service-field-inline">
                                                    <div class="font-mouse">Recalculate on Save</div>
                                                    <div>
                                                        <input type="checkbox" class="slide-toggle auto-recalc-checkbox"
                                                            id="inputAutorecalc" name="autorecalc" data-size="mini"
                                                            data-on-text="Yes" data-on-color="info"
                                                            data-off-text="No" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 4 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Domain</td>
                                        <td class="fieldarea" width="30%">
                                            <div class="input-group input-300">
                                                <input type="text" name="domain"
                                                    value="{{ $latestProduct['domain'] ?? 'abcgmail.com' }}"
                                                    class="form-control">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown"></button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://{{ $latestProduct['domain'] ?? '' }}"
                                                            target="_blank">www</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="https://who.is/" target="_blank"
                                                           >whois</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://intodns.com/{{ $latestProduct['domain'] ?? '' }}"
                                                            target="_blank">intoDNS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        <td class="fieldlabel" width="20%">Next Due Date</td>
                                        <td class="fieldarea" width="30%">
                                            <input type="hidden" name="oldnextduedate"
                                                value="{{ $latestProduct['nextduedate'] ?? '' }}" />
                                            <div class="form-group date-picker-prepend-icon">
                                                <label for="inputNextduedate" class="field-icon">
                                                    <i class="fal fa-calendar-alt"></i>
                                                </label>
                                                <input type="text" name="nextduedate"
                                                    value="{{ $latestProduct['nextduedate'] ?? '2026-02-17' }}"
                                                    size="12" class="form-control date-picker-single future"
                                                    id="inputNextduedate" />
                                            </div>
                                            <span id="notAvailableSpan">N/A</span>
                                        </td>
                                    </tr>

                                    <!-- row 5 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Dedicated IP</td>
                                        <td class="fieldarea" width="30%">
                                            <input type="text" name="dedicatedip"
                                                value="{{ $latestProduct['dedicatedip'] ?? '' }}" size="25"
                                                class="form-control input-200" id="inputDedicatedip" />
                                        </td>

                                        <td class="fieldlabel" width="20%">Termination Date</td>
                                        <td class="fieldarea" width="30%">
                                            <div class="form-group date-picker-prepend-icon">
                                                <label for="inputTermination_date" class="field-icon">
                                                    <i class="fal fa-calendar-alt"></i>
                                                </label>
                                                <input type="text" name="termination_date"
                                                    value="{{ $latestProduct['termination_date'] ?? '' }}" size="12"
                                                    class="form-control date-picker-single"
                                                    id="inputTermination_date" />
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 6 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Username</td>
                                        <td class="fieldarea" width="30%">
                                            <input type="text" name="username"
                                                value="{{ $latestProduct['username'] ?? '' }}" size="20"
                                                class="form-control input-200 input-inline" id="inputUsername" />
                                        </td>

                                        <td class="fieldlabel" width="20%">Billing Cycle</td>
                                        <td class="fieldarea" width="30%">
                                            <select name="billingcycle" class="form-control select-line">
                                                @foreach([
                                                'Free Account'=>'Free',
                                                'One Time'=>'One Time',
                                                'Monthly'=>'Monthly',
                                                'Quarterly'=>'Quarterly',
                                                'Semi-Annually'=>'Semi-Annually',
                                                'Annually'=>'Annually',
                                                'Biennially'=>'Biennially',
                                                'Triennially'=>'Triennially',
                                                ] as $val => $label)
                                                <option value="{{ $val }}" @selected(($latestProduct['billingcycle']
                                                    ?? '' )==$val)>
                                                    {{ $label }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>

                                    <!-- row 7 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Password</td>
                                        <td class="fieldarea" width="30%">
                                            <input type="text" name="password"
                                                value="{{ $latestProduct['password'] ?? '' }}" size="20"
                                                class="form-control input-200" id="inputPassword" />
                                        </td>

                                        <td class="fieldlabel" width="20%">Payment Method</td>
                                        <td class="fieldarea" width="30%">
                                            <select name="paymentmethod" class="form-control select-inline">
                                                @foreach($paymethodMethods as $m)
                                                @php $val = $m['module'] ?? $m['displayname']; @endphp
                                                <option value="{{ $val }}" @selected(($latestProduct['paymentmethod']
                                                    ?? '' )==$val)>
                                                    {{ $m['displayname'] ?? $val }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>

                                    <!-- row 8 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Status</td>
                                        <td class="fieldarea" width="30%">
                                            <select name="status" class="form-control select-inline" id="prodstatus">
                                                @foreach(['Pending','Active','Completed','Suspended','Terminated','Cancelled','Fraud']
                                                as $st)
                                                <option value="{{ $st }}" @selected(($latestProduct['status'] ?? ''
                                                    )==$st)>
                                                    {{ $st }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </td>

                                        <td class="fieldlabel" width="20%">
                                            Promotion Code
                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                title="Change will not affect price"><i
                                                    class="fa fa-info-circle"></i></a><br />
                                        </td>
                                        <td class="fieldarea" width="30%">
                                            <div id="nonApplicablePromoWarning" class="alert alert-info text-center"
                                                style="display: none;">
                                                The promotion code that you selected is not usually applicable to this
                                                service.
                                            </div>
                                            <div style="max-width:300px" class="form-field-width-container">
                                                <select name="promoid"
                                                    class="form-control select-inline selectize-promo" id="promoid">
                                                    <option value="0" @selected((int)($latestProduct['promoid'] ??
                                                        0)===0)>None</option>

                                                    {{-- promo list থাকলে এখানে loop --}}
                                                    {{-- Example:
                                        @foreach($promos as $promo)
                                          <option value="{{ $promo['id'] }}" @selected((int)($latestProduct['promoid']
                                                    ?? 0) === (int)$promo['id'])>
                                                    {{ $promo['code'] }}
                                                    </option>
                                                    @endforeach
                                                    --}}
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 9 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Module Commands</td>
                                        <td class="fieldarea" colspan="3">
                                            <div id="modcmdbtns">
                                                <button type="button" class="btn btn-default"
                                                    onclick="jQuery('#modalModuleCreate').modal('show');"
                                                    id="btnCreate">Create</button>
                                                <button type="button" class="btn btn-default"
                                                    onclick="jQuery('#modalModuleSuspend').modal('show');"
                                                    id="btnSuspend">Suspend</button>
                                                <button type="button" class="btn btn-default"
                                                    onclick="jQuery('#modalModuleUnsuspend').modal('show');"
                                                    id="btnUnsuspend">Unsuspend</button>
                                                <button type="button" class="btn btn-default"
                                                    onclick="jQuery('#modalModuleTerminate').modal('show');"
                                                    id="btnTerminate">Terminate</button>
                                                <button type="button" class="btn btn-default"
                                                    onclick="jQuery('#modalModuleChangePackage').modal('show');"
                                                    id="btnChange_Package">Change Package</button>
                                                <button type="button" class="btn btn-default"
                                                    onclick="runModuleCommand('changepw')"
                                                    id="btnChange_Password">Change Password</button>
                                            </div>
                                            <div id="modcmdworking" style="display:none;text-align:center;">
                                                <img src="images/loader.gif" /> &nbsp; Working...
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 10 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Addons</td>
                                        <td class="fieldarea" colspan="3">
                                            <div class="addons-service-table">
                                                <div class="tablebg">
                                                    <table id="sortabletbl1" class="datatable" width="100%" border="0"
                                                        cellspacing="1" cellpadding="3">
                                                        <tr>
                                                            <th>Reg Date</th>
                                                            <th>Name</th>
                                                            <th>Pricing</th>
                                                            <th>Status</th>
                                                            <th>Next Due Date</th>
                                                            <th width="20"></th>
                                                            <th width="20"></th>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">No Records Found</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 11 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Subscription ID</td>
                                        <td class="fieldarea" colspan="3">
                                            <div id="subscription">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <input type="text" name="subscriptionid"
                                                            value="{{ $latestProduct['subscriptionid'] ?? '' }}"
                                                            size="25" class="form-control" id="inputSubscriptionid" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="subscriptionworking" style="display:none;text-align:center;">
                                                <img src="images/loader.gif" />&nbsp; Working...
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 12 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Override Auto-Suspend</td>
                                        <td class="fieldarea" colspan="3">
                                            <div class="form-group date-picker-prepend-icon">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="overideautosuspend" value="1"
                                                        @checked((int)($latestProduct['overideautosuspend'] ??
                                                        0)===1) />
                                                    Do not suspend until
                                                </label>
                                                &nbsp;
                                                <label for="inputOverideSuspendUntil" class="field-icon">
                                                    <i class="fal fa-calendar-alt"></i>
                                                </label>
                                                <input type="date" name="overidesuspenduntil"
                                                    value="{{ $latestProduct['overidesuspenduntil'] ?? '0000-00-00' }}"
                                                    class="form-control input-inline date-picker-single future"
                                                    id="inputOverideSuspendUntil" />
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- row 13 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Auto-Terminate End of Cycle</td>
                                        <td class="fieldarea" colspan="3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="autoterminateendcycle" value="1"
                                                    @checked((int)($latestProduct['autoterminateendcycle'] ?? 0)===1) />
                                                Reason
                                            </label>
                                            <input type="text" name="autoterminatereason"
                                                value="{{ $latestProduct['autoterminatereason'] ?? '' }}" size="60"
                                                class="form-control input-inline input-400"
                                                id="inputAutoterminatereason" />
                                        </td>
                                    </tr>

                                    <!-- row 14 -->
                                    <tr>
                                        <td class="fieldlabel" width="20%">Admin Notes</td>
                                        <td class="fieldarea" colspan="3">
                                            <textarea name="notes" rows="4" style="width:100%"
                                                class="form-control">{{ $latestProduct['notes'] ?? '' }}</textarea>
                                        </td>
                                    </tr>
                                </table>

                                <!-- buttons -->
                                <div class="btn-container">
                                    <input type="submit" value="Save Changes" class="btn btn-primary" />
                                    <input type="reset" value="Cancel Changes" class="btn btn-default" />
                                </div>
                            </form>

                            <!-- hidden whois form -->

                        </div>
                    </div>

                    <!-- MODALS (unchanged) -->
                    <div class="modal fade" id="modalModuleCreate" tabindex="-1" role="dialog"
                        aria-labelledby="ModuleCreateLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content panel panel-primary">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close"
                                        data-dismiss="modal"><span>&times;</span></button>
                                    <h4 class="modal-title">Confirm Module Command</h4>
                                </div>
                                <div class="modal-body">Are you sure you want to run the create function?</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        onclick='runModuleCommand("create")'>Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalModuleSuspend" tabindex="-1" role="dialog"
                        aria-labelledby="ModuleSuspendLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content panel panel-primary">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close"
                                        data-dismiss="modal"><span>&times;</span></button>
                                    <h4 class="modal-title">Confirm Module Command</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to run the suspend function?<br />
                                    <div class="margin-top-bottom-20 text-center">
                                        Suspension Reason:
                                        <input type="text" id="suspreason" class="form-control input-inline input-300"
                                            value="{{ $latestProduct['suspensionreason'] ?? '' }}" />
                                        <br /><br />
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="suspemail" /> Send Suspension Email
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        onclick='runModuleCommand("suspend")'>Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalModuleUnsuspend" tabindex="-1" role="dialog"
                        aria-labelledby="ModuleUnsuspendLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content panel panel-primary">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close"
                                        data-dismiss="modal"><span>&times;</span></button>
                                    <h4 class="modal-title">Confirm Module Command</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to run the unsuspend function?<br />
                                    <div class="margin-top-bottom-20 text-center">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="unsuspended_email" /> Send Unsuspension Email
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        onclick='runModuleCommand("unsuspend")'>Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalModuleTerminate" tabindex="-1" role="dialog"
                        aria-labelledby="ModuleTerminateLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content panel panel-primary">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close"
                                        data-dismiss="modal"><span>&times;</span></button>
                                    <h4 class="modal-title">Confirm Module Command</h4>
                                </div>
                                <div class="modal-body">Are you sure you want to run the terminate function?</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        onclick='runModuleCommand("terminate")'>Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalModuleChangePackage" tabindex="-1" role="dialog"
                        aria-labelledby="ModuleChangePackageLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content panel panel-primary">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close"
                                        data-dismiss="modal"><span>&times;</span></button>
                                    <h4 class="modal-title">Confirm Module Command</h4>
                                </div>
                                <div class="modal-body">Are you sure you want to run the change package function?</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        onclick='runModuleCommand("changepackage")'>Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content panel panel-primary">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close"
                                        data-dismiss="modal"><span>&times;</span></button>
                                    <h4 class="modal-title">Delete Product/Service</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this service? This will also remove any associated
                                    addons
                                    but not run the module terminate function.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>


@endsection

@push('scripts')
<script>
    function submitServiceChange() {
        console.log('service change');
    }

    function runModuleCommand(cmd) {
        alert('Module command: ' + cmd);
        $('#modalModuleCreate').modal('hide');
    }
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

@endpush
