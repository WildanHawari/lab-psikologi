<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'npm',
    //     'password',
    //     'email',
    // ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $primaryKey = 'npm';
    protected $keyType = 'string';

    protected $guarded = [];


    public function scopeFilter($query, array $filters) {
        $query->when($filters['search-programmer'] ?? false, function($query, $search_pro) {
            return $query->where('npm','LIKE','%'. $search_pro .'%')
            ->orWhere('nama','LIKE','%'. $search_pro .'%')
            ->orWhere('kelas','LIKE','%'. $search_pro .'%')
            ->orWhere('jurusan','LIKE','%'. $search_pro .'%')
            ->orWhere('lokasi_kampus','LIKE','%'. $search_pro .'%');
        });

        $query->when($filters['search-asisten'] ?? false, function($query, $search_ast) {
            return $query->where('npm','LIKE','%'. $search_ast .'%')
            ->orWhere('nama','LIKE','%'. $search_ast .'%')
            ->orWhere('kelas','LIKE','%'. $search_ast .'%')
            ->orWhere('jurusan','LIKE','%'. $search_ast .'%')
            ->orWhere('lokasi_kampus','LIKE','%'. $search_ast .'%');   
        });
    }

}