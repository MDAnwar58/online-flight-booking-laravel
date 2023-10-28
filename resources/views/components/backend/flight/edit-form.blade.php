<div class="row justify-content-center">
    <div class="col-md-12">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.flight.update', $flight->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="">Airline</label>
                        <select name="airline_id" class=" form-control">
                            <option value="">(Select)</option>
                            @foreach ($airlines as $airline)
                                <option {{ $flight->airline_id == $airline->id ? 'selected' : '' }} value="{{ $airline->id }}">{{ $airline->name }}</option>
                            @endforeach
                        </select>
                        @error('airline_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Flight Type</label>
                        <select name="flight_type_id" class=" form-control">
                            <option value="">(Select)</option>
                            @foreach ($flight_types as $flight_type)
                                <option {{ $flight->flight_type_id == $flight_type->id ? 'selected' : '' }} value="{{ $flight_type->id }}">{{ $flight_type->name }}</option>
                            @endforeach
                        </select>
                        @error('flight_type_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Flight No</label>
                        <input type="text" name="flight_number" class=" form-control" value="{{ $flight->flight_number }}">
                        @error('flight_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Plan No</label>
                        <input type="text" name="plane_on" class=" form-control" value="{{ $flight->plane_on }}">
                        @error('plane_on')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Departure Location</label>
                        <select name="departure_location_id" class=" form-control">
                            <option value="">(Select)</option>
                            @foreach ($airports as $airport)
                                <option  {{ $flight->departure_location_id == $airport->id ? 'selected' : '' }} value="{{ $airport->id }}">{{ $airport->name }}</option>
                            @endforeach
                        </select>
                        @error('departure_location_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Arrival Location</label>
                        <select name="arrival_location_id" class=" form-control">
                            <option value="">(Select)</option>
                            @foreach ($arrival_airports as $arrival_airport)
                                <option {{ $flight->arrival_location_id == $arrival_airport->id ? 'selected' : '' }} value="{{ $arrival_airport->id }}">{{ $arrival_airport->name }}</option>
                            @endforeach
                        </select>
                        @error('arrival_location_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Departure Date</label>
                            <input type="date" name="departure_date" class=" form-control" value="{{ $flight->departure_date }}">
                            @error('departure_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="">Arrival Date</label>
                            <input type="date" name="arrival_date" class=" form-control" value="{{ $flight->arrival_date }}">
                            @error('arrival_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="">Departure Time</label>
                            <input type="time" name="departure_time" class=" form-control" value="{{ $flight->departure_time }}">
                            @error('departure_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="">Arrival Time</label>
                            <input type="time" name="arrival_time" class=" form-control" value="{{ $flight->arrival_time }}">
                            @error('arrival_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">Flight Status</label>
                        <input type="text" name="flight_status" class=" form-control" value="{{ $flight->flight_status }}">
                        @error('flight_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Duration</label>
                        <input type="text" name="duration" class=" form-control" value="{{ $flight->duration }}">
                        @error('duration')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Seats</label>
                        <input type="text" name="seats" class=" form-control" value="{{ $flight->seats }}">
                        @error('seats')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Price</label>
                        <input type="number" name="price" class=" form-control" value="{{ $flight->price }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100">Update</button>
        </form>
    </div>
</div>
