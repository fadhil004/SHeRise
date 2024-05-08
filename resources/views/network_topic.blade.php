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
                                <div class="col-md-6">
                                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                        <div class="d-flex">
                                    <img src="/assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">

                                        <div class="custom-block-topics-listing-info d-flex">
                                            <div>
                                            <h5 class="mb-2">{{ $topic->title }}</h5>

                                            <p class="mb-0">{{ $topic->description }}</p>

                                            <a href="#" class="btn custom-btn mt-3 mt-lg-4">Tonton selengkapnya</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
    
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


            