<!DOCTYPE html>
<html lang="id">

<head>
    @include('partials/head')

    <style>
        body,
        input[type="text"],
        button[type="submit"] {
            font-size: 13px
        }

        .table td {
            padding: 20px;
        }

        .table td .btn,
        .export .btn{
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            --bs-btn-font-size: 13px;
        }

        td {
            vertical-align: middle;
        }
        /* .pagination {
            --bs-pagination-active-bg: grey;
        } */
    </style>
</head>

<body class="bg-body-tertiary">
    @include('sweetalert::alert')
    <div class="px-5 mt-5">
        <h1>DATA CALON ASISTEN DAN PROGRAMMER</h1>
        <a href="/mahasiswa/daftar">add</a>

        {{-- Table Programmer --}}
        <h3 class="mt-5">Programmer</h3>
        {{-- search --}}
        <div class="row mt-2 justify-content-md-between">
            <div class="col-md-4 mt-3">
                <form action="admin" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search-programmer"
                            value="{{ request('search-programmer') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
            {{-- export --}}
            <div class="col-md-6 mt-md-2 pt-md-2 text-md-end mb-4">
                <div class="export d-grid justify-content-md-end">
                    <a href="/mahasiswaview/export_programmer" target="_blank" class="btn btn-primary px-3 rounded-1"><i class="bi bi-download pe-1"></i> Export</a>
                </div>
            </div>
        </div>
        <div class="card border-0 rounded-3">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover mb-0">
                        <thead class="text-center">
                            <tr>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Lokasi Kampus</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>IPK</th>
                                <th>Posisi</th>
                                <th>File</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pro->count())
                                @foreach ($pro as $p)
                                    <tr>
                                        <td>{{ $p->npm }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->kelas }}</td>
                                        <td>{{ $p->jurusan }}</td>
                                        <td>{{ $p->lokasi_kampus }}</td>
                                        <td>{{ $p->tempat_tanggal_lahir }}</td>
                                        <td>{{ $p->jenis_kelamin }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->nohp }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->ipk }}</td>
                                        <td>{{ $p->posisi }}</td>
                                        <td>{{ $p->file }}</td>
                                        <td>{{ $p->created_at }}</td>
                                        <td class="text-center">
                                            <a href="/mahasiswaview/edit/{{ $p->npm }}" class="btn btn-primary px-3 rounded-1" type="button">Edit</a>
                                            <a href="/mahasiswaview/destroy/{{ $p->npm }}" class="btn btn-danger px-3 rounded-1" type="button" data-confirm-delete="true">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="15">Not Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="d-flex mt-3 justify-content-sm-start justify-content-center">
                    {{ $pro->links() }}
                </div>
            </div>
        </div>

        {{-- Table Asisten --}}
        <h3 class="mt-5">Asisten</h3>
        {{-- search --}}
        <div class="row mt-2 justify-content-md-between">
            <div class="col-md-4 mt-3">
                <form action="admin" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search-asisten"
                            value="{{ request('search-asisten') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mt-md-2 pt-md-2 text-md-end mb-4">
                <div class="export d-grid justify-content-md-end">
                    <a href="/mahasiswaview/export_programmer" target="_blank" class="btn btn-primary px-3 rounded-1"><i class="bi bi-download pe-1"></i> Export</a>
                </div>
            </div>
        </div>
        {{-- table --}}
        <div class="card border-0 rounded-3">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover mb-0" id="asisten">
                        <thead class="text-center">
                            <tr>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Lokasi Kampus</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>IPK</th>
                                <th>Posisi</th>
                                <th>File</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($ast->count())
                                @foreach ($ast as $a)
                                    <tr>
                                        <td>{{ $a->npm }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->kelas }}</td>
                                        <td>{{ $a->jurusan }}</td>
                                        <td>{{ $a->lokasi_kampus }}</td>
                                        <td>{{ $a->tempat_tanggal_lahir }}</td>
                                        <td>{{ $a->jenis_kelamin }}</td>
                                        <td>{{ $a->alamat }}</td>
                                        <td>{{ $a->nohp }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>{{ $a->ipk }}</td>
                                        <td>{{ $a->posisi }}</td>
                                        <td>{{ $a->file }}</td>
                                        <td>{{ $a->created_at }}</td>
                                        <td class="text-center">
                                            <a href="/mahasiswaview/dataEdit/{{ $a->npm }}" class="btn btn-primary px-3 rounded-1" type="button">Edit</a>
                                            <a href="/mahasiswaview/delete/{{ $a->npm }}" class="btn btn-primary px-3 rounded-1" type="button">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="15">Not Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="d-flex mt-3 justify-content-sm-start justify-content-center ">
                    {{ $ast->links() }}
                </div>
            </div>
        </div>
    </div>



    {{-- javascript --}}
    @include('partials/script')
</body>

</html>
