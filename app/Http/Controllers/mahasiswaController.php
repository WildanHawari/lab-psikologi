<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB as DB;

class mahasiswaController extends Controller
{
    public function index() {
        // Mengambil data table mahasiswas
        $programmervar = Mahasiswa::where('posisi','=','Programmer');
        $asistenvar = Mahasiswa::where('posisi','=','Asisten');

        // confirm delete
        confirmDelete('Delete Data', 'Are you sure you want to delete?');
        // Mengirim data mahasiswas ke view index
        return view('admin',[
            'tittle' => "Admin",
            'pro' => $programmervar->latest()->filter(request(['search-programmer']))->paginate(7,['*'],'programmer')->appends(request()->all()),
            'ast' => $asistenvar->latest()->filter(request(['search-asisten']))->paginate(7,['*'],'asisten')->appends(request()->all())
        ]);
    }

    public function store(Request $request) {

        // cek request
        $validData = $request->validate([
            'npm' => ['required','min:8','max:8','unique:mahasiswas'],
            'email' => 'email:gmail|unique:mahasiswas',
            'nama' =>'required|max:50',
            'password'=> 'required|min:5',
            'kelas' => 'required|min:5|max:5',
            'jurusan'=> 'required',
            'lokasi_kampus'=> 'required',
            'tempat_tanggal_lahir'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required|:255',
            'nohp'=> 'required',
            'posisi'=> 'required',
            'ipk'=> 'required',
            'file'=> 'required'
        ]);
        // hash password
        $validData['password'] = Hash::make($validData['password']);

        Mahasiswa::create($validData);
        // dd($validData);
        toast('Data Berhasil di Daftarkan!','success');
        // mengalihkan ke halaman add
        return redirect('/mahasiswa/daftar');
    }

    // edit data
    public function dataEdit($npm) {    
        $datavar = Mahasiswa::where('npm',$npm)->get();

        return view('/mahasiswa/edit', [
            'data' => $datavar,
            'tittle' => "Edit Data"]);
    }

    // update data mahasiswas
    public function update(Request $request, $npm) {
        Mahasiswa::where('npm',$npm)->update([
            'npm'=> $request->npm,
            'password'=> $request->password,
            'nama'=> $request->nama,
            'kelas'=> $request->kelas,
            'jurusan'=> $request->jurusan,
            'lokasi_kampus'=> $request->lokasi,
            'tempat_tanggal_lahir'=> $request->ttl,
            'jenis_kelamin'=> $request->jenkel,
            'alamat'=> $request->alamat,
            'nohp'=> $request->nohp,
            'email'=> $request->email,
            'posisi'=> $request->posisi,
            'ipk'=> $request->ipk,
            'file'=> $request->file
        ]);

        toast('Data Berhasil di Update!','success');
        return redirect('/admin');
    }

    // hapus data
    public function destroy($npm) {
        $datavar = Mahasiswa::find($npm);
        // $datavar->delete();
        dd($datavar);
        toast('Data Berhasil di Hapus!','success');

        return redirect('/admin');
    }

}
