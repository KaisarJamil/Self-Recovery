@extends('layouts.frontend.app')

@section('title','Appointment')


@push('css')
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Appointment') }}</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success')  }}
                            </div>
                        @endif
                        <form method="POST" action="{{route('appointment.add')}}">
                            @csrf
                            @method('POST')
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Time') }}</label>

                                <div class="col-md-6">
                                    <select class="select @error('time') is-invalid @enderror" name="time">
                                        @error('time')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <option value="#">Select one</option>
                                        @foreach($times as $t)
                                            <option value="{{ $t->id }}">{{ $t->time }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>

                                <div class="col-md-6">
                                    <select class="select @error('doctor_name') is-invalid @enderror" name="doctor_name">
                                        @error('doctor_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <option value="#">Select one</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
@endpush
