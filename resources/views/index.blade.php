@extends('layouts.app') 

@section('content')

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


<div class="container">
    <h2>Cities List</h2>
    <table class="table table-bordered" id="cities-table">
        <thead>
            <tr>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
            </tr>
        </thead>
    </table>
</div>
@endsection


