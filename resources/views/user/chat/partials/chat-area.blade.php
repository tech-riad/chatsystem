@if(isset($activeGroup))

@include('user.chat.partials.header')

@include('user.chat.partials.messages')

@include('user.chat.partials.footer')

@else

<div class="h-100 d-flex justify-content-center align-items-center">

    <h4>Select a Group</h4>

</div>

@endif
