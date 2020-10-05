@extends('layouts.backend.app')
@section('title','Add Doctor')



@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add New Doctor</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success')  }}
                        </div>
                    @endif
                    <form action="{{ route('admin.add.doctor.input') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label>Role ID</label>
                            <input class="form-control @error('role_id') is-invalid @enderror" type="number" name="role_id">
                            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input class="form-control @error('mobile_no') is-invalid @enderror" type="number" name="mobile_no">
                            @error('mobile_no')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Age</label>
                            <input class="form-control @error('age') is-invalid @enderror" type="number" name="age">
                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


