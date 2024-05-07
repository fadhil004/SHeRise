@extends('layout.app')

@section('style')
@endsection

@section('content')
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <h2 class="text-white">SHERISE NETWORK</h2>
                        </div>

                    </div>
                </div>
            </header>

            <section class="section-padding ">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4 text-center">Acara Mendatang</h3>
                        </div>

                        @foreach ($events as $topic)
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="/assets/images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text ">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                <h5 class="mb-2">{{ $topic->title }}</h5>
                                                </div>
                                                <div class="ms-auto">
                                                <span class="custom-btn text-primary1"><i class="fa-solid fa-calendar-days pe-2"></i>{{ $topic->date }}</span>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                            <p class="mt-4 mb-0">{{ $topic->description }}</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="social-share d-flex justify-content-between">
                                        <div class=" custom-btn">
                                        <i class="fa-solid fa-location-dot pe-2"></i>Lokasi : {{$topic->location}}
                                        </div>
                                        <div class="pt-2">
                                        <form method="POST" action="#">@csrf<a type="submit" class="dropdown-item "><i class="fa-solid fa-right-from-bracket pe-2"></i>Daftar Disini</a></form>
                                        </div>
                                    </div>
                                    

                                    <div class="section-overlay"></div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12 col-12 pt-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item {{ $events->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $events->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">Prev</span>
                                    </a>
                                </li>


                                    <li class="page-item {{ $events->currentPage() == $events->currentPage() ? 'active' : '' }}" aria-current="page">
                                        <a class="page-link" href="{{ $events->url($events->currentPage()) }}">{{ $events->currentPage() }}</a>


                                
                                <li class="ps-1 page-item {{ !$events->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $events->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>


                        </div>
                    </div>
                </div>
            </section>

            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Pembahasan Terbaru</h3>
                        </div>

                        <div class="col-lg-8 col-12 mt-3 mx-auto">
                        @foreach ($networks as $network)
                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="/assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">{{ $network->title}}</h5>

                                            <p class="mb-0">{{ $network->description}}</p>

                                            <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>

                    </div>
                </div>
            </section>


            