@extends('layouts.app')

@section('content')
<div class="mt-5 row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" class="form-control" name="last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input id="dob" type="date" class="form-control" name="dob" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input id="mobile" type="tel" class="form-control" name="mobile" pattern="[0-9]{10}"  required>
                    </div>


                    <div class="form-group">
                        <label for="country">Country</label>
                            <select id="country" class="form-control" name="country" required>
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                    </div>


                    <div class="form-group">
                        <label for="state">State</label>
                        <select id="state" class="form-control" name="state" required>
                            <option value="">Select State</option>
                            <!-- States will be populated based on selected country -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <select id="city" class="form-control" name="city" required>
                            <option value="">Select City</option>
                            <!-- Cities will be populated based on selected state -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="locality">Locality</label>
                        <input id="locality" type="text" class="form-control" name="locality" required>
                    </div>

                    <div class="form-group">
                        <label for="pincode">Pincode</label>
                        <input id="pincode" type="text" class="form-control" name="pincode" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('login.index') }}">You have an account. Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
