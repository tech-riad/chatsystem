<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    {{-- <link href="{{ asset('assets/img/favicon/favicon.ico') }}" rel="stylesheet" /> --}}

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <script src="{{ asset('assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!-- Template Customizer -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    @stack('styles')
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])




</head>

<body>


    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            {{-- @include('user.chat.partials.sidebar') --}}

            @yield('content')
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>






    @stack('scripts')

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}">
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    @if (session('success'))
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: @json(session('success')),
        timer: 2000,
        showConfirmButton: false
        });
    });
    </script>
    @endif

    @if ($errors->has('whmcs'))
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
        icon: 'error',
        title: 'Error',
        text: @json($errors->first('whmcs')),
        });
    });
    </script>
    @endif


</body>

</html>
