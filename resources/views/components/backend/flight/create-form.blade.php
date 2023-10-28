<div class="row justify-content-center">

    <div class="col-md-12">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('admin.flight.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="">Airline</label>
                        <select name="airline_id" class=" form-control">
                            <option value="">(Select)</option>
                            @foreach ($airlines as $airline)
                                <option value="{{ $airline->id }}">{{ $airline->name }}</option>
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
                                <option value="{{ $flight_type->id }}">{{ $flight_type->name }}</option>
                            @endforeach
                        </select>
                        @error('flight_type_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Flight No</label>
                        <input type="text" name="flight_number" class=" form-control">
                        @error('flight_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Plan No</label>
                        <input type="text" name="plane_on" class=" form-control">
                        @error('plane_on')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Departure Location</label>
                        <select name="departure_location_id" class=" form-control">
                            <option value="">(Select)</option>
                            @foreach ($airports as $airport)
                                <option value="{{ $airport->id }}">{{ $airport->name }}</option>
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
                            @foreach ($airports as $airport)
                                <option value="{{ $airport->id }}">{{ $airport->name }}</option>
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
                            <input type="date" name="departure_date" class=" form-control">
                            @error('departure_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="">Arrival Date</label>
                            <input type="date" name="arrival_date" class=" form-control">
                            @error('arrival_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="">Departure Time</label>
                            <input type="time" name="departure_time" class=" form-control">
                            @error('departure_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="">Arrival Time</label>
                            <input type="time" name="arrival_time" class=" form-control">
                            @error('arrival_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">Flight Status</label>
                        <input type="text" name="flight_status" class=" form-control">
                        @error('flight_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Duration</label>
                        <input type="text" name="duration" class=" form-control">
                        @error('duration')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Seats</label>
                        <input type="text" name="seats" class=" form-control">
                        @error('seats')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="">Price</label>
                        <input type="number" name="price" class=" form-control">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100 mt-3 mb-5">Save</button>
        </form>
    </div>
</div>
