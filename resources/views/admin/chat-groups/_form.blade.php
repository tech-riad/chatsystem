<div class="row">

    <div class="col-md-6">

        <div class="mb-3">

            <label class="form-label">

                Group Name

            </label>

            <input
                type="text"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}">

            @error('name')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

            @enderror

        </div>

    </div>





    <div class="col-md-6">

        <div class="mb-3">

            <label class="form-label">

                Group Image

            </label>

            <input
                type="file"
                name="image"
                class="form-control @error('image') is-invalid @enderror">

            @error('image')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

            @enderror

        </div>

    </div>





    <div class="col-md-12">

        <div class="mb-3">

            <label class="form-label">

                Description

            </label>

            <textarea
                name="description"
                rows="4"
                class="form-control">{{ old('description') }}</textarea>

        </div>

    </div>





    <div class="col-md-12">

        <div class="mb-3">

            <label class="form-label">

                Members

            </label>

            <select
                name="members[]"
                class="form-select"
                multiple>

                @foreach($users as $user)

                    <option
                        value="{{ $user->id }}">

                        {{ $user->name }}

                    </option>

                @endforeach

            </select>

        </div>

    </div>





    <div class="col-md-12">

        <button
            class="btn btn-primary">

            Save Group

        </button>

    </div>

</div>
