<!DOCTYPE html>
<html lang="id">

<head>
    @include('partials/head')
    <style>
        .modal-open {
            overflow: auto;
            padding-right: 0 !important;
        }
    </style>
</head>

<body>
    {{-- Annpuncement --}}
    <nav class="announcement-bar navbar bg-body-tertiary">
        @include('partials/announcement')
    </nav>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top" id="main-nav">
        @include('partials/navbar')
    </nav>

    {{-- home --}}
    <div class="container mt-5 py-3 pb-lg-5 mb-lg-5 pt-lg-5">
        @include('partials/home')
    </div>

    {{-- Tentang --}}
    <div class="mt-lg-5 pt-lg-5" id="tentang">
        @include('partials/tentang')
    </div>

    {{-- Jadwal --}}
    <div class="container px-4 pt-5" id="jadwal">
        @include('partials/jadwal')
    </div>

    {{-- Persyaratan --}}
    <div class="container py-5" id="persyaratan">
        @include('partials/persyaratan')
    </div>

    {{-- Kontak --}}
    <div class="bg-body-secondary pb-3" id="kontak">
        @include('partials/kontak')
    </div>
    
    {{-- footer --}}
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
              <img src="https://fpsi.gunadarma.ac.id/psikologi/wp-content/uploads/2023/05/Logo_Gunadarma-removebg-preview-1-1.png" alt="gunadarma" width="25" height="25">
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Laboratorium Psikologi, Gunadarma</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter-x"></i></a></li>
          </ul>
        </footer>
      </div>
    {{-- javascript --}}
    @include('partials/script')
</body>

</html>
