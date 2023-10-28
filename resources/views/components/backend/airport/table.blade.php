<div class="row">
    <div class="col-md-3">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.airport.create') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="">Airport</label>
                <input type="text" name="name" class=" form-control">
                @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-2">
                <label for="">Airport Short Name</label>
                <input type="text" name="short_name" class=" form-control">
                @error('short_name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mb-2">
                <label for="">Location</label>
                <input type="text" name="location" class=" form-control">
                @error('location')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button type="submit" class="btn btn-dark w-100">Save</button>
        </form>
    </div>
    <div class="col-md-9">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Airport List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Airport</th>
                            <th>Slug</th>
                            <th>Airport Short Name</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($airports as $airport)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $airport->name }}</td>
                                <td>{{ $airport->slug }}</td>
                                <td>{{ $airport->short_name }}</td>
                                <td>{{ $airport->location }}</td>
                                <td>
                                    <a href="{{ route('admin.airport.edit', $airport->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin.airport.destroy', $airport->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>