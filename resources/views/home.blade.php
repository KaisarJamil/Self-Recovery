@extends('layouts.frontend.app')

@section('title','Home')


@push('css')
@endpush

@section('content')
    <section class="intro_section page_mainslider ds all-scr-cover bottom-overlap-teasers">
        <div class="flexslider" data-dots="true" data-nav="true">
            <ul class="slides">
                <li>
                    <div class="slide-image-wrap"> <img src="{{ asset('frontend/images/background.jpg') }}" alt="" /> </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInRight"> Recover Yourself from Home</div>
                                        <div class="intro-layer" data-animation="fadeInLeft">
                                            <h2> <span class="highlight3">Online Drug Addiction Recovery
                                                </span></h2>
                                            <h3> Served All Day </h3>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
            </ul>
        </div>
        <!-- eof flexslider -->
    </section>




@endsection

@push('js')
@endpush
