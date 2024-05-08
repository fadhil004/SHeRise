@extends('layout.app')

@section('style')
<style>
    /* Menyembunyikan teks "Choose File" */
    .custom-file-input::-webkit-file-upload-button {      
    }
    .custom-file-input::file-selector-button {
        background-color: white; /* Mengatur latar belakang putih */
        border: 1px solid #ccc; /* Menambahkan border */
        border-radius: 20px; /* Mengatur border menjadi rounded */
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-size: 10pt;
    }

    .custom-file-input::file-selector-button:hover {
        border-color: black;
    }

    .custom-file-input::file-selector-button:active {
        background: linear-gradient(top, #e3e3e3, #f9f9f9);
    }
</style>

@endsection

@section('content')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <h2 class="text-white">Layanan Pengaduan</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4 pb-2">Kami dengan senang hati menerima laporan anda</h3>
                        </div>

                        <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0">
                            <img src="/assets/images/faq_graphic.jpg" class="img-fluid" alt="FAQs"></img>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form action="{{ route('store-reports') }}" method="POST" class="custom-form contact-form"  enctype="multipart/form-data" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="nama_pelapor" id="name" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12"> 
                                        <div class="form-floating">
                                            <input type="text" name="kontak_pelapor" id="email" class="form-control" placeholder="" required="">
                                            
                                            <label for="floatingInput">Nomor WhatsApp</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-floating">
                                            <input type="date" name="tanggal_kejadian" id="event_date" class="form-control" required="">
                                            <label for="event_date">Tanggal Kejadian</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="form-floating">
                                            <input type="file" name="foto_bukti" id="proof_photo" class="form-control custom-file-input">
                                            <label for="proof_photo">Upload Foto Bukti</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea rows="5" class="form-control" id="message" name="deskripsi_kejadian" placeholder="Deskripsikan kejadian yang kamu alami"></textarea>
                                            
                                            <label for="floatingTextarea">Deskripsi kejadian</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" class="form-control">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        

                    </div>
                </div>
            </section>