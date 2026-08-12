<div class="d-flex flex-column h-100">

    <div class="p-3 border-bottom">

        <h4 class="mb-0">

            Chats

        </h4>

    </div>

    <div class="p-2">

        <input
            type="text"
            class="form-control"
            placeholder="Search Group">

    </div>

    <div class="flex-grow-1 overflow-auto">

        @forelse($groups as $group)

            <a
                href="{{ route('user.chat.show',$group) }}"
                class="text-decoration-none text-dark">

                <div class="d-flex align-items-center p-3 border-bottom">

                    {{-- Image --}}
                    <div>

                        @if($group->image)

                            <img
                                src="{{ asset('storage/'.$group->image) }}"
                                width="55"
                                height="55"
                                class="rounded-circle">

                        @else

                            <img
                                src="{{ asset('assets/img/default-group.png') }}"
                                width="55"
                                height="55"
                                class="rounded-circle">

                        @endif

                    </div>

                    {{-- Info --}}
                    <div class="ms-3 flex-grow-1">

                        <h6 class="mb-1">

                            {{ $group->name }}

                        </h6>

                        <small class="text-muted">

                            No Message Yet

                        </small>

                    </div>

                    {{-- Time --}}
                    <div>

                        <small class="text-muted">

                            {{ $group->created_at->format('h:i A') }}

                        </small>

                    </div>

                </div>

            </a>

        @empty

            <div class="text-center p-5">

                No Group Found

            </div>

        @endforelse

    </div>

</div>
