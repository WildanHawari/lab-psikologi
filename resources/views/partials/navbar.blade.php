{{-- Modal Login --}}
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" id="login">Masuk</strong>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" id="username" value="{{ old('username') }}" autocomplete="off" autofocus
                            required placeholder="Username">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" value="{{ old('password') }}" autocomplete="off"
                                autofocus required placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @enderror
                        </div>

                        {{-- <div class="text-end">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div> --}}
                    </div>

                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary w-100" data-label="Masuk">Masuk</button>
                    </div>

                    {{-- <div class="text-center mt-3">
                        Belum punya akun? Ayo
                        <a class="link-underline link-underline-opacity-0 font-weight-600" href="/daftar">daftar</a>
                    </div> --}}

                    <hr class="mt-4 mb-3">

                    <div class="text-center">
                        <small>
                            Dengan melakukan login, Anda setuju dengan <a href="#" class="link-underline">syarat &amp; ketentuan Laboratorium Psikologi</a>.
                        </small>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <a class="navbar-brand fw-bold" href="">
        <img src="https://i.ibb.co/pbWvbQj/Gunadarma.png" alt="Logo" width="50" height="50"
            class="d-inline-block align-text-middle">
        Laboratorium Psikologi
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="box-shadow: none">
        <i class="fa-solid fa-bars fa-lg"></i>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <img src="https://i.ibb.co/pbWvbQj/Gunadarma.png" alt="Logo" width="70" height="70"
                class="offcanvas-title" id="offcanvasNavbarLabel">
            <h5 class="offcanvas-title fw-bolder" id="offcanvasNavbarLabel">Laboratorium Psikologi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                style="box-shadow: none"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jadwal">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#persyaratan">Persyaratan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
            <br>
            <div class="d-grid gap-1 d-md-flex">
                <button class="btn btn-outline-primary me-md-2 fw-semibold px-3 rounded-1" type="button"
                    data-bs-toggle="modal" data-bs-target="#login">Masuk</button>
                <a href="{{ url('/mahasiswa/daftar') }}" class="btn btn-primary fw-semibold px-3 rounded-1"
                    type="button">Daftar</a>
            </div>
        </div>
    </div>
</div>
