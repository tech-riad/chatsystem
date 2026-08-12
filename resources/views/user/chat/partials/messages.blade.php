<div
    id="messages"
    style="height:calc(100vh - 180px);
    overflow-y:auto;
    background:#efeae2;">

    <div class="p-3">

        @forelse($activeGroup->messages->reverse() as $message)

            @if($message->user_id==auth()->id())

                <div class="d-flex justify-content-end mb-3">

                    <div
                        class="bg-success text-white p-2 rounded"
                        style="max-width:60%;">

                        {{ $message->message }}

                        <br>

                        <small>

                            {{ $message->created_at->format('h:i A') }}

                        </small>

                    </div>

                </div>

            @else

                <div class="d-flex justify-content-start mb-3">

                    <div
                        class="bg-white p-2 rounded"
                        style="max-width:60%;">

                        <strong>

                            {{ $message->sender->name }}

                        </strong>

                        <br>

                        {{ $message->message }}

                        <br>

                        <small>

                            {{ $message->created_at->format('h:i A') }}

                        </small>

                    </div>

                </div>

            @endif

        @empty

            <div class="text-center mt-5">

                No Message

            </div>

        @endforelse

    </div>

</div>
