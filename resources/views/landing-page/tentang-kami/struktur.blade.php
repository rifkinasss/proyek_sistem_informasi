@extends('landing-page.layouts.app')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Struktur Organisasi</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Gambaran Umum Kelurahan
                            Sepinggan Baru Kota Balikpapan</h5>
                        <h1 class="display-5 mb-0">DASAR HUKUM</h1>
                    </div>
                    <p class="mb-0">Kelurahan Sepinggan Baru di bentuk berdasarkan :</p>
                    <ol>
                        <li>PERDA No. 11 Tahun 2006, Tentang Kelurahan ; Berdasarkan PERMENDAGRI No.31 Tahun 2006 Tentang
                            Pembentukan, Penghapusan dan Penggabungan Kelurahan.</li>
                        <li>PERDA No. 5 Tahun 2012, Tentang Administrasi Kependudukan, Berdasarkan PERMENDAGRI No. 9 Tahun
                            2011, Tentang Pedoman Penerbitan KTP Berbasis Nomor Induk Kependudukan Secara Nasional.</li>
                        <li>PERDA No. 7 Tahun 2012, Tentang Pembentukan Tujuh Kelurahan Dalam WilayahKota Balikpapan
                            (Lembaran Daerah Kota Balikpapan Tahun 2012 Nomor 7, Tambahan Lembaran Daerah KotaBalikpapan
                            Nomor 18)</li>
                        <li>PERDA No. 12 Tahun 2012, Tentang Rencana Tata Ruang Wilayah Kota Balikpapan Tahun 2012-2032.
                        </li>
                    </ol>
                    <div class="section-title mb-4">
                        <h1 class="display-5 mb-0">TUGAS DAN FUNGSI</h1>
                    </div>
                    <ul>
                        <li>Berdasarkan Peraturan Walikota Nomor 18 Tahun 2009 tentang Uraian Tugas dan Fungsi Kelurahan,
                        </li>
                        <li>Berdasarkan Peraturan Walikota Nomor 57 Tahun 2016 tentang Susunan Organisasi, Uraian Tugas dan
                            Fungsi Kecamatan.</li>
                    </ul>
                    <p class="mb-0">Kelurahan mempunyai tugas menyelenggarakan urusan pemerintahan, pembangunan dan
                        pembinaan kemasyarakatan dalam satu wilayah Kelurahan yang berada di wilayah kerja kelurahan serta
                        melaksanakan urusan pemerintahan yang dilimpahkan oleh Walikota. Sedangkan Kelurahan
                        menyelenggarakan fungsi :</p>
                    <ol>
                        <li>Pelaksanaan kegiatan pemerintahan kelurahan;</li>
                        <li>Pelaksanaan program dan kegiatan pemberdayaan masyarakat</li>
                        <li>Penyelenggaraan pelayanan masyarakat di wilayah kelurahan;</li>
                        <li>Penyelenggaraan dan pembinaan ketentraman dan ketertiban wilayah;</li>
                        <li>Pelaksanaan pemeliharaan prasarana dan fasilitas pelayanan umum di wilayah kelurahan;</li>
                        <li>Pelaksanaan pembinaan dan fasilitasi peningkatan pertumbuhan ekonomi masyarakat di wilayah
                            kelurahan;</li>
                        <li>Penyusunan dan sinkronisasi usulan program dan kegiatan pembangunan dan kemasyarakatan;</li>
                        <li>Pembinaan lembaga sosial kemasyarakatan dan swadaya gotong royong masyarakat;</li>
                        <li>Pelaksanaan tugas lainnya yang diberikan oleh atasan/Pimpinan sesuai dengan peraturan yang
                            berlaku. </li>
                    </ol>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-40 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/pemkot-balikpapan.png') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
