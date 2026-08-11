@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold py-3 mb-0">
                <span class="text-muted fw-light">Dashboard /</span> Locations
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mb-0">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Locations</li>
                </ol>
            </nav>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <h5 class="card-title mb-0">Location List</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LocationAddModal">
                            <i class="icon-base ti tabler-plus me-1"></i> Add Location
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive text-nowrap">
                            <table id="locationTable" class="table table-hover align-middle mb-0 table-striped dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Name</th>
                                        <th>Added On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @forelse($locations as $location)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $location->country->name ?? '—' }}</td>
                                            <td>{{ $location->city->name ?? '—' }}</td>
                                            <td><span class="fw-medium">{{ $location->name }}</span></td>
                                            <td>{{ optional($location->created_at)->format('d M Y') ?? '—' }}</td>
                                            <td>
                                                <form action="{{ route('admin.location.destroy', $location) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon btn-text-secondary rounded-pill btn-sm waves-effect waves-light" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="icon-base ti tabler-trash icon-md"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4">No locations found. Add a location using the button above.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="LocationAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title">Create New Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.location.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="country_id" class="form-label">Country</label>
                            <select class="form-select" name="country_id" id="country_id" required>
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="city_id" class="form-label">City</label>
                            <select class="form-select" name="city_id" id="city_id" required>
                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->country->name ?? '—' }} / {{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="location_name" class="form-label">Location Name</label>
                            <input type="text" class="form-control" name="location_name" id="location_name" placeholder="Enter Location Name" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Location</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (document.querySelector('#locationTable')) {
            new DataTable('#locationTable', {
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
                autoWidth: false,
            });
        }

        const citySelect = document.querySelector('#city_id');
        const countrySelect = document.querySelector('#country_id');
        const cities = @json($citiesForJs);

        function resetCityOptions() {
            citySelect.innerHTML = '<option value="">Select City</option>';
            citySelect.disabled = true;
        }

        function populateCities(countryId) {
            resetCityOptions();
            if (!countryId) {
                return;
            }

            const filtered = cities.filter(function (city) {
                return String(city.country_id) === String(countryId);
            });

            if (filtered.length === 0) {
                citySelect.innerHTML = '<option value="">No cities available</option>';
                return;
            }

            filtered.forEach(function (city) {
                const option = document.createElement('option');
                option.value = city.id;
                option.textContent = city.name;
                citySelect.appendChild(option);
            });
            citySelect.disabled = false;
        }

        if (countrySelect && citySelect) {
            resetCityOptions();
            countrySelect.addEventListener('change', function () {
                populateCities(this.value);
            });
        }
    });
</script>
@endpush
@endsection
