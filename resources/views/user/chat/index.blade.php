@extends('admin.layouts.app')

@section('title', 'Chat')

@section('content')

<div class="container-fluid">

    <div class="row vh-100">

        <div class="col-lg-4 border-end p-0">

            @include('user.chat.partials.sidebar')

        </div>

        <div class="col-lg-8 p-0">

            @include('user.chat.partials.chat-area')

        </div>

    </div>

</div>

@endsection
