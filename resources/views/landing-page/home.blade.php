@extends('landing-page.layouts.app')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/landing-page/img/background.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated slideInDown">Pemerintah Kota Balikpapan
                            </h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Kecamatan Balikpapan Selatan
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Kelurahan Sepinggan Baru</h1>
                            <a href="#tentang-kami"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/background.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase animated slideInDown">Pemerintah Kota Balikpapan
                        </h5>
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Kecamatan Balikpapan
                            Selatan
                        </h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Kelurahan Sepinggan Baru</h1>
                        <a href="#tentang-kami"
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <marquee>
        ~ Selamat Datang Di Kelurahan Sepinggan Baru Kota Balikpapan ~
    </marquee>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="tentang-kami" style="padding-top: 70px; margin-top: -70px;">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Tentang Kami</h5>
                            <h1 class="display-5 mb-0">Kelurahan Sepinggan Baru</h1>
                        </div>
                        <p class="mb-4">Kelurahan Sepinggan Baru merupakan bagian dari Kecamatan Balikpapan Selatan.
                            Terbentuk pada tahun <b>2012</b>, kelurahan ini merupakan hasil pemekaran dari Kelurahan
                            Sepinggan yang
                            lebih besar.
                            <br>
                            <br>
                            Kantor kelurahan sementara terletak di Jalan Syarifuddin Yoes RT 052. Sejak pembentukannya,
                            Sepinggan Baru telah mengalami pertumbuhan yang pesat dalam berbagai aspek, termasuk pembangunan
                            infrastruktur dan pertumbuhan ekonomi.
                            <br>
                            <br>
                            Sepinggan Baru juga menjadi rumah bagi beragam fasilitas
                            publik seperti sekolah, pusat kesehatan, pasar tradisional, dan tempat ibadah yang memenuhi
                            kebutuhan penduduk setempat. Keberagaman etnis dan budaya juga menjadi ciri khas kelurahan ini,
                            menciptakan lingkungan yang ramah dan inklusif bagi masyarakatnya.
                        </p>
                        <a href="{{ url('/kontak-kami') }}" class="btn btn-primary py-2 px-5 wow zoomIn"
                            data-wow-delay="0.6s">Kontak Kami</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 450px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-90 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="{{ asset('assets/landing-page/img/pemkot-balikpapan.png') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="section-title mb-4 text-center">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Berita</h5>
                    <h1 class="display-5 mb-0">Kelurahan Sepinggan Baru</h1>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100"
                                src="{{ asset('assets/landing-page/img/berita-1.jpeg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Prosesi Pemilihan Ketua RT 16</h4>
                            <p class="text-primary mb-3">Prosesi pemilihan Ketua RT 16 Kelurahan Sepinggan Baru
                                Kecamatan Balikpapan selatan di Rumah Allah Masjid Al Maghfirah disambut warga dengan
                                semangat kompak kebersamaan dg ditandai banyaknya warga yang hadir memenuhi Rumah Allah
                                Masjid Al Maghfirah.</p>
                            <a href="appointment.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100"
                                src="{{ asset('assets/landing-page/img/berita-1.jpeg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Prosesi Pemilihan Ketua RT 16</h4>
                            <p class="text-primary mb-3">Prosesi pemilihan Ketua RT 16 Kelurahan Sepinggan Baru
                                Kecamatan Balikpapan selatan di Rumah Allah Masjid Al Maghfirah disambut warga dengan
                                semangat kompak kebersamaan dg ditandai banyaknya warga yang hadir memenuhi Rumah Allah
                                Masjid Al Maghfirah.</p>
                            <a href="appointment.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100"
                                src="{{ asset('assets/landing-page/img/berita-1.jpeg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Prosesi Pemilihan Ketua RT 16</h4>
                            <p class="text-primary mb-3">Prosesi pemilihan Ketua RT 16 Kelurahan Sepinggan Baru
                                Kecamatan Balikpapan selatan di Rumah Allah Masjid Al Maghfirah disambut warga dengan
                                semangat kompak kebersamaan dg ditandai banyaknya warga yang hadir memenuhi Rumah Allah
                                Masjid Al Maghfirah.</p>
                            <a href="appointment.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100"
                                src="{{ asset('assets/landing-page/img/berita-1.jpeg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Prosesi Pemilihan Ketua RT 16</h4>
                            <p class="text-primary mb-3">Prosesi pemilihan Ketua RT 16 Kelurahan Sepinggan Baru
                                Kecamatan Balikpapan selatan di Rumah Allah Masjid Al Maghfirah disambut warga dengan
                                semangat kompak kebersamaan dg ditandai banyaknya warga yang hadir memenuhi Rumah Allah
                                Masjid Al Maghfirah.</p>
                            <a href="appointment.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100"
                                src="{{ asset('assets/landing-page/img/berita-1.jpeg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Prosesi Pemilihan Ketua RT 16</h4>
                            <p class="text-primary mb-3">Prosesi pemilihan Ketua RT 16 Kelurahan Sepinggan Baru
                                Kecamatan Balikpapan selatan di Rumah Allah Masjid Al Maghfirah disambut warga dengan
                                semangat kompak kebersamaan dg ditandai banyaknya warga yang hadir memenuhi Rumah Allah
                                Masjid Al Maghfirah.</p>
                            <a href="appointment.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100"
                                src="{{ asset('assets/landing-page/img/berita-1.jpeg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Prosesi Pemilihan Ketua RT 16</h4>
                            <p class="text-primary mb-3">Prosesi pemilihan Ketua RT 16 Kelurahan Sepinggan Baru
                                Kecamatan Balikpapan selatan di Rumah Allah Masjid Al Maghfirah disambut warga dengan
                                semangat kompak kebersamaan dg ditandai banyaknya warga yang hadir memenuhi Rumah Allah
                                Masjid Al Maghfirah.</p>
                            <a href="appointment.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
