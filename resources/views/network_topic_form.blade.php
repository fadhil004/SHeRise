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
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

@endsection

@section('content')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <h2 class="text-white">Buat Pembahasan</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                    <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">NETWORK TOPICS</h5>
                      <small class="text-muted float-end">Masukkan topik</small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="{{ route('store-topics') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="Masukkan Judul Topic" name="title" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-description" rows="5">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea
                            rows="5"
                                name="description"
                              type="text"
                              class="form-control basic-default-description"
                              id="basic-default-description"
                              placeholder="Tulis Deskripsi"
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-description" rows="10">Isi Konten</label>
                          <div class="col-sm-10">
                            <textarea
                            rows="5"
                                name="content"
                              type="text"
                              class="form-control basic-default-description"
                              id="basic-default-description"
                              placeholder="Tulis Konten"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-3 input-group">
                        <input name="image" type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Upload Data</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                    </div>
                </div>
            </section>