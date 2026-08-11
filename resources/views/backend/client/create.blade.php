{{-- resources/views/backend/clients/create.blade.php --}}
@extends('backend.layouts.app')

@section('title', 'Add New Client - WHMCS')

@section('content')
<div class="layout-page">
    {{-- @include('backend.layouts.sidebar') --}}

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            {{-- Header Section --}}
            <div class="d-flex justify-content-between align-items-center py-3 mb-4">
                <div>
                    <h4 class="fw-bold mb-0">
                        <span class="text-muted fw-light">Clients /</span> Add New Client
                    </h4>
                    <p class="mb-0 text-muted">Create a new client account in the system</p>
                </div>
                <div>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary me-2">
                        <i class="ti ti-arrow-left me-1"></i> Back to List
                    </a>

                </div>
            </div>

            {{-- Main Form --}}
            <form  method="POST" action="{{ route('admin.users.store') }}" class="needs-validation">
                @csrf

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
                                <label class="form-label" for="firstname">First Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('firstname') is-invalid @enderror"
                                       id="firstname"
                                       name="firstname"
                                       value="{{ old('firstname') }}"
                                       placeholder="Enter first name"
                                       required>
                                @error('firstname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="lastname">Last Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('lastname') is-invalid @enderror"
                                       id="lastname"
                                       name="lastname"
                                       value="{{ old('lastname') }}"
                                       placeholder="Enter last name"
                                       required>
                                @error('lastname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="companyname">Company Name</label>
                                <input type="text"
                                       class="form-control @error('companyname') is-invalid @enderror"
                                       id="companyname"
                                       name="companyname"
                                       value="{{ old('companyname') }}"
                                       placeholder="Enter companyname name (optional)">
                                @error('companyname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="email">Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       id="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="Enter email address"
                                       required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="phone">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       id="phone"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="Enter phone number"
                                       required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           id="password"
                                           name="password"
                                           placeholder="Enter password"
                                           required>
                                    <span class="input-group-text cursor-pointer toggle-password">
                                        <i class="ti ti-eye-off"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="password"
                                           class="form-control"
                                           id="password_confirmation"
                                           name="password_confirmation"
                                           placeholder="Confirm password"
                                           required>
                                    <span class="input-group-text cursor-pointer toggle-password">
                                        <i class="ti ti-eye-off"></i>
                                    </span>
                                </div>
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
                                <label class="form-label" for="address1">Address Line 1 <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('address1') is-invalid @enderror"
                                       id="address1"
                                       name="address1"
                                       value="{{ old('address1') }}"
                                       placeholder="Street address, P.O. box"
                                       required>
                                @error('address1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="address2">Address Line 2</label>
                                <input type="text"
                                       class="form-control @error('address2') is-invalid @enderror"
                                       id="address2"
                                       name="address2"
                                       value="{{ old('address2') }}"
                                       placeholder="Apartment, suite, unit, etc. (optional)">
                                @error('address2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="city">City <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('city') is-invalid @enderror"
                                       id="city"
                                       name="city"
                                       value="{{ old('city') }}"
                                       placeholder="Enter city"
                                       required>
                                @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="state">State/Region <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('state') is-invalid @enderror"
                                       id="state"
                                       name="state"
                                       value="{{ old('state') }}"
                                       placeholder="Enter state or region"
                                       required>
                                @error('state')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="postcode">Postal Code <span class="text-danger">*</span></label>
                                <input type="text"
                                       class="form-control @error('postcode') is-invalid @enderror"
                                       id="postcode"
                                       name="postcode"
                                       value="{{ old('postcode') }}"
                                       placeholder="Enter postal code"
                                       required>
                                @error('postcode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="country">Country <span class="text-danger">*</span></label>
                                <select class="form-select @error('country') is-invalid @enderror"
                                        id="country"
                                        name="country"
                                        required>
                                    <option value="">Select Country</option>
                                    <option value="US" {{ old('country') == 'US' ? 'selected' : '' }}>United States</option>
                                    <option value="GB" {{ old('country') == 'GB' ? 'selected' : '' }}>United Kingdom</option>
                                    <option value="CA" {{ old('country') == 'CA' ? 'selected' : '' }}>Canada</option>
                                    <option value="AU" {{ old('country') == 'AU' ? 'selected' : '' }}>Australia</option>
                                    <option value="BD" {{ old('country') == 'BD' ? 'selected' : '' }}>Bangladesh</option>
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
                                       id="tax_id"
                                       name="tax_id"
                                       value="{{ old('tax_id') }}"
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
                                        id="currency"
                                        name="currency">

                                        @foreach ($currencies as $item)
                                            <option value="{{ $item['code'] }}" {{ old('currency') == $item['code'] ? 'selected' : '' }}>{{ $item['code'] }} ({{ $item['prefix'] }})</option>
                                        @endforeach

                                </select>
                                @error('currency')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="group">Client Group</label>
                                <select class="form-select @error('group') is-invalid @enderror"
                                        id="group"
                                        name="group">
                                    <option value="">Select Group</option>
                                    @foreach ($groups as $item)
                                        <option value="{{ $item['id'] }}" {{ old('group') == $item['id'] ? 'selected' : '' }}>{{ $item['groupname'] }}</option>

                                    @endforeach


                                </select>
                                @error('group')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="status">Account Status</label>
                                <select class="form-select @error('status') is-invalid @enderror"
                                        id="status"
                                        name="status">
                                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                    <option value="Closed" {{ old('status') == 'Closed' ? 'selected' : '' }}>Closed</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="payment_method">Default Payment Method</label>
                                <select class="form-select @error('payment_method') is-invalid @enderror"
                                        id="payment_method"
                                        name="payment_method">
                                    <option value="">Select Payment Method</option>

                                    @foreach ($paymethodMethods as $item)
                                        <option value="{{ $item['displayname'] }}" {{ old('payment_method') == $item['displayname'] ? 'selected' : '' }}>{{ $item['displayname'] }}</option>
                                    @endforeach

                                </select>
                                @error('payment_method')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="send_welcome_email"
                                           name="send_welcome_email"
                                           value="1"
                                           {{ old('send_welcome_email') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="send_welcome_email">
                                        Send welcome email to client with login details
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="email_verification"
                                           name="email_verification"
                                           value="1"
                                           {{ old('email_verification') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="email_verification">
                                        Require email verification
                                    </label>
                                </div>
                            </div>
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
                                <textarea class="form-control @error('notes') is-invalid @enderror"
                                          id="notes"
                                          name="notes"
                                          rows="3"
                                          placeholder="Add any internal notes about this client (optional)">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">These notes are only visible to staff members.</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form Actions --}}
                <div class="d-flex justify-content-end gap-2 mb-5">
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-device-floppy me-1"></i> Save Client
                    </button>

                </div>
            </form>
        </div>

        {{-- Footer --}}
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    © {{ date('Y') }}, WHMCS Clone
                </div>
                <div>
                    <span class="text-muted">Client Management System</span>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Password visibility toggle
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const icon = this.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('ti-eye-off');
                icon.classList.add('ti-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('ti-eye');
                icon.classList.add('ti-eye-off');
            }
        });
    });

    // Form validation
    (function() {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    // Save and continue function
    //

    // Auto-generate password (optional feature)
    function generatePassword() {
        const length = 12;
        const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*";
        let password = "";
        for (let i = 0; i < length; i++) {
            password += charset.charAt(Math.floor(Math.random() * charset.length));
        }
        document.getElementById('password').value = password;
        document.getElementById('password_confirmation').value = password;
    }

    // Add password generator button (optional)
    document.addEventListener('DOMContentLoaded', function() {
        const passwordField = document.getElementById('password').parentElement;
        const generateBtn = document.createElement('button');
        generateBtn.type = 'button';
        generateBtn.className = 'btn btn-outline-secondary btn-sm ms-2';
        generateBtn.innerHTML = '<i class="ti ti-key me-1"></i> Generate';
        generateBtn.onclick = generatePassword;
        passwordField.appendChild(generateBtn);
    });

    // Country select enhancement (optional - you can add Select2 or similar)
    if (typeof $.fn.select2 !== 'undefined') {
        $('#country').select2({
            theme: 'bootstrap-5',
            width: '100%',
            placeholder: 'Select Country'
        });
    }
</script>
@endpush
