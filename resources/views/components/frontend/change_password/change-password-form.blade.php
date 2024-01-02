    <div class="col-md-9 pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card px-3 py-5">
                    <div class="row justify-content-center">
                        <form action="{{ route('password.update') }}" method="POST" class="col-md-5 text-center">
                            @csrf
                            <h2 class="fs-3 fw-bold pb-3">Change Password</h2>
                            @if (Session::has('success'))
                                <span class="text-success">{{ Session::get('success') }}</span>
                            @endif
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            <div class="text-start">
                                <input type="password" name="password" id="password" class="form-control py-2 px-3"
                                    placeholder="Enter New Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control py-2 px-3 mt-2"
                                    placeholder="Enter Confirmation Password">
                            </div>
                            <button type="submit" class="btn btn-outline-primary w-100 mt-2 text-uppercase fw-semibold"
                                style="font-size: 14px;">Password Updated</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
