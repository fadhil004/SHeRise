@extends('layout.app')

@section('style')
@endsection

@section('content')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <h2 class="text-white">{{ $topic->title}}</h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn  smoothscroll me-4">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="topics-detail-block">
                                <img src="{{ asset('data/topic/'. $topic->image)}}" class="topics-detail-block-image img-fluid" style="object-fit: cover;">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <h3 class="mb-4">{{ $topic->title}}</h3>

                            <p>{!! $topic->content!!} </p>
                        </div>

                    </div>
                </div>
            </section>