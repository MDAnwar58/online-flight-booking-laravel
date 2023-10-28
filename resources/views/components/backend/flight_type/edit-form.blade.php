<div class="row justify-content-center">
    <div class="col-md-4">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.flight.type.update', $flight_type->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Flight Type</label>
                <input type="text" name="name" class=" form-control" value="{{ $flight_type->name }}">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-dark w-100">Update</button>
        </form>
    </div>
</div>