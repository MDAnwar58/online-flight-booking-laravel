<div class="row justify-content-center">
    <div class="col-md-4">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.airport.update', $airport->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Airport</label>
                <input type="text" name="name" class=" form-control" value="{{ $airport->name }}">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-2">
                <label for="">Airport Short Name</label>
                <input type="text" name="short_name" class=" form-control" value="{{ $airport->short_name }}">
                @error('short_name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-2">
                <label for="">Location</label>
                <input type="text" name="location" class=" form-control" value="{{ $airport->location }}">
                @error('location')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-dark w-100">Update</button>
        </form>
    </div>
</div>