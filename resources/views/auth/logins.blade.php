<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/head')
</head>

<body class="bg-body-tertiary">
    {{-- alert --}}
    @include('sweetalert::alert')

    {{-- @if ($errors->any())
        <p>{{ $errors->first('npm') }}</p>
    @endif --}}

    <div class="container mt-5">
        <h1 class="mb-5">Daftar Programmer dan Asisten Laboratorium Psikologi</h1>
    </div>

    <div class="container mt-5 border rounded-4 mb-5 bg-white">
        <form class="row g-3 needs-validation p-4" action="{{ route('login') }}" method="POST" novalidate>
            @csrf
            <div class="col-md-12">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    id="username" value="{{ old('username') }}" autofocus>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $errors->first('username') }}
                    </div>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password" value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @enderror
            <div class="col-12">
                <a href="/" class="btn btn-outline-primary me-md-2 fw-semibold px-5 py-2"
                    type="button">Kembali</a>
                <button class="btn btn-primary py-2 px-5 fw-semibold" type="submit">Daftar</button>
            </div>
        </form>

    </div>

    @include('partials/script')
</body>

</html>