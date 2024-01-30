<!DOCTYPE html>
<html lang="id">

<head>
    @include('partials/head')
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
    <div class="container px-4 py-5">
        @include('partials/jadwal')
    </div>


    {{-- javascript --}}
    @include('partials/script')
</body>

</html>
