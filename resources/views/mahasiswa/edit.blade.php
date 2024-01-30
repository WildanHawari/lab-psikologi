<!DOCTYPE html>
<html lang="id">

<head>
    @include('partials/head')
</head>

<body class="bg-body-tertiary">
    {{-- alert --}}
    @include('sweetalert::alert')


    <div class="container mt-5">
        <h1 class="mb-5">Edit Programmer dan Asisten Laboratorium Psikologi</h1>
    </div>

    @foreach ($data as $d)
        <div class="container mt-5 border rounded-4 mb-5 bg-white">
            <form class="row g-3 needs-validation p-4" action="{{ url('mahasiswaview/update', $d->npm) }}" method="POST" novalidate>
                @csrf
                <div class="col-md-2">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" name="npm"
                        id="npm" value="{{ $d->npm }}" disabled>
                </div>
                <div class="col-md-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        id="nama" value="{{ $d->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" value="{{ $d->password }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                        id="kelas" value="{{ $d->kelas }}">
                    <span id="kelas" class="form-text">
                        e.g 2KA13
                    </span>
                    @error('kelas')
                        <div class="invalid-feedback">
                            {{ $errors->first('kelas') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan">
                        <option selected disabled value=""></option>
                        <option value="Sistem Informasi" {{ $d->jurusan == 'Sistem Informasi' ? 'selected' : '' }}>
                            Sistem
                            Informasi</option>
                        <option value="Sistem Komputer" {{ $d->jurusan == 'Sistem Komputer' ? 'selected' : '' }}>
                            Sistem
                            Komputer</option>
                        <option value="Teknik Informatika"
                            {{ $d->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>
                            Teknik Informatika</option>
                        <option value="Psikologi" {{ old('jurusan') == 'Psikologi' ? 'selected' : '' }}>Psikologi
                        </option>
                    </select>
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $errors->first('jurusan') }}
                        </div>
                    @enderror

                </div>
                <div class="col-md-5">
                    <label for="lokasi_kampus" class="form-label">Lokasi Kampus</label>
                    <select class="form-select @error('lokasi_kampus') is-invalid @enderror" name="lokasi_kampus"
                        id="lokasi">
                        <option selected disabled value=""></option>
                        <option value="Depok" {{ $d->lokasi_kampus == 'Depok' ? 'selected' : '' }}>Depok</option>
                        <option value="Kalimalang" {{ $d->lokasi_kampus == 'Kalimalang' ? 'selected' : '' }}>
                            Kalimalang
                        </option>
                    </select>
                    @error('lokasi_kampus')
                        <div class="invalid-feedback">
                            {{ $errors->first('lokasi_kampus') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="tempat_tanggal_lahir" class="form-label">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror"
                        name="tempat_tanggal_lahir" id="tempat_tanggal_lahir"
                        value="{{ $d->tempat_tanggal_lahir }}">
                    <span id="tempat_tanggal_lahir" class="form-text">
                        e.g Jakarta, 11 Februari 2004
                    </span>
                    @error('tempat_tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $errors->first('tempat_tanggal_lahir') }}
                        </div>
                    @enderror

                </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"
                        id="jenis_kelamin">
                        <option selected disabled value=""></option>
                        <option value="Laki-laki" {{ $d->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="Perempuan" {{ $d->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $errors->first('jenis_kelamin') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="posisi" class="form-label">Posisi</label>
                    <select class="form-select @error('posisi') is-invalid @enderror" name="posisi" id="posisi"
                        value="{{ old('posisi') }}">
                        <option selected disabled value=""></option>
                        <option value="Programmer" {{ $d->posisi == 'Programmer' ? 'selected' : '' }}>Programmer
                        </option>
                        <option value="Asisten" {{ $d->posisi == 'Asisten' ? 'selected' : '' }}>Asisten</option>
                    </select>
                    @error('posisi')
                        <div class="invalid-feedback">
                            {{ $errors->first('posisi') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="ipk" class="form-label">IPK Terakhir</label>
                    <input type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk"
                        id="ipk" value="{{ $d->ipk }}">
                    <span id="ttl" class="form-text">
                        e.g 3.88 or 4.00
                    </span>
                    @error('ipk')
                        <div class="invalid-feedback">
                            {{ $errors->first('ipk') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="nohp" class="form-label">No Hp (No Wa Aktif)</label>
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp"
                        id="nohp" value="{{ $d->nohp }}">
                    <span id="ttl" class="form-text">
                        e.g 08561119104
                    </span>
                    @error('nohp')
                        <div class="invalid-feedback">
                            {{ $errors->first('nohp') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" value="{{ $d->email }}">
                    <span id="ttl" class="form-text">
                        e.g calonprogrammer@gmail.com
                    </span>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="4">{{ $d->alamat }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $errors->first('alamat') }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control @error('file') is-invalid @enderror" aria-label="file"
                        name="file" id="file" value="{{ $d->file }}" accept="application/pdf">
                    <span id="file" class="form-text">
                        Gabungkan <span class="fw-bolder">Berkas persyaratan CV, Scan KTP dan KRS aktif, Pass Foto
                            Berwarna
                            dan Terbaru Ukuran 4 x6
                            , Rangkuman Nilai</span> di flyer menjadi satu kesatuan PDF. Anda dapat
                        menggabungkan PDF secara online. Format PDF diberi nama Programmer/Asisten_Region_Tahun
                        Angkatan_Nama Lengkap.<br>
                        e.g file name Programmer_Depok_2022_Wildan Hawari.pdf
                    </span>
                    @error('file')
                        <div class="invalid-feedback">
                            {{ $errors->first('file') }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <a href="/" class="btn btn-outline-primary me-md-2 fw-semibold px-5 py-2"
                        type="button">Kembali</a>
                    <button class="btn btn-primary py-2 px-5 fw-semibold" type="submit">Update</button>
                </div>
            </form>
    @endforeach

    </div>

    @include('partials/script')
</body>

</html>
