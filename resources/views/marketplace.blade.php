@extends('layout.app')

@section('style')
<link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('content')
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <h2 class="text-white">SHERISE MARKETPLACE</h2>
                        </div>

                    </div>
                </div>
            </header>

    <section class="section-padding-2 section-bg">
        <div class="container">
            <div class="row">
                @foreach ($items as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card" style="width: 25rem;">
                        <img src="assets/img/gallery/featured1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <div class="properties__caption">
                                <p>{{ $item->category }}s</p>
                                <h3 class="text-black">{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <br>
                                        <p><i class="fa-solid fa-location-dot"></i> {{ $item->location }}</p>
                                    </div>
                                    <div class="price">
                                        <span>Rp. {{ $item->price }}</span>
                                    </div>
                                </div>
                                <a href="#" class="custom-btn"><span class="text-center">Beli Sekarang</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12 col-12 pt-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item {{ $items->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $items->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">Prev</span>
                                    </a>
                                </li>


                                    <li class="page-item {{ $items->currentPage() == $items->currentPage() ? 'active' : '' }}" aria-current="page">
                                        <a class="page-link" href="{{ $items->url($items->currentPage()) }}">{{ $items->currentPage() }}</a>


                                
                                <li class="ps-1 page-item {{ !$items->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $items->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                
            </div>
        </div>
    </section>