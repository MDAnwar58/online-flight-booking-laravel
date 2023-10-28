<div class="row">
    @if (Session::has('success'))
        <div class="col-md-12 alart alert-success px-4 py-3 my-2">{{ Session::get('success') }}</div>
    @endif
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <span>
                    <i class="fas fa-table me-1"></i>
                    Flight List
                </span>
                <a href="{{ route('admin.flight.create') }}" class="btn btn-sm btn-dark">Add</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Airline Image</th>
                                <th>Airline</th>
                                <th>Flight Type</th>
                                <th>Flight No</th>
                                <th>Slug</th>
                                <th>Plan No</th>
                                <th>Departure Location</th>
                                <th>Arrival Location</th>
                                <th>Departure Date</th>
                                <th>Arrival Date</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Flight Status</th>
                                <th>Duration</th>
                                <th>Seat</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flights as $flight)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img src="{{ url('upload/images/airline', $flight->airline->image) }}" style="width: 60px;" alt="">
                                    </td>
                                    <td>{{ $flight->airline->name }}</td>
                                    <td>{{ $flight->flight_type->name }}</td>
                                    <td>{{ $flight->flight_number }}</td>
                                    <td>{{ $flight->slug }}</td>
                                    <td>{{ $flight->plane_on }}</td>
                                    <td>{{ $flight->departure_location->name }} {{ $flight->departure_location->short_name }} {{ $flight->departure_location->location }}</td>
                                    <td>{{ $flight->arrival_location->name }} {{ $flight->arrival_location->short_name }} {{ $flight->arrival_location->location }}</td>
                                    <td>{{ $flight->departure_date }}</td>
                                    <td>{{ $flight->arrival_date }}</td>
                                    <td>{{ $flight->departure_time }}</td>
                                    <td>{{ $flight->arrival_time }}</td>
                                    <td>{{ $flight->flight_status }}</td>
                                    <td>{{ $flight->duration }}</td>
                                    <td>{{ $flight->seats }}</td>
                                    <td>{{ $flight->price }}</td>
                                    <td>
                                        <a href="{{ route('admin.flight.edit', $flight->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ route('admin.flight.destroy', $flight->id) }}"
                                            class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
