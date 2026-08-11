@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Content Header / Page Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold py-3 mb-0">
                <span class="text-muted fw-light">Dashboard /</span> Country
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mb-0">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Country</li>
                </ol>
            </nav>
        </div>

        <div class="row g-4">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <h5 class="card-title mb-0">Country List</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CountryAddModal">
                            <i class="icon-base ti tabler-plus me-1"></i> Add Country
                        </button>
                    </div>

                    <div class="table-responsive text-nowrap">
                        <table id="countryTable" class="table table-hover table-striped dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($countries as $country)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><span class="fw-medium">{{ $country->name }}</span></td>
                                        <td>
                                            <form action="{{ route('admin.country.destroy', $country) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-text-secondary rounded-pill btn-sm waves-effect waves-light" data-bs-toggle="tooltip" title="Delete">
                                                    <i class="icon-base ti tabler-trash icon-md"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <h5 class="card-title mb-0">City List</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CityAddModal">
                            <i class="icon-base ti tabler-plus me-1"></i> Add City
                        </button>
                    </div>

                    <div class="table-responsive text-nowrap">
                        <table id="cityTable" class="table table-hover table-striped dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($cities as $city)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><span class="fw-medium">{{ $city->name }}</span></td>
                                        <td>{{ $city->country->name ?? 'N/A' }}</td>
                                        <td>
                                            <form action="{{ route('admin.city.destroy', $city) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-text-secondary rounded-pill btn-sm waves-effect waves-light" data-bs-toggle="tooltip" title="Delete">
                                                    <i class="icon-base ti tabler-trash icon-md"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal: Add Country -->
<div class="modal fade" id="CountryAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title">Create New Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.country.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="country_name" class="form-label">Country Name</label>
                            <input type="text" class="form-control" name="country_name" id="country_name" placeholder="Enter Country Name" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter Nationality">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="country_flag" class="form-label">Country Flag</label>
                            <input type="file" class="form-control" name="flag" id="country_flag">
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Country</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal: Add City -->
<div class="modal fade" id="CityAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title">Create New City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.city.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="city_name" class="form-label">City Name</label>
                            <input type="text" class="form-control" name="city_name" id="city_name" placeholder="Enter City Name" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="country_id" class="form-label">Country</label>
                            <select class="form-select" name="country_id" id="country_id" required>
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save City</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (document.querySelector('#countryTable')) {
            new DataTable('#countryTable', {
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
                autoWidth: false,
            });
        }

        if (document.querySelector('#cityTable')) {
            new DataTable('#cityTable', {
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
                autoWidth: false,
            });
        }
    });
</script>
@endpush
@endsection
