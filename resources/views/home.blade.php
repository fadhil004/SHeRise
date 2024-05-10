@extends('layout.app')

@section('style')
@endsection

@section('content')

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Website Pemberdayaan Perempuan</h1>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-10 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <!-- <img src="/assets/images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt=""> -->

                                    <div class="custom-block-overlay-text">
                                        <div>
                                            <h5 class=" mb-2">SHeRise</h5>

                                            <p class="">SHeRise adalah sebuah website tentang pemberdayaan perempuan dan kesetaraan gender. Website ini akan membantu pengguna untuk mendapatkan kembali semangat kehidupan untuk mereka. SHeRise memiliki banyak fitur tentang edukasi, laporan kekerasan dll yang sangat bermanfaat serta sebuah komunitas yang akan membantu penggunanya. 

<br>Jika anda mengalami ataupun menyaksikan kekerasan yang terjadi di lingkungan sekitar anda segera klik tombol 'pengaduan' pada website ini</p>
                                        </div>
                                        <a href="{{route('pengaduan')}}" class="btn custom-btn mt-2 mt-lg-3">Laporkan</a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Tentang SHeRise</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="/assets/images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apa itu SHeRise?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Komnas Perempuan mencatat jumlah kasus kekerasan seksual pada Mei 2022-Desember 2023 mencapai 4.179 kasus. Laporan yang paling banyak diterima adalah Kekerasan Seksual Berbasis Elektronik (KSBE), diikuti oleh pelecehan seksual dan pemerkosaan.
Kasus KSBE yang diterima Komnas Perempuan mencapai 2.776 kasus. Sementara itu, ada 623 kasus pelecehan seksual dan sisanya adalah kasus pemerkosaan

                                          <br>Oleh karena itu, SHeRise hadir untuk membantu seluruh kalangan masyarakat dalam mengedukasi tentang kekerasan serta budaya patriarki dan kesetaraan gender. SHeRise juga memberikan tempat perlindungan yang aman bagi para korban kekerasan dan korban fenomena lainnya yang berkaitan dengan fitur2 yang kami miliki.</p>
                   </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Siapa saja pelopor dari SHeRise?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>SHeRise merupakan sebuah website yang dipelopori oleh mahasiswa/i Universitas Riau Jurusan Ilmu Komputer. Website ini dibuat berdasarkan banyaknya kasus kekerasan di Indonesia yang kurang penanganan dan berdampak buruk pada korban. Oleh karena itu, kami membangun website ini dengan harapan dapat membantu korban dengan cara memberikan fitur laporan kekerasan yang bisa membantu korban untuk melaporkan kekerasan yang dirasakan, serta fitur-fitur lainnya yang akan membantu korban untuk bangkit kembali. Kami berharap website ini bisa memberikan bantuan terhadap para korban tanpa perlu adanya ketakutan untuk melaporkan kekerasan yang mereka alami.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Bagaimana kedepannya SHeRise?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Kami berharap, dengan adanya SHeRise dapat membantu para korban kekerasan untuk bisa menjalani kehidupan lebih baik walaupun mereka memiliki permasalahan yang berat sebelumnya. Serta, SHeRise kedepannya akan terus membantu korban dan memberikan bantuan yang lebih baik dengan cara bekerja sama dengan instansi seperti RSJ atau badan hukum yang bisa membuat para korban bisa mendapatkan keadilan dan pelaku bisa mendapat hukuman yang setimpal. SHeRise kedepannya juga akan membantu masyarakat untuk lebih bisa aware dengan fenomena patriarki serta pengajaran sex education kepada anak-anak.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class=" mb-4">Tujuan Kami</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class=" mb-3">Mengedukasi masyarakat mengenai kesetaraan gender, hak hak wanita, kesehatan reproduksi, serta kekerasan seksual </h4>

                                        <p class="">Adanya SHeRise bertujuan untuk dapat mengedukasi masyarakat mengenai berbagai permasalahan yang berkaitan dengan kesetaraan gender, hak-hak wanita, bagaimana kesehatan reproduksi serta kekerasan seksual yang sudah sering terjadi di Indonesia.</p>

                                        <div class="icon-holder">
                                          <div class="text-white">1</div>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class=" mb-3">Menyediakan layanan kaduan kekerasan seksual agar dapat ditindak lanjuti dengan segera</h4>

                                        <p class="">Pada website SHeRise disediakan juga fitur 'laporkan' yang dapat diakses oleh pengguna ketika menyaksikan atau mengalami kasus kekerasan seksual sehingga dapat  ditindaklanjuti dengan segera oleh pihak terkait</p>

                                        <div class="icon-holder">
                                        <div class="text-white">2</div>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class=" mb-3">Mengajak masyarakat agar dapat menghilangkan budaya patriarki di indonesia</h4>

                                        <p class="">Dengan munculnya fenomena patriaki yang dapat memberikan ketimpangan sosial, tentu saja hal itu akan memberikan dampak negatif pada lingkungan. Oleh karena itu, kami memberikan media informasi tentang edukasi patriarki yang mengajak masyarakat untuk lebih aware terhadap masalah budaya patriarki ini.</p>

                                        <div class="icon-holder">
                                        <div class="text-white">3</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
