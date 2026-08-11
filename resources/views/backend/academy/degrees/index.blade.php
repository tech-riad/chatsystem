@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold py-3 mb-0">
                <span class="text-muted fw-light">Dashboard /</span> Degrees
            </h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DegreeAddModal">
                <i class="icon-base ti tabler-plus me-1"></i> Add Degree
            </button>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-body p-3">
                <form action="{{ route('admin.academy.degrees') }}" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search degrees" value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="table-responsive text-nowrap">
                <table id="degreesTable" class="table table-hover table-striped dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse($degrees as $degree)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><span class="fw-medium">{{ $degree->title }}</span></td>
                                <td>
                                    <form action="{{ route('admin.academy.degrees.destroy', $degree) }}" method="post" class="d-inline">
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
                                <td colspan="5" class="text-center py-4">No degrees found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $degrees->links() }}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="DegreeAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title">Create New Degree</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.academy.degrees.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="degree_title" class="form-label">Degree Title</label>
                        <input type="text" class="form-control" name="title" id="degree_title" placeholder="Enter Degree Title" required>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Degree</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (document.querySelector('#degreesTable')) {
            new DataTable('#degreesTable', {
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
