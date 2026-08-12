<div
    id="messageContainer"
    class="p-3"
    style="
        height:calc(100vh - 150px);
        overflow-y:auto;
        background:#ECE5DD;
    ">

    @forelse($activeGroup->messages as $message)

        @include(
            'user.chat.partials.message',
            [
                'message'=>$message
            ]
        )

    @empty

        <div
            class="text-center mt-5">

            No Message Found

        </div>

    @endforelse

</div>
