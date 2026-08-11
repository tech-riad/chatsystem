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
                                    <img src="../../assets/img/pages/profile-banner.png" alt="Banner image"
                                        class="rounded-top" />
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

                    <!-- User Profile Content -->
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="context-btn-container">
                                        <div class="text-left">
                                            <form action="{{ route('admin.users.contact', $client['id']) }}"
                                                method="get">
                                                <input type="hidden" name="userid" value="{{ $client['id'] }}">

                                                Contacts:
                                                <select name="contactid" onchange="this.form.submit()"
                                                    class="form-control select-inline">
                                                    <option value="addnew"
                                                        {{ ($selectedContactId === 'addnew') ? 'selected' : '' }}>
                                                        Add New
                                                    </option>

                                                    @foreach ($contacts as $item)
                                                    @php $cid = (int)($item['id'] ?? $item['contactid'] ?? 0); @endphp
                                                    <option value="{{ $cid }}"
                                                        {{ ((string)$selectedContactId === (string)$cid) ? 'selected' : '' }}>
                                                        {{ $item['firstname'] }} {{ $item['lastname'] }} -
                                                        {{ $item['email'] }}
                                                    </option>
                                                    @endforeach
                                                </select>

                                                <noscript>
                                                    <input type="submit" value="Go" class="btn btn-default" />
                                                </noscript>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Activity Timeline -->
                            <form method="POST"
                                action="{{ route('admin.users.contact.update', [$client['id'], $selectedContact['id'] ?? 0]) }}"
                                class="needs-validation">
                                @csrf
                                {{-- @method('POST') --}}

                                {{-- Personal Information Card --}}
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">
                                            <i class="ti ti-user me-2"></i>Personal Information
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label class="form-label" for="firstname">First Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('firstname') is-invalid @enderror"
                                                    id="firstname" name="firstname"
                                                    value="{{ old('firstname', $selectedContact['firstname'] ?? '') }}"
                                                    placeholder="Enter first name" required>


                                                @error('firstname')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="lastname">Last Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('lastname') is-invalid @enderror"
                                                    id="lastname" name="lastname"
                                                    value="{{ old('lastname', $selectedContact['lastname'] ?? '') }}"
                                                    placeholder="Enter last name" required>

                                                @error('lastname')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="companyname">Company Name</label>
                                                <input type="text"
                                                    class="form-control @error('companyname') is-invalid @enderror"
                                                    id="companyname" name="companyname"
                                                    value="{{ old('companyname', $selectedContact['companyname'] ?? '') }}"
                                                    placeholder="Enter companyname name (optional)">
                                                @error('companyname')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="email">Email Address <span
                                                        class="text-danger">*</span></label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email"
                                                    value="{{ old('email', $selectedContact['email'] ?? '') }}"
                                                    placeholder="Enter email address" required>
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="phone">Phone <span
                                                        class="text-danger">*</span></label>
                                                <input type="tel"
                                                    class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                    name="phone"
                                                    value="{{ old('phone', $selectedContact['phonenumber'] ?? '') }}"
                                                    placeholder="Enter phone number" required>
                                                @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- Address Information Card --}}
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">
                                            <i class="ti ti-map-pin me-2"></i>Address Information
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="address1">Address Line 1 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('address1') is-invalid @enderror"
                                                    id="address1" name="address1"
                                                    value="{{ old('address1', $selectedContact['address1'] ?? '') }}"
                                                    placeholder="Street address, P.O. box" required>
                                                @error('address1')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="address2">Address Line 2</label>
                                                <input type="text"
                                                    class="form-control @error('address2') is-invalid @enderror"
                                                    id="address2" name="address2"
                                                    value="{{ old('address2', $selectedContact['address2'] ?? '') }}"
                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                @error('address2')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="city">City <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('city') is-invalid @enderror" id="city"
                                                    name="city"
                                                    value="{{ old('city', $selectedContact['city'] ?? '') }}"
                                                    placeholder="Enter city" required>
                                                @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="state">State/Region <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('state') is-invalid @enderror" id="state"
                                                    name="state"
                                                    value="{{ old('state', $selectedContact['state'] ?? '') }}"
                                                    placeholder="Enter state or region" required>
                                                @error('state')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label class="form-label" for="postcode">Postal Code <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('postcode') is-invalid @enderror"
                                                    id="postcode" name="postcode"
                                                    value="{{ old('postcode', $selectedContact['postcode'] ?? '') }}"
                                                    placeholder="Enter postal code" required>
                                                @error('postcode')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="country">Country <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select @error('country') is-invalid @enderror"
                                                    id="country" name="country" required>
                                                    <option value="">Select Country</option>
                                                    <option value="US"
                                                        {{ old('country', $selectedContact['country'] ?? '') == 'US' ? 'selected' : '' }}>
                                                        United States</option>
                                                    <option value="GB"
                                                        {{ old('country', $selectedContact['country'] ?? '') == 'GB' ? 'selected' : '' }}>
                                                        United Kingdom</option>
                                                    <option value="CA"
                                                        {{ old('country', $selectedContact['country'] ?? '') == 'CA' ? 'selected' : '' }}>
                                                        Canada</option>
                                                    <option value="AU"
                                                        {{ old('country', $selectedContact['country'] ?? '') == 'AU' ? 'selected' : '' }}>
                                                        Australia</option>
                                                    <option value="BD"
                                                        {{ old('country', $selectedContact['country'] ?? '') == 'BD' ? 'selected' : '' }}>
                                                        Bangladesh</option>
                                                    {{-- Add more countries as needed --}}
                                                </select>
                                                @error('country')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            {{-- <div class="col-md-6">
                                                <label class="form-label" for="tax_id">Tax ID/VAT Number</label>
                                                <input type="text"
                                                    class="form-control @error('tax_id') is-invalid @enderror"
                                                    id="tax_id" name="tax_id"
                                                    value="{{ old('tax_id', $selectedContact['tax_id'] ?? '') }}"
                                            placeholder="Enter tax ID (optional)">
                                            @error('tax_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div> --}}
                                    </div>
                                </div>
                        </div>

                        {{-- Account Settings Card --}}


                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <i class="ti ti-mail me-2"></i>Email Notifications
                                </h5>
                            </div>

                            <div class="card-body">
                                <div class="row g-3">

                                    @php
                                    $emailKeys = [
                                        'generalemails'   => 'General Emails',
                                        'invoiceemails'   => 'Invoice Emails',
                                        'supportemails'   => 'Support Emails',
                                        'productemails'   => 'Product Emails',
                                        'domainemails'    => 'Domain Emails',
                                        'affiliateemails' => 'Affiliate Emails',
                                    ];
                                    @endphp

                                    @foreach($emailKeys as $key => $label)

                                        @php
                                        $defaultChecked = false;
                                        if (old($key) !== null) {
                                            $defaultChecked = in_array(old($key), [1, '1', true, 'true', 'on'], true);
                                        }
                                        elseif (!empty($selectedContact)) {
                                            $defaultChecked = !empty($selectedContact[$key]);
                                        }
                                        elseif (!empty($client)) {
                                            $defaultChecked = !empty($client[$key]);
                                        }
                                        @endphp

                                        <div class="col-md-6 mb-1">
                                            <div class="form-check form-switch">

                                                <input type="hidden" name="{{ $key }}" value="0">

                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    id="email_{{ $key }}"
                                                    name="{{ $key }}"
                                                    value="1"
                                                    {{ $defaultChecked ? 'checked' : '' }}>

                                                <label class="form-check-label" for="email_{{ $key }}">
                                                    {{ $label }}
                                                </label>

                                            </div>
                                        </div>

                                    @endforeach



                                </div>
                            </div>
                        </div>
                        {{-- Form Actions --}}
                        <div class="d-flex justify-content-end gap-2 mb-5">
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-device-floppy me-1"></i> Save Client Contact
                            </button>
                        </div>
                        </form>

                    </div>
                </div>
                <!--/ User Profile Content -->
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
