@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div>
            <h4 class="mb-0">Users</h4>
            <div class="text-muted">Manage application users and roles</div>
        </div>
        <div>
            <a href="{{ route('admin.users.create') }}" class="btn">Add User</a>
        </div>
    </div>
    <div class="card-body">

        @if(session('success'))
            <div class="mb-3" style="color:green">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->getRoleNames()->toArray()) }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn secondary" style="margin-right:.5rem">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn danger" onclick="return confirm('Delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $users->links() }}
        </div>

    </div>
</div>
@endsection
