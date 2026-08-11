@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold py-3 mb-0">
                <span class="text-muted fw-light">Dashboard /</span> Institutes
            </h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InstituteAddModal">
                <i class="icon-base ti tabler-plus me-1"></i> Add Institute
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
                <form action="{{ route('admin.academy.institutes') }}" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search institutes" value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="table-responsive text-nowrap">
                <table id="institutesTable" class="table table-hover table-striped dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse($institutes as $institute)
                                <td><span class="fw-medium">{{ $institute->title }}</span></td>
                                <td>{{ $institute->location->name ?? 'N/A' }}</td>
                                <td>{{ $institute->status }}</td>
                                <td>
                                    <form action="{{ route('admin.academy.institutes.destroy', $institute) }}" method="post" class="d-inline">
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
                                <td colspan="5" class="text-center py-4">No institutes found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $institutes->links() }}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="InstituteAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title">Create New Institute</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.academy.institutes.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="institute_title" class="form-label">Institute Title</label>
                        <input type="text" class="form-control" name="title" id="institute_title" placeholder="Enter Institute Title" required>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Institute</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (document.querySelector('#institutesTable')) {
            new DataTable('#institutesTable', {
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
