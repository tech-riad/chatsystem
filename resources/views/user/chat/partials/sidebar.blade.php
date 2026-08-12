<div class="bg-white h-100">

    <div class="border-bottom p-3">

        <h5 class="mb-0">
            Chats
        </h5>

    </div>

    <div class="p-2">

        <input
            class="form-control"
            placeholder="Search chat...">

    </div>

    <div class="list-group list-group-flush">

        @foreach($groups as $group)

            @php

                $lastMessage = $group->messages->first();

                $active = isset($activeGroup)
                    && $activeGroup->id == $group->id;

            @endphp

            <a
                href="{{ route('user.chat.show',$group) }}"
                class="list-group-item list-group-item-action {{ $active ? 'active' : '' }}">

                <div class="d-flex">

                    {{-- Group Image --}}
                    <div>

                        @if($group->image)

                            <img
                                src="{{ asset('storage/'.$group->image) }}"
                                width="55"
                                height="55"
                                class="rounded-circle">

                        @else

                            <div
                                class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center"
                                style="width:55px;height:55px;">

                                {{ strtoupper(substr($group->name,0,1)) }}

                            </div>

                        @endif

                    </div>

                    {{-- Info --}}

                    <div class="ms-3 flex-grow-1">

                        <div
                            class="d-flex justify-content-between">

                            <strong>

                                {{ $group->name }}

                            </strong>

                            @if($lastMessage)

                                <small>

                                    {{ $lastMessage->created_at->format('h:i A') }}

                                </small>

                            @endif

                        </div>

                        <small>

                            {{ $lastMessage?->message ?? 'No Message Yet' }}

                        </small>

                        <br>

                        <small class="text-muted">

                            {{ $group->members->count() }} Members

                        </small>

                    </div>

                </div>

            </a>

        @endforeach

    </div>

</div>
