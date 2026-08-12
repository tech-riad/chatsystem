@extends('admin.layouts.app')

@section('title','Create Chat Group')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h4>Create Chat Group</h4>
            @error('members')

            <div class="text-danger">

                {{ $message }}

            </div>

            @enderror

        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.chat-groups.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @include('admin.chat-groups._form')

            </form>

        </div>

    </div>

</div>


@endsection
@push('scripts')

<script>

$(function(){

    $('#members').select2({

        placeholder:'Select Members',

        allowClear:true,

        width:'100%'

    });

});

</script>

@endpush
