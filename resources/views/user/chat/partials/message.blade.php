@php

$isMine = $message->user_id == auth()->id();

@endphp

<div class="d-flex mb-3 {{ $isMine ? 'justify-content-end' : 'justify-content-start' }}">

    <div
        class="rounded shadow-sm p-2"
        style="
            max-width:70%;
            min-width:180px;
            background:{{ $isMine ? '#DCF8C6' : '#FFFFFF' }};
        ">

        @unless($isMine)

            <div
                class="fw-bold text-primary mb-1">

                {{ $message->sender->name }}

            </div>

        @endunless

        <div
            style="
                white-space:pre-wrap;
                word-break:break-word;
            ">

            {{ $message->message }}

        </div>

        <div
            class="text-end mt-1">

            <small class="text-muted">

                {{ $message->created_at->format('h:i A') }}

            </small>

        </div>

    </div>

</div>
