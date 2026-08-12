@extends('admin.layouts.app')

@section('title', 'Chat')

@section('content')

<div class="container-fluid">

    <div class="row vh-100">

        <div class="col-md-4 border-end p-0">

            @include('user.chat.partials.sidebar')

        </div>

        <div class="col-md-8 p-0">

            Chat Area

        </div>

    </div>

</div>

@endsection
