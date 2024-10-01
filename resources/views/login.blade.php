@extends('layouts.app')


@section('content')
<div class="mt-5 row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Login</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
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
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('register.index') }}">Don't have an account? Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
