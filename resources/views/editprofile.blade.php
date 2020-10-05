@extends('layouts.profile.app')

@section('title','Home')


@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Update Profile</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success')  }}
                        </div>
                    @endif
                    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label>Upload Image</label>
                            <div>
                                <input class="form-control" type="file" name="image">
                                <small class="form-text text-muted">Max. file size: 5 MB. Allowed images: jpg, gif, png.</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>About Yourself</label>
                            <textarea cols="30" rows="6" class="form-control @error('description') is-invalid @enderror" type="text" min="1" name="description"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection











@push('js')
@endpush
