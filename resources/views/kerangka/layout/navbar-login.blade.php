<nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
            <img src="assets/images/HIMTI.png" alt="" eight="h75" width="75">
            <bu tton class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="mdi mdi-menu navbar-toggler-icon"></span>
                </button>
        </div>
        <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                    <div class="navbar-collapse-logo">
                        <img src="images/Group2.svg" alt="">
                    </div>
                    <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('anggota.anggota') ? 'active' : '' }}"
                        href="{{ route('anggota.anggota') }}">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('peserta.peserta') ? 'active' : '' }}"
                        href="{{ route('peserta.peserta') }}">Peserta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('berkas.berkas') ? 'active' : '' }}"
                        href="{{ route('berkas.berkas') }}">Berkas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('donasi.donasi') ? 'active' : '' }}"
                        href="{{ route('donasi.donasi') }}">Donasi</a>
                </li>
                <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                    <a href="login.html"><button class="btn btn-primary" type="button">Log Out</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
