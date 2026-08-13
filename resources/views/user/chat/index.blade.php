@extends('user.chat.partials.app')

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
    <script>

    window.onload=function(){

        let box=document.getElementById('messageContainer');

        if(box){

            box.scrollTop=box.scrollHeight;

        }

    }

    </script>

    @if($activeGroup)
    <script>
        window.chatGroupId = {{ $activeGroup->id }};
        window.authUserId = {{ auth()->id() }};
    </script>
    @endif

@endsection


