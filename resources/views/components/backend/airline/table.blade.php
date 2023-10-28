<div class="row">
    <div class="col-md-3">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.airline.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="">Airline</label>
                <input type="text" name="name" class=" form-control">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-2">
                <label for="">Image</label>
                <input type="file" name="image" class=" form-control">
                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-dark w-100">Save</button>
        </form>
    </div>
    <div class="col-md-9">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Airlines List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Airport</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($airlines as $airline)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $airline->name }}</td>
                                <td>{{ $airline->slug }}</td>
                                <td>
                                    <img src="{{ url('upload/images/airline', $airline->image) }}" style="width: 60px; height: auto;" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.airline.edit', $airline->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin.airline.destroy', $airline->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>