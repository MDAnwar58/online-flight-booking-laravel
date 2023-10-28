<div class="row">
    <div class="col-md-3">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.flight.type.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="">Flight Type</label>
                <input type="text" name="name" class=" form-control">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-dark w-100">Save</button>
        </form>
    </div>
    <div class="col-md-9">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Flight Type List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Flight Type</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($flight_types as $flight_type)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $flight_type->name }}</td>
                                <td>{{ $flight_type->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.flight.type.edit', $flight_type->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin.flight.type.destroy', $flight_type->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>