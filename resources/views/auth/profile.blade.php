@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile</label>
                                            <div class="col-md-6">
                                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile', auth()->user()->mobile) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="current" class="col-md-4 col-form-label text-md-right">Current Address</label>
                                            <div class="col-md-6">
                                                <input id="current" type="text" class="form-control" name="current" value="{{ old('current', auth()->user()->current) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="permanent" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                            <div class="col-md-6">
                                                <input id="permanent" type="text" class="form-control" name="permanent" value="{{ old('permanent', auth()->user()->permanent) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="occupation" class="col-md-4 col-form-label text-md-right">Occupation</label>
                                            <div class="col-md-6">
                                                <input id="occupation" type="text" class="form-control" name="occupation" value="{{ old('occupation', auth()->user()->occupation) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="owner_id" class="col-md-4 col-form-label text-md-right">Owner ID</label>
                                            <div class="col-md-6">
                                                <input id="owner_id" type="text" class="form-control" name="owner_id" value="{{ old('owner_id', auth()->user()->owner_id) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="floor_no" class="col-md-4 col-form-label text-md-right">Floor No</label>
                                            <div class="col-md-6">
                                                <input id="floor_no" type="text" class="form-control" name="floor_no" value="{{ old('floor_no', auth()->user()->floor_no) }}">
                                            </div>
                                        </div>





                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                                            </div>
                                        </div>

                                       


                                        <div class="form-group row">
                                            <label for="nid" class="col-md-4 col-form-label text-md-right">NID</label>
                                            <div class="col-md-6">
                                                <input id="nid" type="file" class="form-control" name="nid">
                                                @if (auth()->user()->nid)
                                                    <code>{{ auth()->user()->nid }}</code>
                                                @endif
                                            </div>
                                        </div>



                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                                <button  class="btn btn-success"><a  href="http://127.0.0.1:8000/home"> Back</a></button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
