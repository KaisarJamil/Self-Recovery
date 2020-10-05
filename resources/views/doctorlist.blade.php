@extends('layouts.frontend.app')

@section('title','Home')


@push('css')
@endpush

@section('content')
    <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Doctor List</h2>
                    <ol class="breadcrumb greylinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_30">

        <div class="container">
            <h3 class="widget-title"><b>Doctor List</b></h3>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="columns-4">
                        <ul id="products" class="products list-unstyled">
                            @foreach($doctors as $doctor)
                                <li class="product type-product loop-color">
                                    <article class="vertical-item content-padding with_border text-center">
                                        <div class="item-media"> <img src="{{ asset('storage/profilepic/'.$doctor->image) }}" alt="" /> </div>
                                        <div class="item-content">
                                            <div class="item-meta small-text"> <span class="price">
											<span class="currencies">Medicine Specialist</span><span class="amount"></span> </span>
                                            </div>
                                            <h3 class="entry-title topmargin_5"> <a href="">{{ $doctor->name }}</a> </h3>
                                            <p class="content-3lines-ellipsis">{{ $doctor->description }}</p>
                                            <p class="topmargin_30"> <a href="{{route('appointment')}}" class="theme_button color1 inverse min_width_button add_to_cart">Appointment</a> </p>
                                        </div>
                                    </article>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- eof .columns-* -->
                    <div class="text-center">
                        <ul class="pagination">

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
