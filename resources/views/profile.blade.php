@extends('layouts.profile.app')

@section('title','Home')


@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <h4 class="page-title">My Profile</h4>
                </div>
            </div>
            <div class="card-box profile-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img class="avatar" src="{{ asset('storage/profilepic/'.Auth::user()->about->image)}}" alt=""></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{Auth::user()->name}}</h3>
                                            <div class="staff-msg"><a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Email:</span><p>{{Auth::user()->email}}</p>
                                            </li>
                                            <li>
                                                <span class="title">Description:</span><p>{{Auth::user()->about->description}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection










@push('js')
@endpush
