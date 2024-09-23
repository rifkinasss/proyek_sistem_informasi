<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 sticky-top">
    <a href="{{ url('/') }}" class="navbar-brand p-0">
        <div class="d-flex align-items-center">
            <img src="{{ asset('assets/landing-page/img/pemkot-balikpapan.png') }}" alt="Logo Pemkot Balikpapan"
                height="50px">
            <p class="mb-0 ms-2 ml-2" style="font-size: 20px; font-weight: bold;">Kelurahan Sepinggan Baru</p>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ url('gambaran-umum') }}" class="dropdown-item">Gambaran Umum</a>
                    <a href="{{ url('visi-misi') }}" class="dropdown-item">Visi & Misi</a>
                    <a href="{{ url('struktur-organisasi') }}" class="dropdown-item">Struktur Organisasi</a>
                    <a href="{{ url('tugas-pokok-dan-fungsi') }}" class="dropdown-item">Tugas Pokok dan Fungsi</a>
                </div>
            </div>
            <a href="{{ url('berita') }}"
                class="nav-item nav-link {{ Request::is('berita') ? 'active' : '' }}">Berita</a>
            <a href="{{ url('layanan') }}"
                class="nav-item nav-link {{ Request::is('layanan') ? 'active' : '' }}">Layanan</a>
            <a href="contact.html" class="nav-item nav-link">Hubungi Kami</a>
        </div>
    </div>
</nav>
