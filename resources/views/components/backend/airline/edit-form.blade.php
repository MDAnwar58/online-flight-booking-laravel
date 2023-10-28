<div class="row justify-content-center">
    <div class="col-md-4">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.airline.update', $airline->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="">Airline</label>
                <input type="text" name="name" class=" form-control" value="{{ $airline->name }}">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-2">
                <label for="">Image</label>
                <img src="{{ url('upload/images/airline', $airline->image) }}" style="width: 100%; height: auto;" alt="">
                <input type="file" name="image" class=" form-control">
                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-dark w-100">Update</button>
        </form>
    </div>
</div>