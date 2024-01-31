<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('npm',8)->primary();
            $table->string('password',100);
            $table->string('nama',30);
            $table->string('kelas',5)->nullable();
            $table->string('jurusan',30)->nullable();
            $table->string('lokasi_kampus',15)->nullable();
            $table->string('tempat_tanggal_lahir',50)->nullable();
            $table->string('jenis_kelamin',9)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('nohp',15)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('posisi',10)->nullable();
            $table->double('ipk')->default(0)->nullable();
            $table->string('file')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
