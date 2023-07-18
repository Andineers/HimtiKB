<nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
            <img src="assets/images/HIMTI.png" alt="" eight="h75" width="75">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
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
                    {{-- {{ Route:is }} adalah sebuah pengecekan link, dimana jika true
                    dia akan memberikan nav-link menjadi nav-link active, yang membuat
                menu navbar akan aktif --}}
                    <a class="nav-link {{ Route::is('home.home') ? 'active' : '' }}"
                        href="{{ route('home.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('tentang.tentang') ? 'active' : '' }}"
                        href="{{ route('tentang.tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('sharing.sharing') ? 'active' : '' }}"
                        href="{{ route('sharing.sharing') }}">Sharing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('tutorial.tutorial') ? 'active' : '' }}"
                        href="{{ route('tutorial.tutorial') }}">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('artikel.artikel') ? 'active' : '' }}"
                        href="{{ route('artikel.artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('klinik.klinik') ? 'active' : '' }}"
                        href="{{ route('klinik.klinik') }}">Klinik</a>
                </li>
                <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                    <a href="{{ route('auth.login') }}">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Log In</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
