@extends('layout.app')

@section('style')
@endsection

@section('content')
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <h2 class="text-white">SHERISE NETWORK TOPIC</h2>
                        </div>

                    </div>
                </div>
            </header>
            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">List Pembahasan</h3>
                        </div>

                        <div class="col-lg-12 col-12 mt-3 mx-auto">
                            <div class="row">
                            @foreach ($topics as $topic)
                                <div class="col-lg-6">
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                    
                                        <div class="row custom-block-topics-listing-info d-flex">
                                          <div class="col-12 justify-content-center d-flex">
                                            <img src="{{ asset('data/topic/'. $topic->image)}}" class="justify-content-center" style="width: 450px; height: auto; object-fit: cover;" alt="">

                                          </div>
                                            <div class="col-12">
                                            <h5 class="mb-2">{{ $topic->title }}</h5>

                                            <p class="mb-0">{!! ($topic->description) !!}</p>

                                            <a href="{{route('topic-detail', ['id' => $topic->id])}}" class="btn custom-btn mt-3 mt-lg-4">Baca selengkapnya</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
    
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 pt-3">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('network-form')}}" class="pe-5 ps-5 btn custom-btn text-center">
                                Buat Pembahasan
                            </a>
                        </div>


                        </div>

                        <div class="col-lg-12 col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item {{ $topics->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $topics->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">Prev</span>
                                    </a>
                                </li>


                                    <li class="page-item {{ $topics->currentPage() == $topics->currentPage() ? 'active' : '' }}" aria-current="page">
                                        <a class="page-link" href="{{ $topics->url($topics->currentPage()) }}">{{ $topics->currentPage() }}</a>


                                
                                <li class="ps-1 page-item {{ !$topics->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $topics->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        </div>

                    </div>
                </div>
            </section>


            