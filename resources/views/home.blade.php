@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="profile">
                      <li><b>Name:</b> {{ Auth::user()->name }}</li>
                      <li><b>Email:</b> {{ Auth::user()->email }}</li>
                      <li><b>Mobile:</b> {{ Auth::user()->mobile }}</li>
                      <li><b>Current Address:</b> {{ Auth::user()->current }}</li>
                      <li><b>Permanent Address:</b> {{ Auth::user()->permanent }}</li>
                      <li><b>Occupation:</b> {{ Auth::user()->occupation }}</li>
                      <li><b>NID:</b> <img src="{{ Auth::user()->nid }}" alt="" width="250px"></li>
                      <li><a class="dropdown-item" href="{{ route('profile') }}"><b>Update Profile</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
