@extends('admin.layouts.app')

@section('title', 'Chat Groups')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                Chat Groups
            </h4>

            <a href="{{ route('admin.chat-groups.create') }}"
                class="btn btn-primary">

                <i class="ti ti-plus"></i>

                Create Group

            </a>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered align-middle">

                <thead>

                    <tr>

                        <th width="70">
                            Image
                        </th>

                        <th>
                            Group
                        </th>

                        <th>
                            Members
                        </th>

                        <th>
                            Created By
                        </th>

                        <th>
                            Status
                        </th>

                        <th width="170">
                            Action
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($groups as $group)

                        <tr>

                            <td>

                                @if($group->image)

                                    <img
                                        src="{{ asset('storage/'.$group->image) }}"
                                        class="rounded"
                                        width="50">

                                @else

                                    <img
                                        src="{{ asset('assets/img/default-group.png') }}"
                                        class="rounded"
                                        width="50">

                                @endif

                            </td>

                            <td>

                                <strong>

                                    {{ $group->name }}

                                </strong>

                                <br>

                                <small>

                                    {{ $group->description }}

                                </small>

                            </td>

                            <td>

                                {{ $group->members->count() }}

                            </td>

                            <td>

                                {{ $group->creator->name }}

                            </td>

                            <td>

                                @if($group->status)

                                    <span class="badge bg-success">

                                        Active

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Inactive

                                    </span>

                                @endif

                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.chat-groups.edit',$group) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('admin.chat-groups.destroy',$group) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete Group?')"
                                        class="btn btn-danger btn-sm">

                                        Delete

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6"
                                class="text-center">

                                No Group Found

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

            <div class="mt-3">

                {{ $groups->links() }}

            </div>

        </div>

    </div>

</div>

@endsection
