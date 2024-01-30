<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=data_programmer.xls');
?>
<div>
    <h2>Data Programmer</h2><br><br>
</div>
<fieldset>
    <table class="table">
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
            <?php $pro = DB::table('mahasiswas')
                ->where('posisi', 'Programmer')
                ->get(); ?>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</fieldset>
