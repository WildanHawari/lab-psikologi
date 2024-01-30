<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Storage;

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
        // return $request->file('file')->store('file-mahasiswa');
        // ddd($request);
        // cek request
        $validData = $request->validate([
            'npm' => ['required','min:8','max:8','unique:mahasiswas'],
            'email' => 'required|email:dns|unique:mahasiswas',
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
            'file'=> 'required|mimes:pdf|max:2048'
        ]);
        // hash password
        $validData['password'] = Hash::make($validData['password']);
        // store ke file-mahasiswa
        $validData['file'] = $request->file('file')->store('file-mahasiswa');

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
    public function update(Request $request,Mahasiswa $mhs, $npm) {
        // dd($request->npm);
        $mhs = $mhs->find($npm);
        // dd($request->file != $mhs->file);
        $rules = [
            'npm' => ['min:8','max:8'],
            'email' => 'required|email:dns',
            'nama' =>'required|max:50',
            'password'=> 'min:5',
            'kelas' => 'required|min:5|max:5',
            'jurusan'=> 'required',
            'lokasi_kampus'=> 'required',
            'tempat_tanggal_lahir'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required|max:255',
            'nohp'=> 'required',
            'posisi'=> 'required',
            'ipk'=> 'required',
            'file'=> 'mimes:pdf|max:2048'
        ];
        $validData = $request->validate($rules);
        
        if($request->email != $mhs->email) {
            $rules['email'] = 'required|email:dns|unique:mahasiswas';
        }
        // file update
        if($request->file != null) {
            if($request->file != $mhs->file) {  
                Storage::delete($mhs->file);
                $validData['file'] = $request->file('file')->store('file-mahasiswa');
            }
        }
        Mahasiswa::where('npm',$npm)->update($validData);
        toast('Data Berhasil di Update!','success');
        return redirect('/admin');
    }

    // hapus data
    public function destroy($npm) {
        $datavar = Mahasiswa::find($npm);
        Storage::delete($datavar->file);
        $datavar->delete();
        // dd($datavar->file);
        toast('Data Berhasil di Hapus!','success');

        return redirect('/admin');
    }

}
