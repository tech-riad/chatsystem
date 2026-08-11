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

            {{-- @include('backend.client.nav') --}}

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
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- Activity Timeline -->
                            <form method="POST" action="{{ route('admin.users.update', $client['id']) }}"
                                class="needs-validation">
                                @csrf
                                @method('PUT')

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
                                                    value="{{ old('firstname', $client['firstname']) }}"
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
                                                    value="{{ old('lastname', $client['lastname']) }}"
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
                                                    value="{{ old('companyname', $client['companyname']) }}"
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
                                                    name="email" value="{{ old('email', $client['email']) }}"
                                                    placeholder="Enter email address" required>
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="phone">Phone Number <span
                                                        class="text-danger">*</span></label>
                                                <input type="tel"
                                                    class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                    name="phone" value="{{ old('phone', $client['phonenumber']) }}"
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
                                                    value="{{ old('address1', $client['address1']) }}"
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
                                                    value="{{ old('address2', $client['address2']) }}"
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
                                                    name="city" value="{{ old('city', $client['city']) }}"
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
                                                    name="state" value="{{ old('state', $client['state']) }}"
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
                                                    value="{{ old('postcode', $client['postcode']) }}"
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
                                                        {{ old('country', $client['country']) == 'US' ? 'selected' : '' }}>
                                                        United States</option>
                                                    <option value="GB"
                                                        {{ old('country', $client['country']) == 'GB' ? 'selected' : '' }}>
                                                        United Kingdom</option>
                                                    <option value="CA"
                                                        {{ old('country', $client['country']) == 'CA' ? 'selected' : '' }}>
                                                        Canada</option>
                                                    <option value="AU"
                                                        {{ old('country', $client['country']) == 'AU' ? 'selected' : '' }}>
                                                        Australia</option>
                                                    <option value="BD"
                                                        {{ old('country', $client['country']) == 'BD' ? 'selected' : '' }}>
                                                        Bangladesh</option>
                                                    {{-- Add more countries as needed --}}
                                                </select>
                                                @error('country')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="tax_id">Tax ID/VAT Number</label>
                                                <input type="text"
                                                    class="form-control @error('tax_id') is-invalid @enderror"
                                                    id="tax_id" name="tax_id"
                                                    value="{{ old('tax_id', $client['tax_id']) }}"
                                                    placeholder="Enter tax ID (optional)">
                                                @error('tax_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Account Settings Card --}}
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">
                                            <i class="ti ti-settings me-2"></i>Account Settings
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="currency">Currency</label>
                                                <select class="form-select @error('currency') is-invalid @enderror"
                                                    id="currency" name="currency">

                                                    @foreach ($currencies as $item)
                                                    <option value="{{ $item['id'] }}"
                                                        {{ old('currency', $client['currency']) == $item['id'] ? 'selected' : '' }}>
                                                        {{ $item['code'] }} ({{ $item['prefix'] }})</option>
                                                    @endforeach

                                                </select>
                                                @error('currency')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="group">Client Group</label>
                                                <select class="form-select @error('group') is-invalid @enderror"
                                                    id="group" name="group">
                                                    <option value="">Select Group</option>
                                                    @php $selectedGroup = old('group', $client['groupid'] ?? '');
                                                    @endphp
                                                    @foreach ($groups as $item)
                                                    <option value="{{ $item['id'] }}"
                                                        {{ (string)$selectedGroup === (string)$item['id'] ? 'selected' : '' }}>
                                                        {{ $item['groupname'] }}
                                                    </option>
                                                    @endforeach



                                                </select>
                                                @error('group')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="status">Account Status</label>
                                                <select class="form-select @error('status') is-invalid @enderror"
                                                    id="status" name="status">
                                                    <option value="Active"
                                                        {{ old('status', $client['status']) == 'Active' ? 'selected' : '' }}>
                                                        Active
                                                    </option>
                                                    <option value="Inactive"
                                                        {{ old('status', $client['status']) == 'Inactive' ? 'selected' : '' }}>
                                                        Inactive
                                                    </option>
                                                    <option value="Closed"
                                                        {{ old('status', $client['status']) == 'Closed' ? 'selected' : '' }}>
                                                        Closed
                                                    </option>
                                                </select>
                                                @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">


                                            </div>

                                            {{-- <div class="col-12">
                                                <div class="form-check form-switch mt-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="send_welcome_email" name="send_welcome_email" value="1"
                                                        {{ old('send_welcome_email', $client['send_welcome_email']) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="send_welcome_email">
                                                Send welcome email to client with login details
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="email_verification"
                                                name="email_verification" value="1"
                                                {{ old('email_verification', $client['email_verification']) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="email_verification">
                                                Require email verification
                                            </label>
                                        </div>
                                    </div> --}}
                                </div>
                        </div>
                    </div>
                    @php
                    $prefs = $client['email_preferences'] ?? [];
                    @endphp

                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="ti ti-mail me-2"></i>Email Preferences
                            </h5>
                        </div>

                        <div class="card-body">
                            <div class="row g-3">

                                @php
                                $prefs = $client['email_preferences'] ?? [];
                                @endphp

                                <div class="row">
                                    @foreach(['general','invoice','support','product','domain','affiliate'] as $p)
                                    <div class="col-md-6 mb-1">
                                        <div class="form-check form-switch">
                                            <input type="hidden" name="email_preferences[{{ $p }}]" value="0">

                                            <input class="form-check-input" type="checkbox" id="email_pref_{{ $p }}"
                                                name="email_preferences[{{ $p }}]" value="1"
                                                {{ old("email_preferences.$p", (int)($prefs[$p] ?? 0)) ? 'checked' : '' }}>

                                            <label class="form-check-label" for="email_pref_{{ $p }}">
                                                {{ ucfirst($p) }} Emails
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                    </div>
                    @php
                    $labels = [
                    'latefeeoveride' => 'Late Fees',
                    'overideduenotices' => 'Overdue Notices',
                    'emailoptout' => 'Status Update',

                    'separateinvoices' => 'Separate Invoices',
                    'disableautocc' => 'Disable CC Processing',
                    'allowSingleSignOn' => 'Allow Single Sign-On',
                    'taxexempt' => 'Tax Exempt',
                    'marketing_emails_opt_in'=> 'Marketing Emails Opt-in',
                    ];

                    // এগুলো WHMCS API তে inverse type
                    $inverse = ['latefeeoveride','overideduenotices','emailoptout'];

                    $defaults = [
                    'latefeeoveride' => (bool)($client['latefeeoveride'] ?? false),
                    'overideduenotices' => (bool)($client['overideduenotices'] ?? false),
                    'emailoptout' => (bool)($client['emailoptout'] ?? false),

                    'separateinvoices' => (bool)($client['separateinvoices'] ?? false),
                    'disableautocc' => (bool)($client['disableautocc'] ?? false),
                    'taxexempt' => (bool)($client['taxexempt'] ?? false),
                    'marketing_emails_opt_in' => (bool)($client['marketing_emails_opt_in'] ?? false),
                    'allowSingleSignOn' => (int)($client['allowSingleSignOn'] ?? 0),
                    ];

                    function oldBool($key, $default) {
                    $v = old($key, null);
                    if ($v === null) return (bool)$default;
                    return in_array($v, [1,'1',true,'true','on'], true);
                    }
                    @endphp

                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="ti ti-toggle-left me-2"></i>Settings
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                @foreach($labels as $field => $label)

                                @php
                                $raw = ($field === 'allowSingleSignOn')
                                ? (int) old($field, $defaults[$field])
                                : oldBool($field, $defaults[$field]);

                                $uiChecked = in_array($field, $inverse, true) ? !$raw : (bool)$raw;
                                @endphp

                                <div class="col-md-6">
                                    <div class="form-check form-switch">

                                        {{-- hidden always --}}
                                        @if($field === 'allowSingleSignOn')
                                        <input type="hidden" name="{{ $field }}" value="0">
                                        <input class="form-check-input" type="checkbox" id="toggle_{{ $field }}"
                                            name="{{ $field }}" value="1" {{ $uiChecked ? 'checked' : '' }}>
                                        @else
                                        <input type="hidden" name="{{ $field }}" value="0">
                                        <input class="form-check-input" type="checkbox" id="toggle_{{ $field }}"
                                            name="{{ $field }}" value="1" {{ $uiChecked ? 'checked' : '' }}>
                                        @endif

                                        <label class="form-check-label" for="toggle_{{ $field }}">{{ $label }}</label>
                                    </div>
                                </div>

                                @endforeach
                            </div>


                        </div>
                    </div>




                    {{-- Additional Notes Card --}}
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="ti ti-notes me-2"></i>Additional Notes
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label" for="notes">Internal Notes</label>
                                    <textarea class="form-control @error('notes') is-invalid @enderror" id="notes"
                                        name="notes" rows="3"
                                        placeholder="Add any internal notes about this client (optional)">{{ old('notes', $client['notes']) }}</textarea>
                                    @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">These notes are only visible to staff members.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Form Actions --}}
                    <div class="d-flex justify-content-end gap-2 mb-5">
                        <button type="reset" class="btn btn-outline-secondary">
                            <i class="ti ti-refresh me-1"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i> Save Client
                        </button>
                        <button type="button" class="btn btn-outline-primary" onclick="saveAndContinue()">
                            <i class="ti ti-device-floppy me-1"></i> Save & Add Another
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
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>


@endsection
