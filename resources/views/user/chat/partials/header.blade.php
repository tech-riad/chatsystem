<div class="border-bottom p-3">

    <div class="d-flex align-items-center">

        @if($activeGroup->image)

            <img
                src="{{ asset('storage/'.$activeGroup->image) }}"
                class="rounded-circle"
                width="50"
                height="50">

        @else

            <img
                src="{{ asset('assets/img/default-group.png') }}"
                class="rounded-circle"
                width="50">

        @endif

        <div class="ms-3">

            <h5 class="mb-0">

                {{ $activeGroup->name }}

            </h5>

            <small class="text-muted">

                {{ $activeGroup->members->count() }}

                Members

            </small>

        </div>

    </div>

</div>
